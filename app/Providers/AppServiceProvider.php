<?php

namespace App\Providers;

use App\Models\Business;
use Illuminate\Support\ServiceProvider;


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
        // mostrar tabla business
        $business = Business::all()
        ->where('id', '>', 1);
       return view()->share('business', $business);

    }
}
