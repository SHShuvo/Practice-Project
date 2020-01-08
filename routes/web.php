<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Admin\AdminDashboardController@index');


Route::prefix('/admin')->group(function(){
    //Route::get('/loginForm', 'Admin\AdminLoginController@show')->name('admin.login');  
    Route::post('/login', 'Admin\AdminLoginController@login')->name('admin.login');
    Route::get('/', 'Admin\AdminDashboardController@index')->name('admin.dashboard');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
