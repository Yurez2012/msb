<?php

namespace App\Domains\CarCategory\Jobs;

use App\Data\Repositories\CategoryRepository;
use App\Models\Car;
use Illuminate\Support\Arr;

class PrepareCarCategoryJob
{
    /**
     * @param Car $car
     */
    public function __construct(private readonly Car $car)
    {
    }

    /**
     * @param CategoryRepository $categoryRepository
     *
     * @return array
     */
    public function handle(CategoryRepository $categoryRepository)
    {
        $data     = [];
        $category = $categoryRepository->all();

        foreach ($category->toArray() as $item) {
            $carCategory = $this->car->categories->where('category_id', Arr::get($item, 'id'))->first();

            if ($carCategory) {
                $item['enable'] = $carCategory->enable;
            } else {
                $item['enable'] = false;
            }

            $data[] = $item;
        }

        return $data;
    }
}
