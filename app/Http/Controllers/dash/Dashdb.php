<?php

namespace App\Http\Controllers\dash;

use App\Http\Controllers\Controller;
use App\Mail\RecepMail;
use App\Mail\UserMail;
use App\Models\Gadget;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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

            // dd($data['pos']);

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
                'pos' => $data['pos'],

            ]);

            Alert::success('Success', 'Gadget information updated successfully.');
            return back();
        }

        return redirect('/')->with('error', 'Access Denied');
    }


    public function supdate(Request $request, $id)
    {

        if (Auth::check()) {
            $gadget = Gadget::findOrFail($id);

            $data = $request->all();

            // dd($data['pos']);

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
                'tsw' => $data['tsw'],
                'pos' => $data['pos'],

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

    public function adds($id)
    {

        if (Auth::check()) {
            $info = Gadget::findOrFail($id);

            return view('dash.adds', compact('info'));
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

    public function recep($id)
    {
        if (Auth::check()) {
            $gadget = Gadget::findOrFail($id);

            Mail::to($gadget->email)->send(new RecepMail($gadget));

            $gadget->update([
                'foth1' => '1',
            ]);
            Alert::success('Success', 'Receipt sent successfully.');
            return back();
        }

        return redirect('/')->with('error', 'Access Denied');
    }

    public function deleteuser($id)
    {
        if (Auth::check()) {
            $user = User::findOrFail($id);
            $user->delete();

            Alert::success('Deleted', 'User deleted successfully.');
            return back();
        }

        return redirect('/')->with('error', 'Access Denied');
    }

    public function adduserdb(Request $request)
    {
        if (Auth::check()) {
            $data = $request->all();


            function generateRandomPassword($length = 12)
            {
                $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:,.<>?';
                $password = '';
                $maxIndex = strlen($chars) - 1;

                for ($i = 0; $i < $length; $i++) {
                    $password .= $chars[random_int(0, $maxIndex)];
                }

                return $password;
            }



            $password = generateRandomPassword(8);

            $user = User::create([
                'name' => $data['uname'],
                'fname' => $data['fname'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'password' => bcrypt($password),
                'type' => $data['type'],
            ]);

            Mail::to($user->email)->send(new UserMail($user, $password));

            Alert::success('Success', 'User added successfully.');
            return redirect()->route('user');
        }

        return redirect('/')->with('error', 'Access Denied');
    }


    public function updateuser($id)
    {
        if (Auth::check()) {
            $user = User::findOrFail($id);

            return view('dash.updateuser', compact('user'));
        }

        return redirect('/')->with('error', 'Access Denied');
    }

    public function updateuserdb(Request $request, $id)
    {
        if (Auth::check()) {
            $user = User::findOrFail($id);

            $data = $request->all();

            $user->update([
                'name' => $data['uname'],
                'fname' => $data['fname'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'type' => $data['type'],
            ]);

            Alert::success('Success', 'User updated successfully.');
            return redirect()->route('user');
        }

        return redirect('/')->with('error', 'Access Denied');
    }
}
