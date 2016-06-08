<?php

namespace Frontend\Generators;

use Illuminate\Support\ServiceProvider;

class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/generators.php' => config_path('generators.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            'Frontend\Generators\Console\Commands\AngularConfig',
            'Frontend\Generators\Console\Commands\AngularDialog',
            'Frontend\Generators\Console\Commands\AngularComponent',
            'Frontend\Generators\Console\Commands\AngularDirective',
            'Frontend\Generators\Console\Commands\AngularPage',
            'Frontend\Generators\Console\Commands\AngularFilter',
            'Frontend\Generators\Console\Commands\AngularService',
        ]);

        $this->mergeConfigFrom(__DIR__.'/../config/generators.php', 'generators');
    }
}
