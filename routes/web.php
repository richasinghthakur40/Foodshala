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
    return view('welcome');
});

Route::get('/login_page','App\Http\Controllers\Controller@login_page');

Route::get('/regPage','App\Http\Controllers\Controller@regPage');

Route::POST('/custreg','App\Http\Controllers\Controller@custreg');

Route::get('/menu','App\Http\Controllers\Controller@menu');

Route::POST('/addmenu','App\Http\Controllers\Controller@addmenu');


Route::get('/restaurant_page','App\Http\Controllers\Controller@restaurant_page');

Route::POST('/restaurantreg','App\Http\Controllers\Controller@restaurantreg');

Route::get('/welcome','App\Http\Controllers\Controller@welcome');

Route::POST('/login','App\Http\Controllers\Controller@login');

Route::get('/getmenu','App\Http\Controllers\Controller@getmenu');




