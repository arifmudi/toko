<?php

namespace App\Providers;

use App\Category;
use App\Observers\CategoryObserver;
use App\Observers\ProductObserver;
use App\Product;
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
        Product::observe(ProductObserver::class);
        Category::observe(CategoryObserver::class);
    }
}
