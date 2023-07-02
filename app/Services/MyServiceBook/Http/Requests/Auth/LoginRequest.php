<?php

namespace App\Services\MyServiceBook\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            'email'    => [
                'required',
                'email' => 'email:rfc',
            ],
            'password' => [
                'required',
                'string',
            ],
        ];
    }
}
