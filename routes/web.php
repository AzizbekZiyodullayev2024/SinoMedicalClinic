<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/ferature', function () {
    return view('ferature');
});

Route::get('/testemonial', function () {
    return view('testemonial');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ru', 'uz'])) {
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    return Redirect::back();
})->name('lang.switch');