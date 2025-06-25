<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::get('/lang/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'ru', 'tr'])) {
        abort(400);
    }

    // Session ilə yadda saxla
    Session::put('locale', $locale);

    return redirect()->back();
})->name('change.lang');;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/index', 'index')->name('index');
    Route::get('/index2', 'index2')->name('index2');
    Route::get('/index3', 'index3')->name('index3');
    Route::get('/about', 'about')->name('about');
    Route::get('/destination','destination')->name('destination');
    Route::get('/destinationdetails','destinationdetails')->name('destinationdetails');
    Route::get('/tour','tour')->name('tour');
    Route::get('/tourdetails','tourdetails')->name('tourdetails');
    Route::get('/blog','blog')->name('blog');
    Route::get('/blogdetails/{slug}','blogDetails')->name('blogdetails');
    Route::get('/contact','contact')->name('contact');
});
