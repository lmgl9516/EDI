<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Using class based composers...
        view()->composer
        (
            'myLayoutViews.master', 'App\Http\ViewComposers\NavbarComposer'
        );
    }

    public function register()
    {
        //
    }

}