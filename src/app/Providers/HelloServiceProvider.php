<?php

namespace App\Providers;

use Illuminate\support\Facades\view;
use Illuminate\Support\ServiceProvider;


class HelloServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'hello.index', 'App\Http\Composers\HelloComposer'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
