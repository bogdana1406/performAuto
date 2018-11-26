<?php

namespace App\Providers;

use App\Http\Controllers\DisplayConrtoller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (Schema::hasTable('cars')&& Schema::hasTable('brands')) {

            $displayConrtoller = App::make(DisplayConrtoller::class);
            $data = $displayConrtoller->getHeaderParams();
            View::share('carBrands', $data['carBrands']);
            View::share('arrayBrandsCount', $data['arrayBrandsCount']);
            View::share('countAllCars', $data['countAllCars']);
            View::share('activBrand', $data['activBrand']);
        }
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
