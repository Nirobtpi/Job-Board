<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    function adminDashboard(){
        return view('dashboard.dashboard');
    }

    
}
