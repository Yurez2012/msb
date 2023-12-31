<?php

namespace App\Models;

use App\Data\Enum\ToEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $appends = [
        'name'
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'title'
    ];

    /**
     * @return string
     */
    public function getNameAttribute()
    {
        return ToEnum::fromName($this->title);
    }

    /**
     * @return HasMany
     */
    public function cars(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Car::class, 'category_id');
    }
}
