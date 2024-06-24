<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    function adminDashboard(){
        if(Auth::user()->is_admin != 'employer'){
            return redirect()->route('home');
        }else{
            return view('dashboard.dashboard');
        }
        
    }

    
}
