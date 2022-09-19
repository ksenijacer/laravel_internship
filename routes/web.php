<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Logger;
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::controller(PostController::class)->group(function () {
    Route::get('posts', 'index')->name('index');
});

Route::get('/token', function () {
    return csrf_token(); 
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');

})->name('get_route')->middleware('logger')->middleware('checkAge');

Route::get('/name', function() {
    $first_name = ['first_name' => 'Ksenija'];
    return view('name', $first_name);

});

Route::get('/register/{data}', [RegisterController::class, 'create']);



Route::controller(PostController::class)->group(function () {
    Route::get('posts', 'index')->name('posts.index');
    Route::get('posts/create', 'create')->name('posts.create');
    Route::post('posts', 'store')->name('posts.store');
    Route::get('posts/{post}', 'show')->name('posts.show');
    Route::get('posts/{post}/edit', 'edit')->name('posts.edit');
    Route::put('posts/{post}', 'update')->name('posts.update');
    Route::delete('posts/{post}', 'destroy')->name('posts.destroy');
});
Auth::routes();

Route::get('/home', [ HomeController::class, 'index'])->name('home');
