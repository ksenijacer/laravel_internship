<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Logger;
use App\Http\Middleware\CheckAge;

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

Route::post('/about', function() {
    return view('about');
})->name('post_route')->middleware('logger');

Route::put('/laravel', function() {
    return "Put route";
})->name('put_route')->middleware('logger');

Route::delete('/laravel', function() {
    return "Delete route";
})->name('delete_route')->middleware('logger');

Route::patch('/laravel', function() {
    return "Patch route";
})->name('patch_route')->middleware('logger');


