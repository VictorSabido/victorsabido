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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();



Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin/login', 'Auth\LoginController@login')->name('login');
Route::get('/admin/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/admin/register', 'Auth\RegisterController@register')->name('register');

Route::group(['middleware' => 'web'], function(){

    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('b_dashboard');

});


// Route::get('/admin/cards', 'AdminController@cards')->name('b_cards');
Route::get('/admin/add_card', 'AdminController@addCard')->name('b_add_card');
Route::post('/admin/save_card', 'AdminController@saveCard')->name('b_saveCard');


Route::get('/home', 'HomeController@index')->name('home');



Route::get('/test', 'AdminController@test')->name('test');

// --------------------------
//          FRONT
// --------------------------
Route::get('/', 'HomeController@index');

