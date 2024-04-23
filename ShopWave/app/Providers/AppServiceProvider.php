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
        $appUrl = config('app.url');
        URL::forceRootUrl($appUrl);
        $parseUrl = parse_url($appUrl);
        if($parseUrl['scheme'] == 'https') {
            URL::forceScheme('https');
        }
    }
}
