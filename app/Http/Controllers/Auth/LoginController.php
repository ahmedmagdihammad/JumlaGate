<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Auth;
use URL;

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
    protected $redirectTo = '/home';

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $input = $request->all();
        if(Auth::attempt(['email' => $input['email'], 'password' => $input['password']]))
        {
            if(Auth::user()->type == "A"){
                return redirect('/dashboard');
            }else {
                Auth::logout();
                return redirect('/login');
            }
        }else{
            return redirect('/login');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function logout(Request $request) {
        if (Auth::user()->type == "A") {
            Auth::logout();
            return redirect('/login');
        }else {
            Auth::logout();
            return redirect('/');
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
