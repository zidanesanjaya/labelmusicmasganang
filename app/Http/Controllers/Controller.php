<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
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
