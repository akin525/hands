<?php

use App\Http\Controllers\admin\Admindashboard;
use App\Http\Controllers\admin\AlladvertController;
use App\Http\Controllers\admin\AllrequestController;
use App\Http\Controllers\admin\CreatA;
use App\Http\Controllers\admin\FundController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\AdminAuth;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RequesfundController;
use App\Http\Controllers\TransController;
use App\Http\Controllers\Updateuser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::view('home', 'home');
Route::view('about', 'about');
Route::view('event', 'event');
Route::view('volunteer', 'volunteer');
Route::view('contact', 'contact');
Route::get('/logout', function(){
    Auth::logout();
    Alert::Success('Logout', 'You Have Successful Logout');
    return view('auth.login')->with('success', 'Logout Successful');
});
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'userdashboard'])->name('dashboard');
    Route::get('verify', [DashboardController::class, 'verify'])->name('verify');
    Route::get('myaccount', [DashboardController::class, 'myaccount'])->name('myaccount');
    Route::post('update', [Updateuser::class, 'profile1'])->name('update');
    Route::post('update', [Updateuser::class, 'profile1'])->name('update');
    Route::post('pic', [Updateuser::class, 'profilephoto'])->name('pic');
//    Route::view('advert', 'advert');


});

Route::middleware(['auth','ads'])->group(function () {
    Route::get('advert', [TransController::class, 'alladvert'])->name('advert');
    Route::post('padvert', [AdvertController::class, 'advert'])->name('padvert');
    Route::view('business', 'business');
    Route::view('fundraise', 'fundraise');

});
Route::middleware(['auth','fund'])->group(function () {
    Route::view('donate', 'donate');
    Route::view('donation', 'donation');
    Route::get('allrequest', [TransController::class, 'allrequest'])->name('allrequest');
    Route::get('request/{id}', [RequesfundController::class, 'fund'])->name('request');
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [Admindashboard::class, 'admindashboard'])->name('admin/dashboard');
    Route::get('admin/alluser', [UserController::class, 'listalluser'])->name('admin/alluser');
    Route::get('admin/edituser/{id}', [UserController::class, 'editusers'])->name('admin/edituser');
    Route::get('admin/deleteuser/{id}', [UserController::class, 'deleteuser'])->name('admin/deleteuser');
    Route::post('admin/updateuser', [UserController::class, 'updateuser'])->name('admin/updateuser');
    Route::get('admin/createuser', [CreatA::class, 'createuser'])->name('admin/createuser');
    Route::post('admin/submituser', [CreatA::class, 'submituser'])->name('admin/submituser');
    Route::get('admin/post-advert', [AlladvertController::class, 'postadvertadmin'])->name('admin/post-advert');
    Route::get('admin/checkads', [AlladvertController::class, 'alladvertrequest'])->name('admin/checkads');
    Route::get('admin/checkrequest', [AllrequestController::class, 'indexrequest'])->name('admin/checkrequest');
    Route::get('admin/bookfund', [FundController::class, 'bookfund'])->name('admin/bookfund');
    Route::post('admin/booksubmit', [FundController::class, 'submitbook'])->name('admin/booksubmit');
    Route::get('admin/approverequest/{id}', [AllrequestController::class, 'approvefundrequrst'])->name('admin/approverequest');
    Route::get('admin/disapproverequest/{id}', [AllrequestController::class, 'disapprovedfundrequest'])->name('admin/disapproverequest');
    Route::get('admin/appads/{id}', [AlladvertController::class, 'approveadvert'])->name('admin/appads');
    Route::get('admin/dispads/{id}', [AlladvertController::class, 'disapproveadvert'])->name('admin/dispads');
    Route::get('admin/stopads/{id}', [AdvertController::class, 'stopadvert'])->name('admin/stopads');
    Route::get('admin/runads/{id}', [AdvertController::class, 'runagain'])->name('admin/runads');
    Route::get('admin/editads/{id}', [AdvertController::class, 'editadvert'])->name('admin/editads');
    Route::post('admin/updateads', [AdvertController::class, 'helptoupdateads'])->name('admin/updateads');
    Route::post('admin/postas', [AlladvertController::class, 'postalladvertadmin'])->name('admin/postas');

});
Route::get('admin', [AdminAuth::class, 'log'])
    ->name('admin');
Route::post('admin1', [AdminAuth::class, 'getin'])->name('admin1');

Route::get('ads', [AdvertController::class, 'index'])
    ->name('ads');
Route::get('ads-detail/{id}', [AdvertController::class, 'adsdetails'])->name('ads-detail');
Route::get('all-category/{id}', [AdvertController::class, 'adscat'])->name('all-category');

Route::get('listads', [AdvertController::class, 'alladsloaded'])->name('listads');

Route::get('/cover/{filename}', function ($filename) {
    $path = storage_path('app/cover/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('cover');
Route::get('/profile/{filename}', function ($filename) {
    $path = storage_path('app/profile/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('cover');
require __DIR__.'/auth.php';
