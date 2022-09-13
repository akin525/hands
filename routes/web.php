<?php

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
    Route::get('allrequest', [TransController::class, 'allrequest'])->name('allrequest');
    Route::get('advert', [TransController::class, 'alladvert'])->name('advert');
    Route::get('request/{id}', [RequesfundController::class, 'fund'])->name('request');
    Route::post('update', [Updateuser::class, 'profile1'])->name('update');
    Route::post('send', [RequesfundController::class, 'submitfund'])->name('send');
    Route::post('padvert', [AdvertController::class, 'advert'])->name('padvert');
    Route::view('fundraise', 'fundraise');
//    Route::view('advert', 'advert');
    Route::view('donate', 'donate');
    Route::view('donation', 'donation');
    Route::view('business', 'business');

});
Route::view('ads', 'ads.ads');
Route::view('listads', 'ads.list-ads');

Route::get('/cover/{filename}', function ($filename) {
    $path = storage_path('app/public/' . $filename);

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
