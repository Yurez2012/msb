<?php

namespace App\Domains\CarCategoryHistory\Jobs;

use App\Models\CarCategory;

class StoreCarCategoryHistoryJob
{
    /**
     * @param CarCategory $carCategory
     * @param array       $data
     */
    public function __construct(private readonly CarCategory $carCategory, private readonly array $data)
    {
    }

    /**
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function handle()
    {
        return $this->carCategory
            ->histories()
            ->create($this->data);
    }
}
