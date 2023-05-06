<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('customer','App\Http\Controllers\CustomerController')->only(['index','show','update','delete','store']);

// Route::resource('category', 'App\Http\Controllers\CategoryPostController');
Route::resource('category', 'App\Http\Controllers\Admin\CategoryPostController');
// Route::resource('post', 'App\Http\Controllers\PostController');
Route::resource('post', 'App\Http\Controllers\Admin\PostController');
// Route::resource('baiviet', 'App\Http\Controllers\Admin\BaivietController');
// Route::resource('danhmuc', 'App\Http\Controllers\DanhmucController');
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login',  'App\Http\Controllers\AuthController@login');
    Route::post('/register',  'App\Http\Controllers\AuthController@register');
    Route::post('/logout',  'App\Http\Controllers\AuthController@logout');
    Route::post('/refresh',  'App\Http\Controllers\AuthController@refresh');
    Route::get('/user-profile',  'App\Http\Controllers\AuthController@userProfile');
    Route::post('/change-pass',  'App\Http\Controllers\AuthController@changePassWord');    
});
