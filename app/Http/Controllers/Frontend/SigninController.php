<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\User;
use Auth;
use URL;

class SigninController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.signin');
    }

    public function create(Request $request)
    {
        
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $input = $request->all();
        if(Auth::attempt(['email' => $input['email'], 'password' => $input['password']]))
        {
            if(Auth::user()->type == "C"){
                return redirect('/myaccount');
            }else {
                Auth::logout();
                return redirect('/signin');
            }
        }else{
            return redirect('/signin');
        }

    }
    
}
