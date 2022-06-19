<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\Todo;
use Illuminate\Support\ServiceProvider;
use URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Todo::preventLazyLoading();
        Tag::preventLazyLoading();

        URL::forceScheme('https');
    }
}
