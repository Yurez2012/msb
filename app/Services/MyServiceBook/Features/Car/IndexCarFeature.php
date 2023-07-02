<?php

namespace App\Services\MyServiceBook\Features\Car;

use App\Domains\Car\Jobs\GetCarsByUserJob;
use App\Domains\Http\Jobs\RespondWithJsonJob;
use Illuminate\Http\Response;
use Lucid\Units\Feature;

class IndexCarFeature extends Feature
{
    public function handle()
    {
        $cars = $this->run(new GetCarsByUserJob());

        return $this->run(new RespondWithJsonJob($cars->toArray(), Response::HTTP_OK));
    }
}
