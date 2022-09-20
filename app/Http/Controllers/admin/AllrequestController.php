<?php

namespace App\Http\Controllers\admin;

use App\Models\RequestFund;
use RealRashid\SweetAlert\Facades\Alert;

class AllrequestController
{
function indexrequest()
{
    $all=RequestFund::all();
    return view('admin/allrequest', compact('all'));
}
function approvefundrequrst($request)
{
    $approve=RequestFund::where('id', $request)->first();
    $status=1;
    $mg="Advert Approved successfully";
    $approve->status=$status;
    $approve->save();
    Alert::success('Success', $mg);
    return back();
}
function disapprovedfundrequest($request)
{
    $approve=RequestFund::where('id', $request)->first();
    $status=2;
    $mg="Advert Disapproved successfully";
    $approve->status=$status;
    $approve->save();
    Alert::success('Success', $mg);
    return back();
}
}
