<?php

namespace App\Services\MyServiceBook\Http\Controllers\Category;

use App\Services\MyServiceBook\Features\Category\IndexCategoryFeature;
use Lucid\Units\Controller;

class CategoryController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return $this->serve(IndexCategoryFeature::class);
    }
}
