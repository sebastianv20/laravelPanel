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

Route::get('login', array('as' => 'login', function () {
    return view('login');
}));

Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('master');
    });

    Route::get('user/password', 'UserController@password');
    Route::post('user/password/guardar', 'UserController@passwordGuardar');

    Route::get('user/micuenta', 'UserController@micuenta');
    Route::post('user/micuenta/color', 'UserController@micuentaColor');

    Route::get('restaurant', 'RestaurantController@index');
    Route::post('restaurant', 'RestaurantController@nuevo_menu');
    Route::post('restaurant/guardar', 'RestaurantController@guardar_menu');

});
