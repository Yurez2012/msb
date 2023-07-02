<?php

namespace App\Services\MyServiceBook\Http\Controllers\Auth;

use App\Services\MyServiceBook\Features\Auth\RegisterFeature;
use Lucid\Units\Controller;

class RegisterController extends Controller
{
    /**
     * @return mixed
     */
    public function store()
    {
        return $this->serve(RegisterFeature::class);
    }
}
