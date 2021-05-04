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

Route::get('/', function () {
    return view('load');
});

Route::get('/afterform', function () {
    return view('afterform');
});

Route::get('/afterorder', function () {
    return view('afterorder');
});

Route::get('/secret/{id}', '\App\Http\Controllers\MyController@getMy');

Route::post('/after', '\App\Http\Controllers\MyController@postMy');

Route::get('/redirect={var}', '\App\Http\Controllers\MyController@loadPages');

Route::post('/buy', '\App\Http\Controllers\MyController@makeOrder');

Route::get('/type/{id}/goods', '\App\Http\Controllers\MyController@getGoods');

Route::get('/good/{id}/customers', '\App\Http\Controllers\MyController@getCustomers');
