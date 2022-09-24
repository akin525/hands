<?php


namespace App\Http\Controllers;


use App\Models\Business;
use App\Models\RequestFund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
public function userdashboard()
{
$user['request']=RequestFund::where('username', Auth::user()->username)->sum('amount');
$user['request1']=RequestFund::where('username', Auth::user()->username)->where('status', 1)->sum('amount');
$user['request2']=RequestFund::where('username', Auth::user()->username)->where('status', 0)->sum('amount');
//    if (Auth::user()->usertype=='ads'){
//        return view('ads/dashboard', compact('user'));
//
//    }elseif (Auth::user()->usertype=='fund'){
//        return view('dashboard', compact('user'));
//
//    }else{
//        Auth::logout();
//        Alert::info('Message', 'Kindly Contact the administrator');
//        return view('auth.login');
//    }

    return view('dashboard', compact('user'));


}
public function myaccount()
{
    $request=RequestFund::where('username',Auth::user()->username)->get();
    return view('myaccount', compact('request'));
}
public function verify(Request $request)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.paystack.co/transaction/verify/$request->reference",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer sk_test_280c68e08f76233b476038f04d92896b4749eec3",
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

//    return $plan;
if ($data['status']=='true') {
    $amount=$data["data"]["amount"]/100;
    $auth=$data["data"]["authorization"]["authorization_code"];
    $plan=$data["data"]["plan_object"]['name'];

    $fe=Business::where('refid', $request->reference)->first();
    if (isset($fe)){
        $mg="Duplicate Transaction";
        Alert::warning($mg);
        return redirect('business');
    }
    $create = Business::create([
        'username' => Auth::user()->username,
        'refid' => $request->reference,
        'plan'=>$plan,
        'amount'=>$amount,
        'duration'=>'1month',
    ]);

    $mg="Payment Successfully";
    Alert::success('Success', $mg);
    return redirect('dashboard');

}else{
    $mg="Invalid Transaction";
    Alert::warning('Warning', $mg);
    return redirect('dashboard');
}
}
public function business()
{

}
}
