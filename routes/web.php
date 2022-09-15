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
Route::get('/token', function () {
    return csrf_token(); 
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('laravel', function() {
    return "Hello World";
})->name('get_route');;

Route::post('laravel', function() {
    var_dump("Hello World post route");
})->name('post_route');;

Route::put('laravel', function() {
    return "Put route";
})->name('put_route');

Route::delete('laravel', function() {
    return "Delete route";
})->name('delete_route');;

Route::patch('laravel', function() {
    return "Patch route";
})->name('patch_route');


