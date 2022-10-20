<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Adsplan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PlanController extends Controller
{
    public function plan()

    {
        $plan=Adsplan::all();
        return view('admin/createplan', compact('plan'));
    }
    function postplan(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'limit'=>'required',
            'narration'=>'required',
            'amount'=>'required',
            'day'=>'required',
        ]);
        $create=Adsplan::create([
            'plan'=>$request->name,
            'amount'=>$request->amount,
            'narration'=>$request->narration,
            'limit'=>$request->limit,
            'days'=>$request->day,
        ]);
        $msg="Plan Created Successful";
        Alert::success('Success', $msg);
        return back();
    }
    function updateplan(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'narration'=>'required',
            'limit'=>'required',
            'amount'=>'required',
            'day'=>'required',
        ]);

       $pon=Adsplan::where('id', $request->id)->first();
       $pon->plan=$request->name;
       $pon->amount=$request->amount;
       $pon->limit=$request->limit;
       $pon->narration=$request->narration;
       $pon->days=$request->day;
       $pon->save();
        $msg="Plan Successful Updated";
        Alert::success('Success', $msg);
        return redirect('admin/plan');
    }

    function editplan($request)
    {
        $plan=Adsplan::where('id', $request)->first();
        return view('admin/editplan', compact('plan'));
    }



}
