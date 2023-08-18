<?php

namespace App\Domains\CarSetting\Jobs;

use App\Models\Car;

class CalcCarSettingDistanceByTimeJob
{
    /**
     * @param Car   $car
     * @param array $data
     */
    public function __construct(private readonly Car $car)
    {
    }

    /**
     * @return float|int
     */
    public function handle()
    {
        $distance        = $this->car->setting->distance;
        $distanceMonth   = $this->car->setting->distance_month;
        $date            = $this->car->setting->updated_at ?: now();
        $distanceByMonth = $date->diffInMonths(now()) * $distanceMonth;

        return $distance + $distanceByMonth;
    }
}
