<?php

namespace App\Services\MyServiceBook\Http\Controllers\CarCategoryEnable;

use App\Models\Car;
use App\Services\MyServiceBook\Features\CarCategoryEnable\IndexCarCategoryEnableFeature;
use Lucid\Units\Controller;

class CarCategoryEnableController extends Controller
{
    /**
     * @return mixed
     */
    public function index(Car $car)
    {
        return $this->serve(IndexCarCategoryEnableFeature::class, [
            'car' => $car
        ]);
    }
}
