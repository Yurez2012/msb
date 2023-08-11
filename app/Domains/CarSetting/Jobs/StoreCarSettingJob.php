<?php

namespace App\Domains\CarSetting\Jobs;

use App\Models\Car;

class StoreCarSettingJob
{
    /**
     * @param Car   $car
     * @param array $data
     */
    public function __construct(private readonly Car $car, private readonly array $data)
    {
    }

    /**
     * @return \Illuminate\Database\Eloquent\Model|int
     */
    public function handle()
    {
        if($this->car->setting()->exists()) {
            return $this->car->setting()->update($this->data);
        }

        return $this->car->setting()->create($this->data);
    }
}
