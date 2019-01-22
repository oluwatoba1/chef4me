<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo(){
        //auth() was used instead of Auth:: because of the namespace of the LoginController class
        if(auth()->check() && auth()->user()->role == 'customer'){
            return 'customer';
        }
        elseif(auth()->check() && auth()->user()->role == 'admin'){
            return 'admin';
        }
        elseif(auth()->check() && auth()->user()->role == 'chef'){
            return 'chef';
        }
        else{
            return 'lol';
        }
    }
}
