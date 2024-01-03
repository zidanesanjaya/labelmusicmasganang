<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.session');
    }
    
    public function dashboard_GET(){
        return view('dashboard.index');
    }

    public function pages_GET(Request $request){
        return view('manage.index');
    }
    public function music_GET(Request $request){
        return view('datas.music.index');
    }
}
