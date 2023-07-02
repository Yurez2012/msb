<?php

namespace App\Services\MyServiceBook\Features\CarUser;


use App\Domains\CarFind\Jobs\IsCarUserExistJob;
use App\Domains\CarFind\Jobs\StoreCarUserJob;
use App\Domains\Http\Jobs\RespondWithJsonJob;
use App\Models\Car;
use Illuminate\Http\Response;
use Lucid\Units\Feature;

class StoreCarUserFeature extends Feature
{
    public function __construct(public Car $car)
    {
    }

    public function handle()
    {
        $isExist = $this->run(new IsCarUserExistJob($this->car));

        if(!$isExist) {
            $this->run(new StoreCarUserJob($this->car));
        }

        return $this->run(new RespondWithJsonJob([], Response::HTTP_OK));
    }
}
