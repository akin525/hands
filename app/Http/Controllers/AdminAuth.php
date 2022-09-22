<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminAuth extends Controller
{

    public function log()
    {

        return view('admin.login');
    }

    function getin(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $input['email']=$request->get('email');
        $input['password']=$request->get('password');


            if(Auth::attempt($input)){
                return redirect('admin/dashboard');
            }else{
                Alert::error('Message', 'Incorrect login detail');
                return redirect('admin');
            }

    }
}
