<?php

namespace Burythehatchet\MathGenerator;

use Illuminate\Support\ServiceProvider;

class MathGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Burythehatchet\MathGenerator\MathGeneratorController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
