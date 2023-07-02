<?php

namespace App\Services\MyServiceBook\Http\Controllers\Auth;

use App\Services\MyServiceBook\Features\Auth\LoginFeature;
use Lucid\Units\Controller;

class LoginController extends Controller
{
    /**
     * @return mixed
     */
    public function store()
    {
        return $this->serve(LoginFeature::class);
    }
}
