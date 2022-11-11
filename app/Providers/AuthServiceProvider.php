<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define("view-dashboard", function (User $user) {
        //     if ($user) {
        //         return $user->role == "admin";
        //     }
        //     return false;
        // });

        // Gate::define("view-account", function (User $user) {
        //     if ($user) {
        //         return $user->role == "partner";
        //     }
        //     return false;
        // });

        // Gate::define("view-text", function (User $user) {
        //     if ($user) {
        //         return $user->role == "manager";
        //     }
        //     return false;
        // });
    }
}
