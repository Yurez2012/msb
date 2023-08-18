<?php

namespace App\Services\MyServiceBook\Http\Resources\CarCategoryHistory;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 *
 */
class CarCategoryHistoryResource extends JsonResource
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
            'id'              => $this->id,
            'car_category_id' => $this->car_category_id,
            'distance'        =>  number_format($this->distance),
            'created_at'      => $this->created_at,
            'updated_at'      => $this->updated_at,
        ];
    }
}
