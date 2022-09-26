<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\RequestFund;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class Admindashboard extends Controller
{
    public function admindashboard()
    {
        $date = Carbon::now()->format('Y-m-d');

        $all['alluser']=User::count();
        $all['todayuser']=User::where('created_at', 'LIKE', $date . '%')->count();
        $all['request']=RequestFund::sum('amount');
        $all['wallet']=User::sum('balance');
        $all['pendingr']=RequestFund::where('status', 0)->count();
        $all['pendinga']=Advert::where('status', 0)->count();
        $all['activea']=Advert::where('status', 1)->count();
        $all['activer']=RequestFund::where('status', 1)->count();

        $today['requestp']=RequestFund::where([['status', '=', '0'], ['created_at', 'LIKE', $date . '%']])->count();
        $today['requesta']=RequestFund::where([['status', '=', '1'], ['created_at', 'LIKE', $date . '%']])->count();
        $today['advertp']=Advert::where([['status', '=', '1'], ['created_at', 'LIKE', $date . '%']])->count();
        $today['adverta']=Advert::where([['status', '=', '1'], ['created_at', 'LIKE', $date . '%']])->count();

        return view('admin/dashboard', compact('all','today'));
    }
    public function uploadadvert()
    {
        $all=Advert::all();
        return view('admin/uploadadvert', compact('all'));
    }
    public function uploadadvertadmin(Request $request)
    {
        $request->validate([
            'cover'=>'required',
            'name'=>'required',
            'content'=>'required',
            'amount'=>'required',
        ]);
        $user=User::where('username',Auth::user()->username)->first();
        $cover = Storage::put('cover', $request['cover']);
        $post=Advert::create([
            'username'=>Auth::user()->username,
            'advert_name'=>$request->name,
            'address'=>$request->address,
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
}
