<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('photos', "App\Http\Controllers\PageController");
Route::get('/', 'App\Http\Controllers\PageController@index');
Route::get('/about', 'App\Http\Controllers\PageController@about');
Route::get('/articles/{id}', 'App\Http\Controllers\PageController@article');