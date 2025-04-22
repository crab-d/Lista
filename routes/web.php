<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

//Route for landing page
Route::get('/', function ()  {
    if (auth()->check()) { // Check if the user is already logged in
        return redirect('/UserDashboard');
    };
    return view('landingPage/landingPage'); //return to landing page if not
});

//Rpute for logout, used loout function inside LoginController. reference name logout
Route::get( '/logout', [LoginController::class, 'logout'])->name('logout');
//Route for login
Route::post('/', [LoginController::class, 'login'])->name(name: 'login'); 
//Route for USerDashboard. It validate first user authentication and apply no cache to it wont load the previous cache so if user logout then it will not show the dashboard
Route::get('/UserDashboard', [DashboardController::class, 'dashboard'])->middleware('auth', 'nocache')->name('userDashboard');