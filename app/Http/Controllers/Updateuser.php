<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class Updateuser

{
    public function profile(Request $request)
    {
        if (Auth::check()) {
            $user = User::find($request->user()->id);

            return  view('update', compact('user'));

        }
    }
    function profilephoto(Request $request)
    {
        $request->validate([
            'pic'=>'required',
        ]);

        $profile = Storage::put('profile', $request['pic']);

        $user=User::where('username', Auth::user()->username)->first();

        $user->profile=$profile;
        $user->save();
        $msg="Profile Picture Change Successfully ";
        Alert::success('Success', $msg);
        return back();

    }

    public function profile1(Request $request)
    {
        if (Auth::check()) {

            $request->validate([
                'email' => 'required',
                'number' => 'required',
                'name' => 'required',
            ]);

            $user = User::find($request->user()->id);

            $user->name =$request->name;
            $user->email =$request->email;
            $user->number =$request->number;
            $user->save();

            $mes ="Profile Update Successful";
            Alert::toast($mes, 'success');
            return back();

        }
    }
}
