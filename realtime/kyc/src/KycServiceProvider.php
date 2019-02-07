<?php

namespace realtime\kyc;

use Illuminate\Support\ServiceProvider;

class KycServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'kyc');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
          $this->app->make('realtime\kyc\Http\Controller\KycController');
    }
}
