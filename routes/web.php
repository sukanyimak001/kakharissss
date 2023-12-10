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
Route::get('/news/public-service', function () {
    return view('/news/public_service_page');
});
Route::get('/news/service-flow', function () {
    return view('/news/service_flow_page');
});
Route::get('/services/vitreo-retina', function () {
    return view('/services/service_vitreo_retina_page');
});
Route::get('/services/sigalon', function () {
    return view('/services/service_sigalon_page');
});
Route::get('/services/poli-executive', function () {
    return view('/services/poli_executive_page');
});
Route::get('/services/lasik', function () {
    return view('/services/lasik_page');
});
Route::get('/news/{any}', function () {
    return view('/news/detail_news_page');
});
Route::get('/register', function () {
    return view('welcome');
});

Route::name('dashboard.')->prefix('dashboard')->group(function () {
    Route::view('/', 'dashboard.home')->name('dashboard.home');
    Route::view('/service', 'dashboard.service')->name('dashboard.service');
    Route::view('/pdf', 'dashboard.download_pdf')->name('dashboard.pdf');
    Route::view('/service/payment', 'dashboard.payment')->name('dashboard.payment');
    Route::view('/profile', 'dashboard.profile')->name('dashboard.profile');
});