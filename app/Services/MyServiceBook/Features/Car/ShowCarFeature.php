<?php

namespace App\Services\MyServiceBook\Features\Car;

use App\Domains\Http\Jobs\RespondWithJsonJob;
use App\Models\Car;
use Illuminate\Http\Response;
use Lucid\Units\Feature;

class ShowCarFeature extends Feature
{
    public function __construct(protected Car $car)
    {
    }

    public function handle()
    {
        return $this->run(new RespondWithJsonJob($this->car, Response::HTTP_OK));
    }
}
