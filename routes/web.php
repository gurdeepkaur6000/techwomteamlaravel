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
    return view('home');
});
//Route::get('login', [AuthController::class, 'login'])->name('login');
//Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('login', 'App\Http\Controllers\Auth\AuthController@login')->name('login');
Route::post('post-login', 'App\Http\Controllers\Auth\AuthController@postLogin')->name('login.post'); 
Route::get('registration', 'App\Http\Controllers\Auth\AuthController@registration')->name('register');;
Route::post('post-registration', 'App\Http\Controllers\Auth\AuthController@postRegistration')->name('register.post');
/**Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); **/
Route::get('dashboard', 'App\Http\Controllers\Auth\AuthController@dashboard'); 
Route::get('posts', 'App\Http\Controllers\PostController@showPostData');
Route::put('update-post/{id}', 'App\Http\Controllers\PostController@updatePostData'); 
Route::post('create-post', 'App\Http\Controllers\PostController@createPostData'); 
Route::get('edit-post/{id}', 'App\Http\Controllers\PostController@showEditPost');
Route::get('add-post', 'App\Http\Controllers\PostController@showCreatePost');
Route::get('logout', 'App\Http\Controllers\Auth\AuthController@logout')->name('logout');
