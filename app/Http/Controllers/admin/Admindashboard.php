<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\RequestFund;
use App\Models\User;

class Admindashboard extends Controller
{
    public function admindashboard()
    {
        $all['request']=RequestFund::sum('amount');
        $all['wallet']=User::sum('wallet');
        $all['pendingr']=RequestFund::where('status', 0)->count();
        $all['pendinga']=Advert::where('status', 0)->count();
        $all['activea']=Advert::where('status', 1)->count();
        $all['activer']=RequestFund::where('status', 1)->count();
//        $today=;
    }
}
