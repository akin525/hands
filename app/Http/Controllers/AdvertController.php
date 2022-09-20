<?php


namespace App\Http\Controllers;


use App\Models\Advert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdvertController extends Controller
{
    public function index()
    {
        $ads=Advert::all();

        return view('ads/ads', compact('ads'));
    }
public function advert(Request $request)
{

    $request->validate([
        'name'=>'required',
        'amount'=>'required',
        'number'=>'required',
        'address'=>'required',
        'category'=>'required',
        'text'=>'required',
        'cover'=>'required',
    ]);
//    if (Auth::user()->ads_status =='0n'){
//        Alert::warning('Warning', 'You have an active ads till running');
//        return back();
//    }
    $user=User::where('username',Auth::user()->username)->first();
    $cover = Storage::put('cover', $request['cover']);
    $post=Advert::create([
        'username'=>Auth::user()->username,
        'advert_name'=>$request->name,
        'address'=>$request->address,
        'number'=>$request->number,
        'amount'=>$request->amount,
        'category'=>$request->category,
        'duration'=>$request->duration,
        'content'=>$request->text,
        'cover_image'=>$cover,
    ]);

    $user->ads_status='0n';
    $user->save();

    $mg="Request Successful Submitted, Kindly Visit us at our office for confirmation";
    Alert::info('Pending', $mg);
    return back();
}

public function adscat($request)
{
    $cat=Advert::where('category', $request)->get();
    return view('ads/all-category', compact('cat'));
}
function adsdetails($request)
{
    $ad=Advert::where('id', $request)->first();
    $all=Advert::latest()->limit(3)->get();
    return view('ads/ads-detail', compact('ad', 'all'));
}

}
