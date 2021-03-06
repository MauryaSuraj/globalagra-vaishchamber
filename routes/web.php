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

Route::get('/','WelcomController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','AboutController@index')->name('about');
Route::get('/contact','ContactController@index')->name('contact');
Route::get('/supporter','SupporterController@index')->name('supporter');

Route::get('/profile','ProfileController@index')->name('profile');

Route::get('/admin','AdminController@index');
Route::get('/superadmin','SuperAdminController@index');
