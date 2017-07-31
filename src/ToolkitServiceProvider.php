<?php

namespace CenarioWeb;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ToolkitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        require __DIR__ . '/Helpers/string_helpers.php';
    }
}
