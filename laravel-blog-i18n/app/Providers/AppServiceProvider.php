<?php

namespace App\Providers;

use App\Http\Repositories\BlogRepository;
use App\Http\Repositories\Eloquent\BlogRepositoryImpl;
use App\Http\Services\BLogService;
use App\Http\Services\BlogServiceImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            BlogRepository::class,
            BlogRepositoryImpl::class
        );
        $this->app->singleton(
          BLogService::class,
          BlogServiceImpl::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
