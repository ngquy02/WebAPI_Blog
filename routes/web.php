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

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['web']], function () {

    Route::group(['prefix' => 'admin'], function () {

        
        Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
            Route::resource('/', 'DashboardController');
        });
        

        Route::group(['prefix' => 'category', 'as' => 'category.'], function () {

            Route::resource('', 'CategoryPostController')
            ->parameters(['' => 'category']);

        });
        Route::group(['prefix' => 'baiviet', 'as' => 'baiviet.'], function () {

            Route::resource('', 'BaivietController')
            ->parameters(['' => 'baiviet']);

        });
        


        Route::group(['prefix' => 'post', 'as' => 'post.'], function () {

            Route::resource('', 'PostController')
                ->parameters(['' => 'post']);

            // Route::delete('items/destroy', [
            //     'as'         => 'deletes',
            //     'uses'       => 'PostController@deletes',
            // ]);

        });


        // Route::group(['prefix' => 'users', 'as' => 'users.'], function () {

        //     Route::resource('', 'UsersController')
        //         ->parameters(['' => 'user']);

        // });

    });

});

Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => ['web']], function () {

    Route::get('/','App\Http\Controllers\HomeController@index');
    Route::get('/contact','App\Http\Controllers\ContactController@index');
    Route::get('/danhmuc/{id}','App\Http\Controllers\DanhmucController@show');
    


});
Route::get('/contact','App\Http\Controllers\ContactController@index');
Route::get('/register','App\Http\Controllers\RegisterController@register');
Route::post('/register','App\Http\Controllers\RegisterController@postRegister');
Route::get('/login','App\Http\Controllers\LoginController@login');
Route::post('/login','App\Http\Controllers\LoginController@postLogin');

// Route::resource('/danhmuc/{$id}', 'App\Http\Controllers\DanhmucController');

Route::get('/baiviet/{id}','App\Http\Controllers\Admin\BaivietController@show');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
