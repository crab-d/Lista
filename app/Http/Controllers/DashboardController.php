<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
    public function dashboard() {
        // sotre user data in $player var
        $player = auth()->user();

        //Retrieve user task
        $tasks = Task::class::where('players_id', auth()->user()->id)->get();

        //then return a view with the user data
        return view('userPanel/userDashboard', compact('player', 'tasks'));
    }
    
}
