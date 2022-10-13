<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnershipController;

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
    return view('/pages/index');
});

Route::get('/forgotpassword', function () {
    return view('/pages/forgot');
});

Route::get('/about', function() {
    return view('/pages/about');
});

Route::get('/login', function () {
    return view('/pages/login');
});

Route::get('/register', function () {
    return view('/pages/register');
});

Route::get('/event', function () {
    return view('/pages/event');
});

Route::get('/community', function () {
    return view('/pages/community');
});

Route::get('/terms', function() {
    return view('pages.terms');
});

Route::get('/webterms', function() {
    return view('pages.webterms');
});

Route::get('/privacy', function() {
    return view('pages.privacy');
});


Route::get('/profile', 'App\Http\Controllers\ProfileController@index');
Route::get('/eventprofile', 'App\Http\Controllers\ProfileController@event');
Route::get('/membershipprofile', 'App\Http\Controllers\ProfileController@membership');
Route::get('/security', 'App\Http\Controllers\ProfileController@security');

Route::get('/partnership', 'App\Http\Controllers\MembershipController@index');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
