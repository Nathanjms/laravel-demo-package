<?php

namespace NathanJms\BlogPackage;

use Illuminate\Support\ServiceProvider;
use NathanJms\BlogPackage\Console\InstallBlogPackage;

class BlogPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('calculator', function ($app) {
            return new Calculator();
        });
    }

    public function boot()
    {
        // Register the command if we are using the application via the CLI
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallBlogPackage::class,
                MakeFooCommand::class, // registering the new command
            ]);
        }
    }
}
