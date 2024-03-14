<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;

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


Route::get('/', [HomeController::class, 'homePAGE'])->name('page.home');
Route::get('/artist-detail/{id}', [HomeController::class, 'artistDetailPAGE'])->name('page.artist_detail');
Route::get('/artist-page', [HomeController::class, 'artistPAGE'])->name('page.artist');
Route::get('/contact-page', [HomeController::class, 'contactPAGE'])->name('page.contact');
Route::get('/services-page', [HomeController::class, 'servicesPage'])->name('page.services');
Route::get('/about-page', [HomeController::class, 'aboutPage'])->name('page.about');
Route::get('/detail-artist-admin', [HomeController::class, 'detailArtistAdmin'])->name('page.admin_detail');

Route::get('/artist/name', function () {
    return view('detailsArtist');
});

Route::get('/test', function () {
    return view('dashboard.index');
});

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/login', [AuthController::class, 'login_GET'])->name('login');
Route::get('/home', [HomeController::class, 'dashboard_GET']);
Route::get('/manage-pages', [HomeController::class, 'pages_GET'])->name('manage.page');
Route::get('/datas-music', [HomeController::class, 'music_GET'])->name('datas.music');
Route::post('/login', [AuthController::class, 'login_POST'])->name('login');

Route::get('/mail-page', [HomeController::class, 'mailPage'])->name('page.mail');

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

Route::post('/post-music', [HomeController::class, 'music_POST'])->name('post.music');
Route::get('/list-music', [HomeController::class, 'music_PAGE'])->name('page.music');
Route::get('/delete-music/{id}', [HomeController::class, 'music_DELETE'])->name('delete.music');

Route::get('/get-services', [HomeController::class, 'services_GET'])->name('get.services');
Route::post('/post-services', [HomeController::class, 'services_POST'])->name('post.services');
Route::post('/post-detail-artist', [HomeController::class, 'updateArtistDetail'])->name('post.detail_artist');

Route::post('send-mail', [MailController::class, 'mailPOST'])->name('post.mail_user');
Route::get('delete-mail/{id}', [HomeController::class, 'deleteMail'])->name('delete.mail');
