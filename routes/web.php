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
Route::get('/error',   'ErrorController@ShowMessge');

Route::get( '/buy/{plot_id}/order-info',    'BuyController@OrderInfo');
Route::post('/buy/{plot_id}/order-submit',  'BuyController@OrderSubmit');

Route::get( '/admin/{plot_id}/mgr-login',   'AdminController@MgrLogin');
Route::post('/admin/{plot_id}/login-submit','AdminController@LoginSubmit');

Route::get( '/admin/{plot_id}/fun-list',   'AdminController@FunList');