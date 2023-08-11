<?php

namespace App\Services\MyServiceBook\database\seeders;

use App\Data\Enum\ToEnum;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (ToEnum::cases() as $value) {
            Category::firstOrCreate([
                'title' => $value->name
            ]);
        }
    }
}
