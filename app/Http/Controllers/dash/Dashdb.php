<?php

namespace App\Http\Controllers\dash;

use App\Http\Controllers\Controller;
use App\Models\Gadget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class Dashdb extends Controller
{
    public function update(Request $request, $id)
    {

        if (Auth::check()) {
            $gadget = Gadget::findOrFail($id);

            $data = $request->all();


            if ($data['pos'] == 'Reception') {
                $gadget->update([
                    'rec' => '1',
                    'hw' => '0',
                    'sw' => '0',
                ]);
            } elseif ($data['pos'] == 'Hardware') {
                $gadget->update([
                    'hw' => '1',
                    'rec' => '0',
                    'sw' => '0',
                    'status' => 'In Progress',
                ]);
            } elseif ($data['pos'] == 'Software') {
                $gadget->update([
                    'sw' => '1',
                    'rec' => '0',
                    'hw' => '0',
                    'status' => 'In Progress',
                ]);
            } elseif ($data['pos'] == 'Collected') {
                $gadget->update([
                    'rec' => '1',
                    'hw' => '0',
                    'sw' => '0',
                    'status' => 'Collected',
                ]);
            }

            $bal = 350 - $data['amnt'];
            //dd($data['amnt']);


            $gadget->update([
                'fname' => $data['fname'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'brand' => $data['brand'],
                'model' => $data['model'],
                'serial' => $data['serial'],
                'pos' => $data['pos'],
                'color' => $data['color'],
                'pro' => $data['pro'],
                'ram' => $data['ram'],
                'tsto' => $data['tsto'],
                'sto' => $data['sto'],
                'os' => $data['os'],
                'screen' => $data['screen'],
                'keyb' => $data['keyb'],
                'touch' => $data['touch'],
                'port' => $data['port'],
                'cdes' => $data['cdes'],
                'shw' => $data['shw'],
                'ssw' => $data['ssw'],
                'sdes' => $data['sdes'],
                'amnt' => $data['amnt'],
                'tid' => $data['tid'],
                'access' => $data['access'],
                'bal' => $bal,

            ]);

            Alert::success('Success', 'Gadget information updated successfully.');
            return redirect()->route('addgid', ['id' => $id]);
        }

        return redirect('/')->with('error', 'Access Denied');
    }


    public function hupdate(Request $request, $id)
    {

        if (Auth::check()) {
            $gadget = Gadget::findOrFail($id);

            $data = $request->all();


            if ($data['pos'] == 'Reception') {
                $gadget->update([
                    'rec' => '1',
                    'hw' => '0',
                    'sw' => '0',
                    'status' => 'Pending',
                ]);
            } elseif ($data['pos'] == 'Hardware') {
                $gadget->update([
                    'hw' => '1',
                    'rec' => '0',
                    'sw' => '0',
                    'status' => 'In Progress',
                ]);
            } elseif ($data['pos'] == 'Software') {
                $gadget->update([
                    'sw' => '1',
                    'rec' => '0',
                    'hw' => '0',
                    'status' => 'In Progress',
                ]);
            }




            $gadget->update([
                'thw' => $data['thw'],

            ]);

            Alert::success('Success', 'Gadget information updated successfully.');
            return back();
        }

        return redirect('/')->with('error', 'Access Denied');
    }



    public function addg($id)
    {

        if (Auth::check()) {
            $info = Gadget::findOrFail($id);
            $info = Gadget::findOrFail($id);


            return view('dash.addg', compact('info'));
        }

        return redirect('/')->with('error', 'Access Denied');
    }

    public function addh($id)
    {

        if (Auth::check()) {
            $info = Gadget::findOrFail($id);

            return view('dash.addh', compact('info'));
        }

        return redirect('/')->with('error', 'Access Denied');
    }

    public function delete($id)
    {
        if (Auth::check()) {
            $gadget = Gadget::findOrFail($id);
            $gadget->delete();

            Alert::success('Deleted', 'Gadget deleted successfully.');
            return redirect()->route('rec');
        }

        return redirect('/')->with('error', 'Access Denied');
    }
}
