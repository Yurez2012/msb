<?php

namespace App\Domains\Category\Jobs;

use App\Data\Repositories\CategoryRepository;

class GetCategoriesJob
{
    /**
     *
     */
    public function __construct(){}

    /**
     * @return mixed
     */
    public function handle(CategoryRepository $categoryRepository)
    {
        return $categoryRepository->all();
    }
}
