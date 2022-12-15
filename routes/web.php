<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnershipController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/reset-password', function () {
    return view('pages.forgot');
});

Route::get('/about', function() {
    return view('pages.about');
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::prefix('community')->group(function() {
    Route::get('/', [App\Http\Controllers\CommunityController::class, 'index'])->name('community');
    Route::get('/article', [App\Http\Controllers\CommunityController::class, 'article'])->name('article');
});

Route::prefix('event')->group(function() {
    Route::get('/', [App\Http\Controllers\EventController::class, 'index'])->name('event');
    Route::get('/details/{id}', [App\Http\Controllers\EventController::class, 'showEventDetail']);
});

Route::prefix('profile')->group(function() {
    Route::get('/', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile-index');
    Route::get('/event', [App\Http\Controllers\ProfileController::class, 'event'])->name('profile-event');
    Route::get('/membership', [App\Http\Controllers\ProfileController::class, 'membership'])->name('profile-membership');
    Route::get('/membership/checkout/{id}', [App\Http\Controllers\ProfileController::class, 'checkout'])->name('membership-checkout');
    Route::get('/security', [App\Http\Controllers\ProfileController::class, 'security'])->name('profile-security');

});



Route::get('/article/details/{slug}', [App\Http\Controllers\CommunityController::class, 'showArticleDetail']);
Route::post('/community', [App\Http\Controllers\CommunityController::class, 'createPost'])->name('create-post');

Route::get('/post/details/{id}', [App\Http\Controllers\CommunityController::class, 'showPostDetail']);
Route::delete('/post/details/{id}', [App\Http\Controllers\CommunityController::class, 'deletePost']);


Route::get('/partnership', 'App\Http\Controllers\MembershipController@index');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Auth::routes();

