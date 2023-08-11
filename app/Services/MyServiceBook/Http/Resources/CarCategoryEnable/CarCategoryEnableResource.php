<?php

namespace App\Services\MyServiceBook\Http\Resources\CarCategoryEnable;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 *
 */
class CarCategoryEnableResource extends JsonResource
{
    /**
     * @var int
     */
    private static int $distance;

    /**
     * @param mixed $distance
     *
     * @return void
     */
    public static function setDistance(mixed $distance)
    {
        static::$distance = $distance;
    }

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        $lastHistory     = $this->resource->histories->first();
        $isShouldReplace = true;

        if (isset($lastHistory->distance)) {
            $isShouldReplace = $lastHistory->distance + $this->resource["distance"] <= self::$distance;
        }

        return [
            'id'                => $this->resource["id"],
            'title'             => $this->resource->category->name ?? '',
            'created_at'        => $this->resource["created_at"],
            'updated_at'        => $this->resource["updated_at"],
            'name'              => $this->resource->category->title,
            'enable'            => $this->resource["enable"],
            'distance'          => $this->resource["distance"],
            'is_should_replace' => $isShouldReplace,
            'histories'         => $this->resource->histories,
        ];
    }
}
