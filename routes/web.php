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


Route::middleware(['auth'])->group(function () {

    Route::get('/', 'HomeController@index')->name('index');

    Route::get('/usuarios', 'UserController@index')->name('user-list');

    Route::prefix('/usuario')->group(function() {
        Route::get('/{user_id}/perfil', 'UserController@profile')->name('user-profile');
        Route::post('/{user_id}/status', 'UserController@enableUser')->name('user-status');
    });

    Route::get('/home', function () {
        return redirect()->route('index');
    });
});

Auth::routes();
