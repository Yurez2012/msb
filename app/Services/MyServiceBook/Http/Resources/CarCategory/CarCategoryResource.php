<?php

namespace App\Services\MyServiceBook\Http\Resources\CarCategory;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 *
 */
class CarCategoryResource extends JsonResource
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
            'id'         => $this->resource["id"],
            'title'      => $this->resource["title"],
            'created_at' => $this->resource["created_at"],
            'updated_at' => $this->resource["updated_at"],
            'name'       => $this->resource["name"],
            'enable'     => $this->resource["enable"],
        ];
    }
}
