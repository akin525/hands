<?php


namespace App\Http\Controllers;


use App\Models\Advert;
use App\Models\Banner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdvertController extends Controller
{
    public function index()
    {
        $banner=Banner::where('page',1)->first();
        $ads=Advert::where('status', 1)->get();

        return view('ads/ads', compact('ads', 'banner'));
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
    $user=User::where('username', $ad->username)->first();
    return view('ads/ads-detail', compact('ad', 'all', 'user'));
}

function alladsloaded()
{
    $banner=Banner::where('page', 2)->first();
    $all=Advert::where('status', 1)->paginate(6);
    return view('ads/list-ads', compact('all', 'banner'));
}
function stopadvert($request)
{
    $stop=Advert::where('id', $request)->first();
    $top=3;
    $stop->status=$top;
    $stop->save();
    Alert::success('Stop', 'Advert Successfully Stop');
    return back();
}
function runagain($request)
{
    $run=Advert::where('id', $request)->first();
    $ag=1;
    $run->status=$ag;
    $run->save();
    Alert::success('Stop', 'Advert Successfully Running');
    return back();

}
function editadvert($request)
{
    $edit=Advert::where('id', $request)->first();
    return view('admin/editads', compact('edit'));
}
function helptoupdateads(Request $request)
{
    $request->validate([
        'id'=>'required',
        'name'=>'required',
        'amount'=>'required',
        'text'=>'required',
        'duration'=>'required',
        'category'=>'required',

    ]);

    $update=Advert::where('id', $request->id)->first();
    $update->advert_name=$request->name;
    $update->amount=$request->amount;
    $update->content=$request->text;
    $update->duration=$request->duration;
    $update->category=$request->category;
    $update->save();
    $msg="Ads update successful";
    Alert::success('Update', $msg);
    return redirect('admin/checkads');
}
}
