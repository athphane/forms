<?php

namespace Javaabu\Forms\Tests\TestSupport\Providers;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadMigrationsFrom([
            __DIR__ . '/../database',
            __DIR__ . '/../../../vendor/spatie/laravel-medialibrary/database/migrations',
        ]);
    }

    /**
     * Register the application services.
     */
    public function register()
    {

    }
}
