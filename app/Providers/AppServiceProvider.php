<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        date_default_timezone_set('Asia/Jakarta');

        $currentTime = date('H:i:s');
        $current_time = '';
        $status_current_time = '';

        if (strtotime($currentTime) >= strtotime('06:00:00') && strtotime($currentTime) <= strtotime('10:00:00')) {
            $current_time = 'Selamat Pagi';
            $status_current_time = 'lottie-pagi';
        } elseif (strtotime($currentTime) >= strtotime('10:00:00') && strtotime($currentTime) <= strtotime('14:00:00')) {
            $current_time = 'Selamat Siang';
            $status_current_time = 'lottie-siang';
        } elseif (strtotime($currentTime) >= strtotime('14:00:00') && strtotime($currentTime) <= strtotime('18:00:00')) {
            $current_time = 'Selamat Sore';
            $status_current_time = 'lottie-sore';
        } else {
            $current_time = 'Selamat Malam';
            $status_current_time = 'lottie-malam';
        }

        $social_media = DB::table('information')->where('type','social_media')->where('is_show',1)->get();


        View::share('current_time', $current_time);
        View::share('status_current_time', $status_current_time);
        View::share('social_media', $social_media);
    }
}
