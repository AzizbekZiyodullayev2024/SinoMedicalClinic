<?php

use Illuminate\Support\Facades\Route;

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

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['uz', 'ru'])) {
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    return redirect()->back();
})->name('changeLang');