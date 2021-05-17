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

//bible study request route
Route::get('/bible-study-request', 'App\Http\Controllers\RequestController@requests');
Route::get('/bible-study-request-form', 'App\Http\Controllers\RequestController@requestsForm');
Route::post('/bible-study-create', 'App\Http\Controllers\RequestController@userInfo');
Route::get('/thank-you', 'App\Http\Controllers\RequestController@thankYou');