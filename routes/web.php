<?php

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
Route::get("/posts","c_post@showpost");
Route::get("/posts/{post}","c_post@post");
Route::get("/addpost","c_post@addpost")->middleware("auth");
Route::Post("/insertpost","c_post@insertpost");
Route::Post("/posts/{post}","comment@stor");


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
