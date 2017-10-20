<?php

namespace crudapp\Providers;

use Illuminate\Support\ServiceProvider;

class TestFacadeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
   public function boot() {
      //
   }
   public function register() {
      App::bind('test',function() {
         return new \crudapp\Test\TestFacades;
      });
   }
}
