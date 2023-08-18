<?php

namespace App\Services\MyServiceBook\Features\CarCategoryEnable;

use App\Domains\CarSetting\Jobs\CalcCarSettingDistanceByTimeJob;
use App\Domains\Http\Jobs\RespondWithJsonJob;
use App\Models\Car;
use App\Services\MyServiceBook\Http\Resources\CarCategoryEnable\CarCategoryEnableResource;
use Illuminate\Http\Response;
use Lucid\Units\Feature;

class IndexCarCategoryEnableFeature extends Feature
{
    public function __construct(protected Car $car)
    {
        $this->car->load(['categoriesEnable.category', 'categoriesEnable.histories', 'setting']);
    }

    public function handle()
    {
        $distance = $this->run(new CalcCarSettingDistanceByTimeJob($this->car));

        CarCategoryEnableResource::setDistance($distance);

        return $this->run(new RespondWithJsonJob(
            CarCategoryEnableResource::collection($this->car->categoriesEnable),
            Response::HTTP_OK
        ));
    }
}
