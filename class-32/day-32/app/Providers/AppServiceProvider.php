<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use View;

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
//        This will be share $name variable in every view
//        View::share('name', 'bitm');

//        Multiple view
//        View::composer([admin.master, website.master], function ($view){
//            $view->with('categories', Category::where('status', 1)->orderBy('id', 'desc')->take(8)->get());
//        });
//    }

//        Only master view
//        View::composer('website.master', function ($view){
//            $view->with('categories', Category::where('status', 1)->orderBy('id', 'desc')->take(8)->get());
//        });
//    }

//        All view
        View::composer('*', function ($view){
            $view->with('categories', Category::where('status', 1)->get());
        });
    }
}
