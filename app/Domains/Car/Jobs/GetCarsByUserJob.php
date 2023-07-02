<?php

namespace App\Domains\Car\Jobs;

use App\Data\Repositories\CarRepository;

class GetCarsByUserJob
{
    /**
     *
     */
    public function __construct(){}

    /**
     * @return mixed
     */
    public function handle(CarRepository $carRepository)
    {
        return $carRepository->getCarsByUser();
    }
}
