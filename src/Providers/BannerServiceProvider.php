<?php

namespace Razen\Banner\Providers;

use Illuminate\Support\ServiceProvider;
use Razen\Banner\Repositories\BannerRepository;
use Razen\Banner\Repositories\Interfaces\BannerRepositoryInterface;

class BannerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../Migrations');

        // load route
        $this->loadRoutesFrom(__DIR__.'/../Routes/banner.web.php');
        
        // Bind repository and interfaces
        $this->app->bind(BannerRepositoryInterface::class, BannerRepository::class);
    }

    public function register()
    {

    }
}