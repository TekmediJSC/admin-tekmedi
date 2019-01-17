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
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/news/{id}', 'NewsController@index')->name('news_category');
Route::get('/news/detail/{id}', 'NewsController@detail')->name('news_detail');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@post')->name('post_contact');

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
    Route::resource('/news_categories', 'NewsCategoryController');
    Route::resource('/news', 'NewsController');
    Route::resource('/contacts', 'ContactController');
    Route::resource('/contact_cards', 'ContactCardController');

    Route::get('/socials', 'SocialController@index')->name('socials');
    Route::post('/socials', 'SocialController@update');

});