<?php

namespace App\Data\Repositories;

use App\Models\Car;

/**
 * Base Repository.
 */
class CarRepository extends Repository
{
    /**
     * @param Car $car
     */
    public function __construct(Car $car)
    {
        parent::__construct($car);
    }

    /**
     * @param string $vincode
     *
     * @return mixed
     */
    public function getCarByVIN(string $vincode)
    {
        return $this->model
            ->where('vin', $vincode)
            ->first();
    }

    /**
     * @return mixed
     */
    public function getCarsByUser()
    {
        return $this->model
            ->whereHas('users', function ($q) {
                $q->where('user_id', auth()->user()->id);
            })->get();
    }
}
