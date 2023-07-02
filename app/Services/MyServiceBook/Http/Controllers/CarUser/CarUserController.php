<?php

namespace App\Services\MyServiceBook\Http\Controllers\CarUser;

use App\Models\Car;
use App\Services\MyServiceBook\Features\CarUser\StoreCarUserFeature;
use Lucid\Units\Controller;

class CarUserController extends Controller
{
    /**
     * @return mixed
     */
    public function store(Car $car)
    {
        return $this->serve(StoreCarUserFeature::class, [
            'car' => $car,
        ]);
    }
}
