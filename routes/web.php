<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/artist', function () {
    return view('artist');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test', function () {
    return view('dashboard.index');
});

Route::get('/login', [AuthController::class, 'login_GET'])->name('login');
Route::get('/home', [HomeController::class, 'dashboard_GET']);
Route::get('/manage-pages', [HomeController::class, 'pages_GET'])->name('manage.page');
Route::get('/datas-music', [HomeController::class, 'music_GET'])->name('datas.music');
Route::post('/login', [AuthController::class, 'login_POST'])->name('login');

Route::get('/logout-post', [AuthController::class, 'logout_POST']);

Route::post('/post-social-media', [HomeController::class, 'social_media_POST'])->name('post.social_media');
Route::post('/update-social-media', [HomeController::class, 'social_media_UPDATE'])->name('update.social_media');
Route::get('/get-social-media', [HomeController::class, 'social_media_GET'])->name('get.social_media');

Route::post('/post-artist', [HomeController::class, 'artist_POST'])->name('post.artist');
Route::get('/get-artist', [HomeController::class, 'artist_GET'])->name('get.artist');
Route::post('/delete-artist', [HomeController::class, 'artist_DELETE'])->name('delete.artist');

Route::post('/post-about', [HomeController::class, 'about_POST'])->name('post.about');
Route::get('/get-about', [HomeController::class, 'about_GET'])->name('get.about');

Route::post('/post-home', [HomeController::class, 'home_POST'])->name('post.home');
Route::get('/get-home', [HomeController::class, 'home_GET'])->name('get.home');
Route::get('/get-artist-home', [HomeController::class, 'artist_home_GET'])->name('get.home_artist');
Route::get('/get-artist-all-home', [HomeController::class, 'artist_home_all_GET'])->name('get.home_artist_all');
