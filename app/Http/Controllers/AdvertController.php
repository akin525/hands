<?php


namespace App\Http\Controllers;


use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdvertController extends Controller
{
public function advert(Request $request)
{
    $request->validate([
        'name'=>'required',
        'address'=>'required',
        'duration'=>'required',
        'text'=>'required',
        'cover'=>'required',
    ]);
    $cover = Storage::put('cover', $request['cover']);

    $post=Advert::create([
        'username'=>Auth::user()->username,
        'advert_name'=>$request->name,
        'address'=>$request->address,
        'duration'=>$request->duration,
        'content'=>$request->text,
        'cover_image'=>$cover,
    ]);
    $mg="Request Successful Submitted, Kindly Visit us at our office for confirmation";
    Alert::info('Pending', $mg);
    return back();
}
}
