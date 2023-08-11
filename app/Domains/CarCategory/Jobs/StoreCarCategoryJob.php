<?php

namespace App\Domains\CarCategory\Jobs;

use App\Models\Car;
use Illuminate\Support\Arr;

class StoreCarCategoryJob
{
    /**
     * @param Car   $car
     * @param array $data
     */
    public function __construct(protected readonly Car $car, protected array $data)
    {
    }

    /**
     * @return void
     */
    public function handle()
    {
        $this->car->categories()->updateOrCreate(
            Arr::only($this->data, 'category_id'),
            $this->data,
        );
    }
}
