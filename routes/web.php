<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
Route::get('/login',function(){
return view('login');
});
Route::get('/logout',function(){
    Session::forget('user');
    return redirect('/');
    });
Route::get('/','App\http\Controllers\HomeController@index');
// Route::get('/login','App\http\Controllers\LoginController@loginpage');
Route::post('/login','App\http\Controllers\LoginController@login');
Route::get('/products','App\http\Controllers\ProductsController@index');
Route::get('/details/{id}','App\http\Controllers\ProductsController@productdetails');
Route::post('/addtocart','App\http\Controllers\ProductsController@addtocart');

