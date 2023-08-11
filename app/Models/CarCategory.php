<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarCategory extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'car_id',
        'category_id',
        'enable',
    ];

    protected $casts = [
        'enable' => 'boolean'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function car(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Car::class, 'id', 'car_id')->withDefault();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id')->withDefault();
    }
}
