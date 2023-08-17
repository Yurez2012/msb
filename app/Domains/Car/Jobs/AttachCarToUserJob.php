<?php

namespace App\Domains\Car\Jobs;

use App\Data\Repositories\CarRepository;
use App\Models\Car;

class AttachCarToUserJob
{
    /**
     *
     */
    public function __construct(protected Car $car){}

    /**
     * @return mixed
     */
    public function handle(CarRepository $carRepository)
    {
        return $this->car->users()->create([
            'user_id' => auth()->user()->id
        ]);
    }
}
