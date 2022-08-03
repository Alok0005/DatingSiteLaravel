<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\EmailVerificationController;

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
        $template['page'] = 'index';
		return view('frontend.template ', $template);
});

//Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/allmember',[HomeController::class, 'allmember']);


Route::get('/memberdetails_profile',[HomeController::class, 'memberdetails_profile'])->name('profile');

Route::get('/contact',[HomeController::class, 'contact']);

Route::get('/signup',[HomeController::class, 'signup'])->name('signup');

Route::get('/setting',[HomeController::class, 'setting'])->name('setting');

Route::get('/otp-verification',[HomeController::class, 'otp_verification'])->name('otp-verification');

Route::get('/otp-verify-page',[HomeController::class, 'otp_verify_page'])->name('otp-verify-page');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/profile',[App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::post('/update-profile',[App\Http\Controllers\HomeController::class, 'update_profile'])->name('update.profile');

Route::get('/all-suggestion-profile',[App\Http\Controllers\HomeController::class, 'all_suggestion_profile'])->name('all-suggestion-profile');

Route::get('/all-suggestion-profile-details/{id}',[App\Http\Controllers\HomeController::class, 'all_suggestion_profile_details'])->name('all-suggestion-profile-details');

//Route::get('/auth/facebook/redirect',[SocialAuthController::class, 'facebookRedirect'])->name('facebookRedirect');
//Route::get('/auth/facebook/callback',[SocialAuthController::class, 'facebookCallback'])->name('facebookCallback');

Route::prefix('facebook')->name('facebook.')->group( function(){
	Route::get('auth', [SocialAuthController::class, 'facebookRedirect'])->name('login');
	Route::get('callback', [SocialAuthController::class, 'facebookCallback'])->name('callback');
});

Route::prefix('google')->name('google.')->group( function(){
	Route::get('auth', [SocialAuthController::class, 'googleRedirect'])->name('login');
	Route::get('callback', [SocialAuthController::class, 'googleCallback'])->name('callback');
});

Route::post('loginConfirm', [SocialAuthController::class, 'googleLogin'])->name('loginConfirm');
Route::post('confirmlogin', [RegisterController::class, 'confirmLogin'])->name('confirmlogin');

//Email verification via otp

Route::get('request_otp', [EmailVerificationController::class, 'requestOtp'])->name('request_otp');
Route::get('verify_otp', [EmailVerificationController::class,'verifyOtp'])->name('verify_otp');

Route::get('/home1', [App\Http\Controllers\HomeController::class, 'index1'])->name('home1');
Route::post('/post-like',[App\Http\Controllers\HomeController::class, 'postLike']);
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
