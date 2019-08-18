<?php

namespace App\Blog\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->app['view']->addNamespace('admin', base_path() . '/resources/admin/views');
    }

    public function register()
    {
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
              RouterServiceProvider::class
          ];
      }

}
