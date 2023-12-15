<?php

namespace App\Providers;

use App\Services\ExternalApiService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(ExternalApiService::class, function ($app) {
            // You can use configuration or environment variables for the base API URL
            $apiBaseUrl = config('services.external_api.base_url');

            return new ExternalApiService($apiBaseUrl);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Paginator::useBootstrapFour();
    }
}
