<?php

namespace Bappi\Sum;

use Illuminate\Support\ServiceProvider;


class SumServiceProvider extends ServiceProvider{

    public function register()
    {
        $this->app->bind('get-sum',function($app){
            return new \Bappi\Sum\Add();
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/summation.php', 'summation'
        );

    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/summation.php' => config_path('summation.php'),
        ]);
    }


}
