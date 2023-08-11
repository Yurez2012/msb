<?php

namespace App\Services\MyServiceBook\Features\Category;

use App\Domains\Category\Jobs\GetCategoriesJob;
use App\Domains\Http\Jobs\RespondWithJsonJob;
use Illuminate\Http\Response;
use Lucid\Units\Feature;

class IndexCategoryFeature extends Feature
{
    public function handle()
    {
        $category = $this->run(new GetCategoriesJob());

        return $this->run(new RespondWithJsonJob($category->toArray(), Response::HTTP_OK));
    }
}
