<?php

namespace App\Services\MyServiceBook\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules()
    {
        return [
            'name'    => [
                'required',
                'string',
            ],
            'email'    => [
                'required',
                'email' => 'email:rfc',
                'unique:users,email'
            ],
            'password' => [
                'required',
                'string',
                'confirmed',
            ],
        ];
    }
}
