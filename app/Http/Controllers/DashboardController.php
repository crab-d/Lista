<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class DashboardController extends Controller
{
    public function dashboard() {
        // sotre user data in $player var
        $player = auth()->user();
        //then return a view with the user data
        return view('userPanel/userDashboard', compact('player'));
    }
}
