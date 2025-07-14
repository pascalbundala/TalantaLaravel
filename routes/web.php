
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BloagReadController;

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

Route::get('/blog', [BloagReadController::class, 'index'])->name('blog');
Route::get('/blog-details/{id}',[BloagReadController::class,'show'])->name('blog-detail');

Route::get('/dashboard', function () {
    return view('admin.blog.create');
})->name('admin');

Route::resource('blogs', BlogController::class)->names('blogsdata');


Route::post('/workwithus', [ContactController::class, 'send'])->name('workwithus.send');
Route::post('/contactus', [ContactController::class, 'contact'])->name('contactus.contact');
