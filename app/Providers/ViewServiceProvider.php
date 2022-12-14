<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;


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
        // Шаблон главной страницы
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

        // Шаблон панели администратора
        view()->composer('dashboard.layout', function ($view)
        {
            // New testimonials
            $testimonials_count = \App\Models\Testimonial::whereNull('publicated_at')
                                                        ->count();

            $view->with('testimonials_count', $testimonials_count);

            // New orders
            $orders_count = \App\Models\Order::where('status', 'В обработке')->count();

            $view->with('orders_count', $orders_count);
        });

        // Шаблон личный кабинет
        view()->composer('profile.layout', function ($view)
        {
            // User
            $user = Auth::user();

            // Если пользователя есть, то 
            if ($user) {
                $office = \App\Models\Office::where('id', $user->id)->first();

                $view->with('office', $office);
            }
        });
    }
}
