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

// RETOURNE LA VUE WELCOME
Route::get('/', function () {
    return view('home');
})->name('home') ;

// LANCE L'ACTION DU CONTROLLER POSTS
use App\Http\Controllers\PostsController;
Route::get('/posts', [PostsController::class, 'index']);

//RETOURNE LA VUE CONTACT
Route::get('/contact', function () {
    return view('contact/index');
})->name('contact') ;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
