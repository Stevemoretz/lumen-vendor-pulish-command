<?php

namespace SteveMoretz\LumenVendorPublish\Laravel\app\Providers;

use Illuminate\Foundation\Console\VendorPublishCommand;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if($this->app->runningInConsole()){
            $this->commands(VendorPublishCommand::class);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {

    }
}
