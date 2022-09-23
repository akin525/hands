<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
function listalluser()
{
    $all=User::all();
    return view('admin/alluser', compact('all'));
}
function editusers($request)
{
    $user=User::where('id', $request)->first();
    return view('admin/edituser', compact('user'));
}
function updateuser (Request $request)
{
    $request->validate([
        'id'=>'required',
        'name'=>'required',
        'role'=>'required',
        'usertype'=>'required',
        'number'=>'required',
        'email'=>'required',
    ]);
    $user=User::where('id', $request->id)->first();
    $user->name=$request->name;
    $user->number=$request->number;
    $user->email=$request->email;
    $user->role=$request->role;
    $user->usertype=$request->usertype;
    $user->save();
    $mg="User Update Successfully";
    Alert::success('Success', $mg);
    return redirect('admin/alluser');
}
function deleteuser($request)
{
    $user=User::where('id', $request)->delete();
    Alert::success('Deleted', 'You have successful deleted the user ');
    return redirect('admin/alluser');
}
}
