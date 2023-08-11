<?php

namespace App\Services\MyServiceBook\Features\CarSetting;

use App\Domains\Http\Jobs\RespondWithJsonJob;
use App\Models\Car;
use App\Services\MyServiceBook\Http\Resources\CarSetting\CarSettingResource;
use Illuminate\Http\Response;
use Lucid\Units\Feature;

class IndexCarSettingFeature extends Feature
{
    public function __construct(protected Car $car)
    {
        $this->car->load('setting');
    }

    public function handle()
    {
        return $this->run(new RespondWithJsonJob(
            CarSettingResource::make($this->car->setting), Response::HTTP_OK
        ));
    }
}
