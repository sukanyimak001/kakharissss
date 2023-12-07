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
Route::get('/news/leaflet', function () {
    return view('/news/news_leaflet_page');
});
Route::get('/news/survey', function () {
    return view('/news/news_survey_page');
});
Route::get('/news/rates', function () {
    return view('/news/service_rates_page');
});
Route::get('/news/sakip', function () {
    return view('/news/sakip_page');
});
Route::get('/news/indicator', function () {
    return view('/news/news_indicator_page');
});
Route::get('/news/{any}', function () {
    return view('/news/detail_news_page');
});
Route::get('/register', function () {
    return view('welcome');
});
