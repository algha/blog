<?php

Route::prefix('dashboard')
       ->namespace('App\Blog\Dashboard\Https\Controllers')
       ->group(function (\Illuminate\Routing\Router $router) {

       Route::post('/login', 'AuthController@Login')->name("dashboard.login");

       Route::middleware(['dashboard'])
              ->group(function (\Illuminate\Routing\Router $router) {
              Route::get('/home', 'DashboardController@Home')->name("dashboard.home");

              Route::any('/user/create', 'UserController@Edit')->name("dashboard.user.create");
              Route::any('/user/{id}/edit', 'UserController@Edit')->name("dashboard.user.edit");
              Route::delete('/user/{id}/delete', 'UserController@Delete')->name("dashboard.user.delete");
              Route::get('/users', 'UserController@List')->name("dashboard.user.list");
       });

});
