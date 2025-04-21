<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get(uri: '/', action: function () {
//     return view(view: 'landingPage/landingPage');
// });
Route::view('/', '/landingPage/landingPage');


Route::post(uri: '/login', action: [LoginController::class, 'login'])->name(name: 'login'); //REference login function


Route::get(uri: '/UserDashboard', action: function () {
    return view(view: '/userPanel/userDashboard');
});
