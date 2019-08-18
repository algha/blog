<?php

namespace App\Blog\Dashboard\Providers;

use Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Blog\Dashboard\Https\Middlewares\DashboardMiddleware;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
/**
 * Class AlertServiceProvider.
 *
 * @category PHP
 */
class RouterServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {

        Route::middlewareGroup('dashboard', [
            DashboardMiddleware::class
        ]);

        $this->binding();

        parent::boot();
    }

    public function binding()
    {


    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->loadRoutesFrom(dirname(__DIR__)."/Routes/Dashboard.php");
    }
}
