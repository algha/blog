<?php

Route::middleware(['web'])
       ->prefix('dashboard')
       ->namespace('App\Blog\Dashboard\Https\Controllers')
       ->group(function (\Illuminate\Routing\Router $router) {

       Route::get('/login', 'AuthController@Login')->name("dashboard.login");
       Route::post('/login', 'AuthController@LoginPost')->name("dashboard.login.post");

       Route::middleware(['dashboard'])
              ->group(function (\Illuminate\Routing\Router $router) {

              Route::get('/{any}', 'DashboardController@Home')->where('any', '.*');
              Route::any('/user/create', 'UserController@Edit')->name("dashboard.user.create");
              Route::any('/user/{id}/edit', 'UserController@Edit')->name("dashboard.user.edit");
              Route::delete('/user/{id}/delete', 'UserController@Delete')->name("dashboard.user.delete");
              Route::get('/user/list', 'UserController@List')->name("dashboard.user.list");

              Route::any('/category/create', 'CategoryController@Edit')->name("dashboard.category.create");
              Route::any('/category/{id}/edit', 'CategoryController@Edit')->name("dashboard.category.edit");
              Route::delete('/category/{id}/delete', 'CategoryController@Delete')->name("dashboard.category.delete");
              Route::get('/category/list', 'CategoryController@List')->name("dashboard.category.list");

              Route::any('/post/create', 'PostController@Edit')->name("dashboard.post.create");
              Route::any('/post/{id}/edit', 'PostController@Edit')->name("dashboard.post.edit");
              Route::delete('/post/{id}/delete', 'PostController@Delete')->name("dashboard.post.delete");
              Route::get('/post/list', 'PostController@List')->name("dashboard.post.list");


              // Route::get('/home', 'DashboardController@Home')->name("dashboard.home");
       });

});
