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

Route::get('/login', function () {
    return view('/auth/login_page');
});

Route::get('/register', function () {
    return view('welcome');
});

Route::view('/', 'home.home_page')->name('landing');

Route::name('news.')->prefix('news')->group(function () {
    Route::view('/', 'news.news_page')->name('news.index');
    Route::view('/leaflet', 'news.leaflet_page')->name('news.leaflet');
    Route::view('/survey', 'news.survey_page')->name('news.survey');
    Route::view('/rates', 'news.service_rates_page')->name('news.rates');
    Route::view('/sakip', 'news.sakip_page')->name('news.sakip');
    Route::view('/indicator', 'news.news_indicator_page')->name('news.indicator');
    Route::view('/public-service', 'news.public_service_page')->name('news.public-service');
    Route::view('/service-flow', 'news.service_flow_page')->name('news.service-flow');
    Route::view('/{any}', 'news.detail_news_page')->name('news.details');
});

Route::name('services.')->prefix('services')->group(function () {
    Route::view('/vitreo-retina', 'services.service_vitreo_retina_page')->name('services.vitreo-retina');
    Route::view('/sigalon', 'services.service_sigalon_page')->name('services.sigalon');
    Route::view('/poli-executive', 'services.poli_executive_page')->name('services.poli-executive');
    Route::view('/lasik', 'services.lasik_page')->name('services.lasik');
});

Route::name('dashboard.')->prefix('dashboard')->group(function () {
    Route::view('/', 'dashboard.home')->name('dashboard.home');
    Route::view('/service', 'dashboard.service')->name('dashboard.service');
    Route::view('/pdf', 'dashboard.download_pdf')->name('dashboard.pdf');
    Route::view('/service/payment', 'dashboard.payment')->name('dashboard.payment');
    Route::view('/profile', 'dashboard.profile')->name('dashboard.profile');
});