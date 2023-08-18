<?php

namespace App\Data\Repositories;

use App\Models\CarCategoryHistory;

/**
 *
 */
class CarCategoryHistoryRepository extends Repository
{
    /**
     * @param CarCategoryHistory $carCategoryHistory
     */
    public function __construct(CarCategoryHistory $carCategoryHistory)
    {
        parent::__construct($carCategoryHistory);
    }

    /**
     * @param int $carId
     * @param int $categoryId
     *
     * @return mixed
     */
    public function getHistoryByCategoryIdAndCarId
    (
        int $carId,
        int $categoryId,
    )
    {
        return $this->model
            ->where('car_category_id', $categoryId)
            ->whereHas('categories', function ($q) use ($carId, $categoryId) {
                $q->where('car_id', $carId);
            })->get();
    }
}
