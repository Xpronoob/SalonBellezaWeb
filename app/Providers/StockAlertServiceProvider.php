<?php

namespace App\Providers;

use App\Models\Product;
use Illuminate\Support\ServiceProvider;

class StockAlertServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $lowStockProducts = Product::where('stock', '<', 20)->get();
            $view->with('lowStockProducts', $lowStockProducts);
        });
    }
}
