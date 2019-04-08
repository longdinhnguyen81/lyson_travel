<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Picture;

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
        
        $allpictures = Picture::all();
        view()->share('allpictures', $allpictures);
    }
}
