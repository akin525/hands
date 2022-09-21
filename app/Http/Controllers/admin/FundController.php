<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\RequestFund;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FundController extends Controller
{
    function bookfund()
    {
        $user=User::all();
        return view('admin/bookfund', compact('user'));
    }
    function submitbook(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'duration'=>'required',
            'amount'=>'required',

        ]);

        $create=RequestFund::create([
            'username'=>$request->username,
            'plan'=>"GENERAL",
            'duration'=>$request->duration,
            'amount'=>$request->amount,
        ]);
        $mg="Your Fund Have Successful Been Book, kinly click on approval for approve";
        Alert::info('Pending', $mg);
        return back();
    }

}
