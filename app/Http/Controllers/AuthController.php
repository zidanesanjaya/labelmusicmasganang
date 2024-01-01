<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;
use Illuminate\Contracts\Auth\Authenticatable;

class CustomUser implements Authenticatable
{
    public $id;
    public $username;
    public $password; // Assuming password is stored as MD5, but it's not recommended

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->id;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        // Not used for MD5, but required for the interface
    }

    public function setRememberToken($value)
    {
        // Not used for MD5, but required for the interface
    }

    public function getRememberTokenName()
    {
        // Not used for MD5, but required for the interface
    }
}
class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout_POST');
    }

    public function login_POST(Request $request)
    {
        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = DB::TABLE('users')->where('username', $request->username)->first();

        if ($user && md5($request->password) === $user->password) {
            $authUser = new CustomUser();
            $authUser->id = $user->id;
            $authUser->username = $user->username;
            $authUser->password = $user->password;

            Auth::login($authUser);
            return redirect()->intended('home')->with('success','Berhasil melakukan login');
        }
        return Redirect::to("login")->with('error','Kesalahan dalam melakukan login , silahkan periksa username dan password anda');
    }
    public function login_GET(){
        return view('auth.login');
    }
    public function logout_POST()
    {
        Session::flush();
        return redirect('/login');
    }
}
