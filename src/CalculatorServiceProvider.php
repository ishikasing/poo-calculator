<?php

namespace poo\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       $this->app->make('poo\calculator\CalContoller');
       $this->loadViewsFrom(__DIR__.'/views','calculator');

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include __DIR__.'/route.php';
    }
}
