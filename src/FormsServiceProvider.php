<?php

namespace Javaabu\Forms;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FormsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // declare publishes
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('forms.php'),
            ], 'forms-config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/forms'),
            ], 'forms-views');
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'forms');

        // declare blade directives
        Blade::directive('model', function ($model) {
            return '<?php app(\Javaabu\Forms\FormsDataBinder::class)->bind(' . $model . '); ?>';
        });

        Blade::directive('endmodel', function ($model) {
            return '<?php app(\Javaabu\Forms\FormsDataBinder::class)->pop(); ?>';
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // merge package config with user defined config
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'forms');

        // register the data binder
        $this->app->singleton(FormsDataBinder::class, fn () => new FormsDataBinder());
    }
}
