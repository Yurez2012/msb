<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        "vin",
        "make",
        "manufacturer",
        "country",
        "manufacturer_address",
        "model",
        "series",
        "check_digit",
        "sequential_number",
        "body",
        "length",
        "width",
        "height",
        "max_speed",
        "type",
        "model_year",
        "number_of_seats",
        "number_of_doors",
        "number_of_axles",
        "wheelbase",
        "wheel_size",
        "transmission",
        "abs",
        "max_roof_load",
        "permitted_trailer_load",
        "drive",
        "steering_type",
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CarUser::class, 'car_id');
    }
}
