<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('*',function($view) {
            // $uicomponent = AdminSetting::getUserDesignLayout();
            $meta_description = "DCWCNepal.";
            $result = array (
                    'fb_image'                  => 'http://dcwcnepal.org.np/img/resources/logo.png',
                    'meta_description'          => $meta_description,
                );
            $view->with('admin_servicedata', $result);
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
