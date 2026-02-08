<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Dcw extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            return Redirect('/dashboard');
        }


        return view('login');
    }


    public function lvalidate(Request $request)
    {
        $request->validate([
            'name' =>  'required',
            'password'  =>  'required'
        ]);

        $login = $request->input('name');
        $type = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : (is_numeric($login) ? 'phone' : 'name');
        $request->merge([
            $type => $login,
            'password' => $request->password
        ]);

        $credentials = $request->only($type, 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::User();


            return redirect('/dashboard')->with('success', 'Login Successful!!');
        }

        return redirect('/')->with('error', 'Invalid Credentials');
    }
}
