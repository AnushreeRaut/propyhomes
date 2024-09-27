<?php

namespace App\Providers;

use Gate;
use Illuminate\Auth\Access\Gate as AccessGate; // Correctly alias the Gate class
use Illuminate\Routing\Router;
use App\Http\Middleware\CheckPermission;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('permission', CheckPermission::class);
    }

    /**
     * Bootstrap any application services.
     */

     public function boot(): void
     {
         // Define Permissions
         $permissions = [
             'view_dashboard',
             'view_referral',
             'view_family',
             'view_employee',
             'view_projects',
             'view_phone',
             'view_reports',
             'view_customer',
             'view_index',
         ];

         // Define Gates
         foreach ($permissions as $permission) {
             Gate::define($permission, function ($user) use ($permission) {
                 return $user->hasPermission($permission);
             });
         }
     }
    // public function boot(): void
    // {
    //     //
    // }

    // public function boot(): void
    // {
    //     // Define Gates within the boot method
    //     Gate::define('view_dashboard', function ($user) {
    //         return $user->hasPermission('view_dashboard');
    //     });
    // }
}
