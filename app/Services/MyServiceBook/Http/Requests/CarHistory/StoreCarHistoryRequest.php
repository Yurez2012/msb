<?php

namespace App\Services\MyServiceBook\Http\Requests\CarHistory;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarHistoryRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            'distance'   => ['numeric'],
            'created_at' => ['string'],
        ];
    }
}
