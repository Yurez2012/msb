<?php

namespace App\Services\MyServiceBook\Http\Requests\CarCategory;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarSettingRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            'category_id' => ['numeric'],
            'enable'      => ['boolean'],
            'distance'    => ['numeric'],
        ];
    }
}
