<?php

namespace App\Services\MyServiceBook\Http\Controllers\Car;

use App\Models\Car;
use App\Services\MyServiceBook\Features\Car\DeleteCarFeature;
use App\Services\MyServiceBook\Features\Car\IndexCarFeature;
use App\Services\MyServiceBook\Features\Car\ShowCarFeature;
use App\Services\MyServiceBook\Features\Car\StoreCarFeature;
use Lucid\Units\Controller;

class CarController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return $this->serve(IndexCarFeature::class);
    }

    /**
     * @return mixed
     */
    public function show(Car $car)
    {
        return $this->serve(ShowCarFeature::class, [
            'car' => $car
        ]);
    }

    /**
     * @return mixed
     */
    public function store()
    {
        return $this->serve(StoreCarFeature::class);
    }

    /**
     * @return mixed
     */
    public function destroy()
    {
        return $this->serve(DeleteCarFeature::class);
    }
}
