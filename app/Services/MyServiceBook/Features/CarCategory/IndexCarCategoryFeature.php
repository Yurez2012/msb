<?php

namespace App\Services\MyServiceBook\Features\CarCategory;

use App\Domains\CarCategory\Jobs\PrepareCarCategoryJob;
use App\Domains\Http\Jobs\RespondWithJsonJob;
use App\Models\Car;
use App\Services\MyServiceBook\Http\Resources\CarCategory\CarCategoryResource;
use Illuminate\Http\Response;
use Lucid\Units\Feature;

class IndexCarCategoryFeature extends Feature
{
    public function __construct(protected Car $car)
    {
        $this->car->load('categories');
    }

    public function handle()
    {
        $data = $this->run(new PrepareCarCategoryJob($this->car));

        return $this->run(new RespondWithJsonJob(
            CarCategoryResource::collection($data),
            Response::HTTP_OK
        ));
    }
}
