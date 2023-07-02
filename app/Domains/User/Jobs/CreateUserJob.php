<?php

namespace App\Domains\User\Jobs;

use App\Models\User;

class CreateUserJob
{
    /**
     * @param string $name
     * @param string $email
     * @param string $password
     */
    public function __construct
    (
        public string $name,
        public string $email,
        public string $password,
    )
    {}

    /**
     * @return mixed
     */
    public function handle()
    {
        return User::create([
            'name'     => $this->name,
            'email'    => $this->email,
            'password' => bcrypt($this->password),
        ]);
    }
}
