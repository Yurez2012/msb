<?php

namespace App\Services\MyServiceBook\Http\Controllers\CarCategory;

use App\Models\Car;
use App\Services\MyServiceBook\Features\CarCategory\IndexCarCategoryFeature;
use App\Services\MyServiceBook\Features\CarCategory\StoreCarCategoryFeature;
use Lucid\Units\Controller;

class CarCategoryController extends Controller
{
    /**
     * @return mixed
     */
    public function index(Car $car)
    {
        return $this->serve(IndexCarCategoryFeature::class, [
            'car' => $car
        ]);
    }

    /**
     * @return mixed
     */
    public function store(Car $car)
    {
        return $this->serve(StoreCarCategoryFeature::class, [
            'car' => $car
        ]);
    }
}
