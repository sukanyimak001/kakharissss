<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/auth/login_page');
});
Route::get('/home', function () {
    return view('/home/home_page');
});
Route::get('/news', function () {
    return view('/news/news_page');
});
Route::get('/news/{any}', function () {
    return view('/news/detail_news_page');
});
Route::get('/register', function () {
    return view('welcome');
});
