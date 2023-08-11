<?php

namespace App\Services\MyServiceBook\Http\Requests\CarSetting;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarSettingRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            'distance'       => ['numeric'],
            'distance_month' => ['numeric'],
        ];
    }
}
