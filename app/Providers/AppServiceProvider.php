<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

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
        $apiKey = env('WEATHER_API_KEY');

        $response = Http::get(
            'http://api.weatherapi.com/v1/forecast.json',
            [
                'key' => $apiKey,
                'q' => 'Zapopan',
                'days' => 1
            ]
        );

        View::share('clima', $response->json());
    }
}