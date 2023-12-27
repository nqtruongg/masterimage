<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ImageController::class, 'index'])->name('home');


//Login with Google
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'redirectToGoogleCallback']);
//Github

Route::get('/login/github', [LoginController::class, 'redirectToGithub'])->name('login.github');

Route::get('/login/github/callback', [LoginController::class, 'redirectToGithubCallback'])->name('login.github.callback');



//Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Login with Facebook
Route::controller(LoginController::class)->group(function(){
    Route::get('login/facebook', 'redirectToFacebook')->name('login.facebook');
    Route::get('login/facebook/callback', 'handleFacebookCallback');
});
