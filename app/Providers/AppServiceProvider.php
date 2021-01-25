<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth;
use Illuminate\Support\Facades\Blade;
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
         /**
         * admin blade directive
         */
        Blade::if('admin', function ()  {
            $userRoles = auth()->user()->roles->pluck('name');
                if($userRoles[0] == 'Admin'){
                    return true;
                }
        });

        /**
         * user blade directive
        */
       Blade::if('user', function ()  {
           $userRoles = auth()->user()->roles->pluck('name');
           if($userRoles[0] == 'School'){
               return true;
           }
       });

    }
}
