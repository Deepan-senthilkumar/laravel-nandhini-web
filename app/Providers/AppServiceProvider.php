<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
<<<<<<< HEAD
        if (config('app.env') === 'production') {
=======
        if (config('app.env') === 'production' || env('APP_ENV') === 'production') {
>>>>>>> 6a759e5036fda1035cc0c063e54488392a0fa321
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }
    }
}
