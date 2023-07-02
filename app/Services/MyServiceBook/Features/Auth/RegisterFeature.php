<?php

namespace App\Services\MyServiceBook\Features\Auth;

use App\Domains\Http\Jobs\RespondWithJsonJob;
use App\Domains\User\Jobs\CreateUserJob;
use App\Models\User;
use App\Services\MyServiceBook\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Lucid\Units\Feature;

class RegisterFeature extends Feature
{
    public function handle(RegisterRequest $request)
    {
        /** @var array $data */
        $data = $request->all();

        /** @var User $user */
        $user = $this->run(new CreateUserJob(
            Arr::get($data, 'name'),
            Arr::get($data, 'email'),
            Arr::get($data, 'password'),
        ));

        $token = $user->createToken('Laravel Password Grant Client')->accessToken;

        return $this->run(new RespondWithJsonJob(['token' => $token], Response::HTTP_OK));
    }
}
