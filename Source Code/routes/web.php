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
Route::get('/service/{id}', 'ServiceController@index')->name('service');

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => 'role:' . Role::ADMIN
], function () {
    Route::get('/', 'DashboardController@index');

    Route::resource('/home_services', 'Home\ServicesController');
    Route::resource('/home_works', 'Home\WorkController');
    Route::resource('/home_whychoose', 'Home\WhyChooseController');
    Route::resource('/home_testimonials', 'Home\TestimonialController');
    Route::resource('/home_slides', 'Home\SlideController');

    Route::resource('/service_categories', 'ServiceCategoryController');
    Route::resource('/services', 'ServiceController');
    Route::resource('/blog_categories', 'BlogCategoryController');
    Route::resource('/blogs', 'BlogController');
});