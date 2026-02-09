<?php

namespace App\Http\Controllers\dash;

use App\Http\Controllers\Controller;
use App\Models\Gadget;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class Dash extends Controller
{
    public function dash()
    {
        if (Auth::check()) {

            $info = Gadget::limit(5)->get();

            $gadget = Gadget::get();
            $collect = Gadget::where('status', 'Collected')->get();

            $service = Gadget::where('status', 'In Progress')->get();

            $paid = Gadget::where('amnt', '>', 0)->where('amnt', '<=', 350)->get();



            return view('dash.dashboard', compact('info', 'collect', 'gadget', 'paid', 'service'));
        }

        return redirect('/')->with('error', 'Access Denied');
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {


            Auth::logout();

            return Redirect('/');
        }
    }

    public function rec()
    {
        if (Auth::check()) {

            if (Auth::user()->type == 'admin') {
                $info = Gadget::get();
            } else {
                $info = Gadget::where('pos', 'Reception')->orwhere('pos', 'Collected')->get();
            }


            return view('dash.reception', compact('info'));
        }

        return redirect('/')->with('error', 'Access Denied');
    }


    public function hard()
    {
        if (Auth::check()) {


            $info = Gadget::where('pos', 'Hardware')->get();


            return view('dash.hard', compact('info'));
        }

        return redirect('/')->with('error', 'Access Denied');
    }



    public function soft()
    {
        if (Auth::check()) {

            $info = Gadget::where('pos', 'Software')->get();

            return view('dash.soft', compact('info'));
        }

        return redirect('/')->with('error', 'Access Denied');
    }

    public function user()
    {
        if (Auth::check()) {

            $users = User::get();

            return view('dash.user', compact('users'));
        }

        return redirect('/')->with('error', 'Access Denied');
    }

    public function pay()
    {
        if (Auth::check()) {


            $info = Gadget::get();

            $spaid = Gadget::where('status', 'Collected')->get();
            $paid = Gadget::where('bal', '<=', 0)->get();
            $unpaid = Gadget::where('bal', 350)->get();
            $part = Gadget::where('amnt', '>', 0)->where('amnt', '<', 350)->get();


            return view('dash.pay', compact('info', 'paid', 'spaid', 'unpaid', 'part'));
        }

        return redirect('/')->with('error', 'Access Denied');
    }

    public function addg()
    {
        if (Auth::check()) {

            $info = Gadget::create([
                'pos' => 'Reception',
                'trec' => Auth::user()->name,
                'status' => 'Admitted',
                'amnt' => 0,
            ]);


            return view('dash.addg', compact('info'));
        }

        return redirect('/')->with('error', 'Access Denied');
    }


    public function adduser()
    {
        if (Auth::check()) {

            return view('dash.adduser');
        }

        return redirect('/')->with('error', 'Access Denied');
    }
}
