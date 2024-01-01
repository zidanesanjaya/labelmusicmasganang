<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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

        if (strtotime($currentTime) >= strtotime('06:00:00') && strtotime($currentTime) <= strtotime('12:00:00')) {
            $current_time = 'Good Morning';
        } elseif (strtotime($currentTime) >= strtotime('12:00:00') && strtotime($currentTime) <= strtotime('18:00:00')) {
            $current_time = 'Good Afternoon';
        } else {
            $current_time = 'Good Night';
        }

        View::share('current_time', $current_time);
    }
}
