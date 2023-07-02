<?php

namespace App\Services\MyServiceBook\Features\Auth;

use App\Domains\Http\Jobs\RespondWithJsonJob;
use App\Services\MyServiceBook\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Lucid\Units\Feature;

class LoginFeature extends Feature
{
    public function handle(LoginRequest $request)
    {
        $data = $request->validated();

        if (Auth::attempt($data)) {
            $token = auth()->user()->createToken('Laravel Password Grant Client')->accessToken;

            return $this->run(new RespondWithJsonJob(['token' => $token], Response::HTTP_OK));
        }

        return $this->run(new RespondWithJsonJob(['message' => 'Username or password incorrect'], Response::HTTP_BAD_REQUEST));
    }
}
