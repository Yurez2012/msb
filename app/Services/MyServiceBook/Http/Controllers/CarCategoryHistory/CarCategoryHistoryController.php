<?php

namespace App\Services\MyServiceBook\Http\Controllers\CarCategoryHistory;

use App\Models\Car;
use App\Models\Category;
use App\Services\MyServiceBook\Features\CarCategoryHistory\IndexCarCategoryHistoryFeature;
use Lucid\Units\Controller;

class CarCategoryHistoryController extends Controller
{
    /**
     * @return mixed
     */
    public function index(Car $car, Category $category)
    {
        return $this->serve(IndexCarCategoryHistoryFeature::class, [
            'car'      => $car,
            'category' => $category,
        ]);
    }
}
