<?php

namespace App\Services\MyServiceBook\Features\CarCategoryHistory;

use App\Domains\CarCategoryHistory\Jobs\IndexCarCategoryHistoryJob;
use App\Domains\Http\Jobs\RespondWithJsonJob;
use App\Models\Car;
use App\Models\Category;
use App\Services\MyServiceBook\Http\Resources\CarCategoryHistory\CarCategoryHistoryResource;
use Illuminate\Http\Response;
use Lucid\Units\Feature;

class IndexCarCategoryHistoryFeature extends Feature
{
    public function __construct(protected Car $car, protected Category $category)
    {}

    public function handle()
    {
        $history = $this->run(new IndexCarCategoryHistoryJob($this->car, $this->category));

        return $this->run(new RespondWithJsonJob(
            CarCategoryHistoryResource::collection($history),
            Response::HTTP_OK
        ));
    }
}
