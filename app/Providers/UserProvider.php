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
                 'name' => 'Jervaks Alentajan',
                 'gender' => 'Female'
                ],
                [
                    'name' => 'Althea Fernandez',
                    'gender' => 'Male'
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
