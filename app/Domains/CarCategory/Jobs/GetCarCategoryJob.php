<?php

namespace App\Domains\CarCategory\Jobs;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Support\Arr;

class GetCarCategoryJob
{
    /**
     * @param Car      $car
     * @param Category $category
     */
    public function __construct(protected readonly Car $car, protected readonly Category $category)
    {
    }

    /**
     * @return void
     */
    public function handle()
    {
        return $this->car->categories->where('category_id', $this->category->id)->first();
    }
}
