<?php


namespace App\Http\Controllers;


use App\Models\Adspay;
use App\Models\Advert;
use App\Models\Banner;
use App\Models\Sponsor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdvertController extends Controller
{
    public function index()
    {
        $sponsor=Sponsor::where('status', 1)->latest()->limit(12)->get();
        $banner=Banner::where('page',1)->first();
        $ads=Advert::where('status', 1)->latest()->limit(12)->get();

        return view('ads/ads', compact('ads', 'banner', 'sponsor'));
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

    $ad=Advert::where('username', Auth::user()->username)->count();
    if (Auth::user()->ads_status =='0'){
        if ($ad==5){
            $msg="Kindly Upgrade your Account Membership Account";
            Alert::warning('Ooops', $msg);
            return redirect('upgrade');
        }
//        Alert::warning('Warning', 'You have an active ads till running');
//        return back();
    }else if (Auth::user()->ads_status =='1') {
        if ($ad == 20) {
            $msg="Kindly Upgrade your Account Membership Account";
            Alert::warning('Ooops', $msg);
            return redirect('upgrade');
        }
    }else if (Auth::user()->ads_status =='2') {
        if ($ad == 60) {
            $msg = "Kindly Contact Admin For Upgrade";
            Alert::warning('Ooops', $msg);
            return redirect('upgrade');
        }
    }

        $user = User::where('username', Auth::user()->username)->first();
        $cover = Storage::put('cover', $request['cover']);
        $post = Advert::create([
            'username' => Auth::user()->username,
            'advert_name' => $request->name,
            'address' => $request->address,
            'number' => $request->number,
            'amount' => $request->amount,
            'category' => $request->category,
            'duration' => $request->duration,
            'content' => $request->text,
            'cover_image' => $cover,
        ]);




        $mg = "Request successful submitted Kindly contact our customer service if your items didn’t posted to our page in 15 minutes";
        Alert::info('Pending', $mg);
        return back();
    }


public function adscat($request)
{
    $cat=Advert::where('category', $request)->where('status', 1)->latest()->paginate(6);
    return view('ads/all-category', compact('cat'));
}


function adsdetails1($request)
{
    $banner=Banner::where('page', 1)->first();
    $ad=Sponsor::where('id', $request)->first();
    $all=Advert::where('status',1)->latest()->limit(3)->get();
    $user=User::where('username', $ad->username)->first();
    return view('ads/ads-detail', compact('ad', 'all', 'user', 'banner'));
}


function adsdetails($request)
{
    $banner=Banner::where('page', 1)->first();
    $ad=Advert::where('id', $request)->first();
    $all=Advert::where('status',1)->latest()->limit(3)->get();
    $user=User::where('username', $ad->username)->first();
    return view('ads/ads-detail', compact('ad', 'all', 'user', 'banner'));
}


function alladsloaded()
{
    $banner=Banner::where('page', 2)->first();
    $all=Advert::where('status', 1)->latest()->paginate(9);
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


function upgrade()
{
    return view('upgrade');
}


function verifyads($request)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/transaction/verify/$request",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer ".env('paystack_sk'),
            "Cache-Control: no-cache",
        ),
    ));
//curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0)

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
//             echo $response;
    }
//        return $response;
    $data=json_decode($response, true);

//    return $data;
    if ($data['status']=='true') {
        $amount=$data["data"]["amount"]/100;
        $user=User::where('username', Auth::user()->username)->first();
        if ($amount=="1500"){
            $nu=1;
            $plan="Standard";
        }elseif ($amount=="3000"){
            $nu=2;
            $plan="Premium";
        }
        $create=Adspay::create([
            'username'=>Auth::user()->username,
            'amount'=>$amount,
            'plan'=>$plan,
        ]);
        $user->ads_status=$nu;
        $user->save();
        $mg="Account Upgrade Successfully";
        Alert::success('Upgraded', $mg);
        return redirect('advert');
    }
    $mg="Fail Transaction Contact Admin";
    Alert::error('Ooops', $mg);
    return back();

}

function listupgrade()
{
    $plan=Adspay::where('username', Auth::user()->username)->get();
    return view('listupgrade', compact('plan'));
}


}
