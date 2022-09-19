<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Logger;
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index')->name('index');
    Route::post('/home', 'store')->name('store');
});

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



