<?php

namespace App\Services\MyServiceBook\Http\Resources\CarSetting;

use App\Models\CarSetting;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * App\Data\Models\BambooHrUser
 *
 * @mixin CarSetting
 */
class CarSettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'             => $this->id,
            'car_id'         => $this->car_id,
            'distance'       => $this->distance,
            'distance_month' => $this->distance_month,
        ];
    }
}
