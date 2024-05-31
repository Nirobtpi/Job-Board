<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    function adminDashboard(){
        return view('dashboard.dashboard');
    }

    
}
