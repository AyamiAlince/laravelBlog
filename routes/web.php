<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;
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


    Route::get('/', IndexController::class );

//    Route::get('/post/',PostsController::class)->name('post.post');
//      Route::get('/post/{id}', 'PostsController@getPost')->name('getPost');

        Route::get('/post/{id}', [PostsController::class, 'getPost'])->name('getPost');

//    Route::get('/post/{id}', PostsController::

// Route::get('/', action: function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
