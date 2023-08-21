<?php

namespace App\Services\MyServiceBook\Http\Resources\Car;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 *
 */
class CarResource extends JsonResource
{
    /**
     * @var mixed
     */
    private static mixed $distance;

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
        return [
            "id"                     => $this->id,
            "vin"                    => $this->vin,
            "make"                   => $this->make,
            "manufacturer"           => $this->manufacturer,
            "country"                => $this->country,
            "manufacturer_address"   => $this->manufacturer_address,
            "model"                  => $this->model,
            "series"                 => $this->series,
            "check_digit"            => $this->check_digit,
            "sequential_number"      => $this->sequential_number,
            "body"                   => $this->body,
            "length"                 => $this->length,
            "width"                  => $this->width,
            "height"                 => $this->height,
            "max_speed"              => $this->max_speed,
            "type"                   => $this->type,
            "model_year"             => $this->model_year,
            "number_of_seats"        => $this->number_of_seats,
            "number_of_doors"        => $this->number_of_doors,
            "number_of_axles"        => $this->number_of_axles,
            "wheelbase"              => $this->wheelbase,
            "wheel_size"             => $this->wheel_size,
            "transmission"           => $this->transmission,
            "abs"                    => $this->abs,
            "max_roof_load"          => $this->max_roof_load,
            "permitted_trailer_load" => $this->permitted_trailer_load,
            "drive"                  => $this->drive,
            "steering_type"          => $this->steering_type,
            "distance"               => self::$distance,
            "created_at"             => $this->created_at,
            "updated_at"             => $this->updated_at,
        ];
    }
}
