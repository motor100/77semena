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
            // Cities in modal window
            $view->with('cities', \App\Models\City::get());

            // Products in cart
            $cart_items = session()->get('cart');
            if($cart_items) {
                $cart_count = count($cart_items);
                $view->with('cart_count', $cart_count);
            }
        });
    }
}
