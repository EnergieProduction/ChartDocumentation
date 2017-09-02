<?php

namespace App\Providers;

use App\Services\ChartsMaker;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('ChartsMaker', function($app)
        {
            return new ChartsMaker\Builder($app['config']['charts']);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
