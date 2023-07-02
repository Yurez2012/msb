<?php

namespace App\Domains\CarUser\Jobs;

use PhpParser\Node\Stmt\If_;

class PrepareDataCarApiJob
{
    /**
     * @param $data
     */
    public function __construct(public $data)
    {
    }

    /**
     * @return mixed
     */
    public function handle()
    {
        $data = [];

        foreach ($this->data->decode as $item) {
            foreach (config('vin_api') as $key => $value) {
                if ($value == $item->label) {
                    $data[$key] = $item->value;
                }
            }
        }

        return $data;
    }
}
