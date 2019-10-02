<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        // Blade custom directives for isAdmin

        Blade::directive('isAdmin', function() {
            return "<?php if(Auth::user()->isAdmin()): ?>";
        });


        // Blade custom directives for isManager

        Blade::directive('isManager', function() {
            return "<?php if(Auth::user()->isManager()): ?>";
        });

        // Blade custom directives for isDisabled

        Blade::directive('isDisabled', function() {
            return "<?php if(Auth::user()->isDisabled()): ?>";
        });

        Blade::directive('endrolecheck', function() {
            return "<?php endif; ?>";
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
