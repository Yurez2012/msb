<?php

namespace App\Services\MyServiceBook\Features\CarCategoryHistory;

use App\Domains\CarCategory\Jobs\GetCarCategoryJob;
use App\Domains\CarCategoryHistory\Jobs\StoreCarCategoryHistoryJob;
use App\Domains\Http\Jobs\RespondWithJsonJob;
use App\Models\Car;
use App\Models\Category;
use App\Services\MyServiceBook\Http\Requests\CarHistory\StoreCarHistoryRequest;
use Illuminate\Http\Response;
use Lucid\Units\Feature;

class StoreCarCategoryHistoryFeature extends Feature
{
    public function __construct(protected Car $car, protected Category $category)
    {
    }

    public function handle(StoreCarHistoryRequest $request)
    {
        $data = $request->validated();

        $carCategory = $this->run(new GetCarCategoryJob($this->car, $this->category));
        $history     = $this->run(new StoreCarCategoryHistoryJob($carCategory, $data));

        return $this->run(new RespondWithJsonJob($history, Response::HTTP_OK));
    }
}
