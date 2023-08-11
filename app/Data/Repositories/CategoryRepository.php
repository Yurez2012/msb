<?php

namespace App\Data\Repositories;

use App\Models\Category;

/**
 * Base Repository.
 */
class CategoryRepository extends Repository
{
    /**
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        parent::__construct($category);
    }
}
