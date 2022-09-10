<?php


namespace App\Http\Controllers;


use App\Models\Advert;
use App\Models\RequestFund;
use Illuminate\Support\Facades\Auth;

class TransController extends Controller
{
public function allrequest()
{
    $fund=RequestFund::where('username', Auth::user()->username)->get();
    return view('allrequest', compact('fund'));
}
public function alladvert()
{
    $advert=Advert::where('username', Auth::user()->username)->get();
    return view('advert', compact('advert'));
}
}
