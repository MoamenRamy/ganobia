<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Gate::define('view-admin', function ($user) {
            return in_array($user->role_id, [1]);
        });

        Gate::define('view-afrad', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        Gate::define('view-moganaden', function ($user) {
            return in_array($user->role_id, [1, 2, 3]);
        });

        Gate::define('view-rateb3aly', function ($user) {
            return in_array($user->role_id, [1, 2, 4]);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
}