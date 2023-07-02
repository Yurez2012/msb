<?php

namespace App\Models;

use App\Data\Models\RequestBench;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarUser extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'cars_users';

    /**
     * @var string[]
     */
    protected $fillable = [
        "user_id",
        "car_id",
    ];
}
