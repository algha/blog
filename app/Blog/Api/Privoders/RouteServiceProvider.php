<?php

namespace App\Blog\Dashboard\Providers;

use Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
/**
 * Class AlertServiceProvider.
 *
 * @category PHP
 */
class RouteServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {

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
        $this->loadRoutesFrom(dirname(__DIR__)."/Routes/Api.php");
    }
}
