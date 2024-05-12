<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Waiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void

    {

        Paginator::useBootstrap();

        View::composer('dashboard.header', function ($view) {
            $userShop = Shop::where('user_id',auth()->user()->id)->first();
            $view->with('userShop',$userShop);
        });

        View::composer('dashboard.waiterinclude.header', function ($view) {
            $userwaiter = Waiter::where('user_id',auth()->user()->id)->first();
            $view->with('userwaiter',$userwaiter);
        });



        // $categories = DB::table('categories')->get();
        // $categories = Category::all();
        // View::share('categories', $categories);

        // $owners = DB::table('owners')->get();
        // View::share('owners', $owners);
        // $blogs = DB::table('blogs')->get();
        // View::share('blogs', $blogs);

        // $products = Product::all();
        // View::share('products', $products);
        // $suppliers = DB::table('suppliers')->get();
        // View::share('suppliers', $suppliers);
        // $customers = DB::table('customers')->get();
        // View::share('customers', $customers);
        // $shops = DB::table('shops')->get();
        // View::share('shops', $shops);


    }
}
