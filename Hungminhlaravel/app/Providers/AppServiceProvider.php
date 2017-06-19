<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\TypeProduct;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('Admin.Admin',function($view){
                $type_product=TypeProduct::Show_Type_product()->get();
                $view->with('type_product',$type_product);
        });
        view()->composer('Admin.Product_Admin',function($view){
                $type_product=TypeProduct::Show_Type_product()->get();
                $view->with('type_product',$type_product);
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
