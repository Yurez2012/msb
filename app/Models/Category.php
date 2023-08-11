<?php

namespace App\Models;

use App\Data\Enum\ToEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
