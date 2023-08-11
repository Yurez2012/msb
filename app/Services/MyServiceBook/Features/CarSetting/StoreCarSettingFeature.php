<?php

namespace App\Services\MyServiceBook\Features\CarSetting;

use App\Domains\CarSetting\Jobs\StoreCarSettingJob;
use App\Domains\Http\Jobs\RespondWithJsonJob;
use App\Models\Car;
use App\Services\MyServiceBook\Http\Requests\CarSetting\StoreCarSettingRequest;
use Lucid\Units\Feature;

class StoreCarSettingFeature extends Feature
{
    public function __construct(protected Car $car){}

    public function handle(StoreCarSettingRequest $request)
    {
        $data = $request->validated();

        $this->run(new StoreCarSettingJob($this->car, $data));

        return $this->run(new RespondWithJsonJob([]));
    }
}
