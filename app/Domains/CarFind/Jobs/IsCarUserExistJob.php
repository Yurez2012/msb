<?php

namespace App\Domains\CarFind\Jobs;

use App\Models\Car;

class IsCarUserExistJob
{
    /**
     * @param Car $car
     */
    public function __construct
    (
        public Car $car,
    )
    {}

    /**
     * @return mixed
     */
    public function handle()
    {
        return $this->car->users()
            ->where('user_id', auth()->user()->id)
            ->exists();
    }
}
