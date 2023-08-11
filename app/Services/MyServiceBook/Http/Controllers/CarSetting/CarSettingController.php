<?php

namespace App\Services\MyServiceBook\Http\Controllers\CarSetting;

use App\Models\Car;
use App\Services\MyServiceBook\Features\CarSetting\IndexCarSettingFeature;
use App\Services\MyServiceBook\Features\CarSetting\StoreCarSettingFeature;
use Lucid\Units\Controller;

class CarSettingController extends Controller
{
    /**
     * @return mixed
     */
    public function index(Car $car)
    {
        return $this->serve(IndexCarSettingFeature::class, [
            'car' => $car
        ]);
    }

    /**
     * @return mixed
     */
    public function store(Car $car)
    {
        return $this->serve(StoreCarSettingFeature::class, [
            'car' => $car
        ]);
    }
}
