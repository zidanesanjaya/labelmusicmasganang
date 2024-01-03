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
