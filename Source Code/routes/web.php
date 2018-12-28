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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => 'role:' . Role::ADMIN
], function () {
    Route::get('/', 'DashboardController@index');
    Route::resource('/home_services', 'Home\ServicesController');
    Route::resource('/news', 'NewsController');
    Route::resource('/services', 'ServiceController');
});