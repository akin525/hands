<?php


namespace App\Http\Controllers;


use App\Models\Adspay;
use App\Models\Adsplan;
use App\Models\Advert;
use App\Models\Banner;
use App\Models\Plan;
use App\Models\Sponsor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdvertController extends Controller
{

    function homeloading()
    {
        $ads=Advert::where('status', 1)
            ->orderByRaw('updated_at  DESC')
            ->limit(5)->get();
       $ads1=Advert::where('status', 1)
           ->inRandomOrder()->orderBy('id', 'desc')
            ->first();

       return view('home', compact('ads', 'ads1' ));
    }
    public function index()
    {
        $sponsor=Sponsor::where('status', 1)->latest()->limit(12)->get();
        $banner=Banner::where('page',1)->first();
        $ads=Advert::where('status', 1)
            ->orderByRaw('updated_at  DESC')
            ->paginate('9');
        $plan=Adsplan::where('status', 1)->get();

        $top=Advert::where('status', 1)
            ->orderByRaw('updated_at  DESC')
            ->limit(3)->get();

        return view('ads/ads', compact('ads', 'banner', 'sponsor', 'plan', 'top'));
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
        'add'=>'required',
    ]);

    $ad=Advert::where('username', Auth::user()->username)->count();
    $plan=Adsplan::where('id', Auth::user()->ads_status)->first();

        $user = User::where('username', Auth::user()->username)->first();
        $cover = Storage::put('cover', $request['cover']);
        $other = Storage::put('cover', $request['add']);
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
            'other' => $other,
        ]);

    if ($ad>=$plan->limit){
//        $msg="Kindly Upgrade your Account Membership Account for instant post";
//        Alert::info('Pending', $msg);
//        return redirect('upgrade');
    }else{
        $post->status=1;
        $post->save();

    }

    $mg="Advert Successful posted";
    Alert::success('Successful', $mg);
    return back();
//        $mg = "Request successful submitted Kindly contact our customer service if your items didn’t posted to our page in 15 minutes";
//        Alert::info('Pending', $mg);
//        return back();
    }

    public function linkuodate(Request $request)
    {
        $request->validate([
            'link' => ['required',  'url'],

        ]);

        $update=User::where('username', Auth::user()->username)->first();
        $update->chat_link=$request->link;
        $update->save();

        if (Session::has('advert')) {
            $intendedUrl = Session::pull('advert');
            return redirect($intendedUrl);
        }

        // Redirect to a fallback route if there is no intended URL
        return redirect()->route('dashboard');

    }
    public function updatelink()
    {


        Alert::info('Notice', 'please kindly update your chat tawk-to link to enable your customer to chat uou up');
        // Redirect to a fallback route if there is no intended URL
        return view('updatelink');

    }


public function adscat($request)
{
    $cat=Advert::where('category', $request)->where('status', 1)->latest()->paginate(6);
    $top=Advert::where('status', 1)
        ->orderByRaw('updated_at  DESC')
        ->limit(3)->get();
    return view('ads/all-category', compact('cat',  'top', 'request'));
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
//    return $user;
    return view('ads/ads-detail', compact('ad', 'all', 'user', 'banner'));
}


function alladsloaded()
{
    $banner=Banner::where('page', 2)->first();
    $all=Advert::where('status', 1)
        ->orderByRaw('updated_at  DESC')
        ->paginate(12);
    $top=Advert::where('status', 1)
        ->orderByRaw('updated_at  DESC')
        ->limit(3)->get();
    return view('ads/list-ads', compact('all', 'banner', 'top'));
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
    $plan=Adsplan::where('status', 1)->get();
    return view('upgrade', compact('plan'));
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
        $plan=Adsplan::where('amount', $amount)->first();
        $create=Adspay::create([
            'username'=>Auth::user()->username,
            'amount'=>$amount,
            'plan'=>$plan->id,
            'refid'=>$request,
        ]);
        $user->ads_status=$plan->id;
        $user->save();
        $mg="Account Upgrade Successfully";
        Alert::success('Upgraded', $mg);
        return redirect('advert');
    }
    $mg="Fail Transaction Contact Admin";
    Alert::error('Ooops', $mg);
    return back();

}
function insertplan($request)
{
    $create=Adspay::create([
        'username'=>Auth::user()->username,
        'amount'=>0,
        'plan'=>$request,
    ]);
}

function listupgrade()
{
    $plan=Adspay::where('username', Auth::user()->username)->get();
    return view('listupgrade', compact('plan'));
}


}
