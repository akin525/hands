<?php

namespace App\Http\Controllers\admin;

use App\Models\Advert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AlladvertController
{
function postadvertadmin()
    {
        return view('admin/postads');
    }
public function alladvertrequest()
{
    $all=Advert::all();

    return view('admin/alladvert', compact('all'));
}
public function approveadvert($request)
{
    $approve=Advert::where('id', $request)->first();
    $status=1;
    $mg="Advert Approved successfully";
    $approve->status=$status;
    $approve->save();
    Alert::success('Success', $mg);
    return back();

}
    public function disapproveadvert($request)
    {
        $approve=Advert::where('id', $request)->first();
        $status=2;
        $mg="Advert Disapproved successfully";
        $approve->status=$status;
        $approve->save();
        Alert::success('Success', $mg);
        return back();

    }
function postalladvertadmin(Request $request)
{
    $request->validate([
        'name'=>'required',
        'amount'=>'required',
        'address'=>'required',
        'category'=>'required',
        'text'=>'required',
        'number'=>'required',
        'cover'=>'required',
    ]);

    $user=User::where('username',Auth::user()->username)->first();
    $cover = Storage::put('cover', $request['cover']);
    $post=Advert::create([
        'username'=>'admin',
        'advert_name'=>$request->name,
        'address'=>$request->address,
        'amount'=>$request->amount,
        'category'=>$request->category,
        'number'=>$request->number,
        'duration'=>$request->duration,
        'content'=>$request->text,
        'cover_image'=>$cover,
        'status'=>1,
    ]);


    $mg="Advert post was Successful";
    Alert::success('Success', $mg);
    return back();
}
}
