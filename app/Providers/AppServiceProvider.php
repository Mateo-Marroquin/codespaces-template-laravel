<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // Importa esto al inicio del archivo

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
{
    if (env('APP_ENV') !== 'local' || str_contains(env('APP_URL'), 'github.dev')) {
        URL::forceScheme('https');
    }
}
}
