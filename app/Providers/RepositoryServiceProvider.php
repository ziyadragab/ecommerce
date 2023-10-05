<?php

namespace App\Providers;

use App\Http\Interfaces\Admin\AuthInterface as AdminAuthInterface;
use App\Http\Interfaces\Admin\CategoryInterface;
use App\Http\Interfaces\Admin\HomeInterface as AdminHomeInterface;
use App\Http\Interfaces\Admin\ProductInterface;
use App\Http\Interfaces\EndUser\AuthInterface;
use Illuminate\Support\ServiceProvider;
use App\Http\Interfaces\EndUser\HomeInterface;
use App\Http\Interfaces\EndUser\RegisterInterface;
use App\Http\Repositories\Admin\AuthRepository as AdminAuthRepository;
use App\Http\Repositories\Admin\CategoryRepository;
use App\Http\Repositories\Admin\HomeRepository as AdminHomeRepository;
use App\Http\Repositories\Admin\ProductRepository;
use App\Http\Repositories\EndUser\AuthRepository;
use App\Http\Repositories\EndUser\HomeRepository;
use App\Http\Repositories\EndUser\RegisterRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // EndUser
        $this->app->bind(
            HomeInterface::class,
            HomeRepository::class

        );
        $this->app->bind(
            AuthInterface::class,
            AuthRepository::class

        );
        $this->app->bind(
            RegisterInterface::class,
            RegisterRepository::class

        );
        //EndUser End

        //Admin

        $this->app->bind(
            AdminHomeInterface::class,
            AdminHomeRepository::class

        );
        $this->app->bind(
            AdminAuthInterface::class,
            AdminAuthRepository::class

        );
        $this->app->bind(
            CategoryInterface::class,
            CategoryRepository::class

        );
        $this->app->bind(
            ProductInterface::class,
            ProductRepository::class

        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
