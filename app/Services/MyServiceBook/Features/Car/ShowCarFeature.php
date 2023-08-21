<?php

namespace App\Services\MyServiceBook\Features\Car;

use App\Domains\CarSetting\Jobs\CalcCarSettingDistanceByTimeJob;
use App\Domains\Http\Jobs\RespondWithJsonJob;
use App\Models\Car;
use App\Services\MyServiceBook\Http\Resources\Car\CarResource;
use Illuminate\Http\Response;
use Lucid\Units\Feature;

class ShowCarFeature extends Feature
{
    public function __construct(protected Car $car)
    {
        $this->car->load(['setting']);
    }

    public function handle()
    {
        $distance = $this->run(new CalcCarSettingDistanceByTimeJob($this->car));

        CarResource::setDistance($distance);

        return $this->run(new RespondWithJsonJob(CarResource::make($this->car), Response::HTTP_OK));
    }
}
