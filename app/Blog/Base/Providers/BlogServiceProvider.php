<?php

namespace App\Blog\Base\Providers;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    public function register()
    {
        if (! defined('BLOG')) {
          define('BLOG', realpath(__DIR__.'/../../'));
        }
        $this->registerProviders();
      }

      /**
      *load Providers
      */
      public function registerProviders()
      {
          foreach ($this->provides() as $provide) {
              $this->app->register($provide);
          }
      }

      /**
       * Get the services provided by the provider.
       *
       * @return array
       */
      public function provides()
      {
          return [
              \App\Blog\Dashboard\Providers\ModuleServiceProvider::class,
              // \App\Blog\Front\Providers\ModuleServiceProvider::class,
              \App\Blog\Api\Providers\ModuleServiceProvider::class
          ];
      }

}
