<?php

namespace App\Services\MyServiceBook\Features\CarCategory;

use App\Domains\CarCategory\Jobs\PrepareCarCategoryJob;
use App\Domains\CarCategory\Jobs\StoreCarCategoryJob;
use App\Domains\Http\Jobs\RespondWithJsonJob;
use App\Models\Car;
use App\Services\MyServiceBook\Http\Requests\CarCategory\StoreCarSettingRequest;
use App\Services\MyServiceBook\Http\Resources\CarCategory\CarCategoryResource;
use Illuminate\Http\Response;
use Lucid\Units\Feature;

class StoreCarCategoryFeature extends Feature
{
    public function __construct(protected Car $car)
    {
    }

    public function handle(StoreCarSettingRequest $request)
    {
        $data = $request->validated();

        $this->run(new StoreCarCategoryJob($this->car, $data));

        return $this->run(new RespondWithJsonJob([], Response::HTTP_OK));
    }
}
