<?php

namespace App\Providers;

use App\Interfaces\ProjectEloquentInterface;
use App\Repositories\ProjectEloquentRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProjectEloquentInterface::class, ProjectEloquentRepository::class);
    }
}
