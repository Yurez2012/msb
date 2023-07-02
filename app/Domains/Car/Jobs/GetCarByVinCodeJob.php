<?php

namespace App\Domains\Car\Jobs;

use App\Data\Repositories\CarRepository;

class GetCarByVinCodeJob
{
    /**
     * @param string $vincode
     */
    public function __construct
    (
        public string $vincode,
    )
    {}

    /**
     * @return mixed
     */
    public function handle(CarRepository $carRepository)
    {
        return $carRepository->getCarByVIN($this->vincode);
    }
}
