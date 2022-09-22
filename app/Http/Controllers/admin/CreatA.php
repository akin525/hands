<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class CreatA extends Controller
{
public function createuser()
{
    return view('admin/createuser');
}
public function submituser(Request $request)
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'number' => ['required',  'min:11', 'max:11', 'unique:users'],
        'usertype' => ['required'],
        'username' => ['required', 'string', 'min:6', 'max:255', 'unique:users'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required'],
        'role' => ['required'],
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'role' => $request->role,
        'usertype' => $request->usertype,
        'username' => $request->username,
        'number' => $request->number,
        'password' => Hash::make($request->password),
    ]);
    Alert::success('User was successful created');
    return back();
}
}
