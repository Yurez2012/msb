<?php

namespace App\Domains\Car\Jobs;

use App\Models\Car;

class CreateCarJob
{
    /**
     * @param array $data
     */
    public function __construct(public array $data)
    {
    }

    /**
     * @return mixed
     */
    public function handle()
    {
        return Car::create($this->data);
    }
}
