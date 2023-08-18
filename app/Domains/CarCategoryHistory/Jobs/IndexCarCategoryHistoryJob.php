<?php

namespace App\Domains\CarCategoryHistory\Jobs;

use App\Data\Repositories\CarCategoryHistoryRepository;
use App\Models\Car;
use App\Models\Category;

class IndexCarCategoryHistoryJob
{
    /**
     * @param Car      $car
     * @param Category $category
     */
    public function __construct(private readonly Car $car, private readonly Category $category)
    {
    }

    /**
     * @param CarCategoryHistoryRepository $carCategoryHistoryRepository
     *
     * @return void
     */
    public function handle(CarCategoryHistoryRepository $carCategoryHistoryRepository)
    {
        return $carCategoryHistoryRepository->getHistoryByCategoryIdAndCarId($this->car->id, $this->category->id);
    }
}
