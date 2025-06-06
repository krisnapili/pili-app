<?php

namespace App\Providers;

use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class UserProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UserService::class, function ($app) {
            $users = [
                [
                    'id' => 1,
                    'name' => 'Krisna',
                    'gender' => 'Female'
                ],
                [
                    'id' => 2,
                    'name' => 'Althea',
                    'gender' => 'Female'
                ]
            ];

            return new UserService($users);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}