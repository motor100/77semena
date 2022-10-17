<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->composer('*', function ($view) // прикрепить компоновщик ко всем шаблонам
        view()->composer('layouts.main', function ($view) // прикрепить компоновщик к шаблону layouts.main
        {
            // Cities
            $view->with('cities', \App\Models\City::get());
        });

    }
}
