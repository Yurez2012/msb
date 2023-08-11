<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarSetting extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'car_id',
        'distance',
        'distance_month',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function car(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Car::class, 'id', 'car_id')->withDefault();
    }
}
