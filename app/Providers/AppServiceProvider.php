<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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
        $appUrl = env('RENDER_EXTERNAL_URL') ?: config('app.url');

        if (is_string($appUrl) && $appUrl !== '' && ! str_contains($appUrl, 'localhost')) {
            URL::forceRootUrl(rtrim($appUrl, '/'));
        }

        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
