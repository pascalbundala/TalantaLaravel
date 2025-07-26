
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BloagReadController;
use App\Http\Controllers\AuthController;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

use App\Models\Blog;

Route::get('/generate-sitemap', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/about'))
        ->add(Url::create('/contact'))
        ->add(Url::create('/cookie'))
        ->add(Url::create('/privacy'))
        ->add(Url::create('/faq'))
        ->add(Url::create('/gallery'))
        ->add(Url::create('/our-project'))
        ->add(Url::create('/work-with-us'))
        ->add(Url::create('/blog'));

    // Add dynamic blog post URLs using ID
    // Blog::where('is_active', true)->get()->each(function ($blog) use ($sitemap) {
    //     $sitemap->add(
    //         Url::create("/blog-post/{$blog->id}")->setLastModificationDate($blog->updated_at)
    //     );
    // });

    $sitemap->writeToFile(public_path('sitemap.xml'));

    return 'Sitemap generated!';
});


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
Route::get('/blog-post/{id}',[BloagReadController::class,'show'])->name('blog-detail');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
// Admin panel route (protected)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::resource('blogs', BlogController::class)->names('blogsdata');
    Route::resource('settings', BlogController::class)->names('settings');
});

Route::post('/workwithus', [ContactController::class, 'send'])->name('workwithus.send');
Route::post('/contactus', [ContactController::class, 'contact'])->name('contactus.contact');
