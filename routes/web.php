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

Route::get('/', 'HomepageController@index')->name("homepage");
Route::get('/about', 'HomepageController@about')->name("about");
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('dashboard')->group(function () {
    Route::get('home', 'HomeController@index')->name('dash.home');
    Route::get('testimonials', 'Dashboard\TestimonialController@index')->name('dash.testi');
    Route::get('testimonials/add', 'Dashboard\TestimonialController@create')->name('dash.testi.create');
    Route::post('testimonials', 'Dashboard\TestimonialController@store')->name('dash.testi.store');

});
