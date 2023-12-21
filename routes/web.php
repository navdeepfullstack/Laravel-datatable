<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('prevent-back-history')->group(function () {

    Route::get('/clear-cache', function () {
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');

        return Redirect::back()->with('success', 'All cache cleared successfully.');
    });

    Auth::routes();

    Route::middleware('auth')->group(function () {

        Route::get('/', 'HomeController@index')->name('user.home');
        Route::resource('users', 'UserController');
         
       
    });
});
