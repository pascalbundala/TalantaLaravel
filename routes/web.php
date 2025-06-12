<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about-us');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/cookie', function () {
    return view('cookie');
})->name('cookie');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/workwithus', function () {
    return view('work-with-us');
})->name('work-with-us');

Route::get('/our-project', function () {
    return view('project');
})->name('our-project');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
