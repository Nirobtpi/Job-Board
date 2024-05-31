<?php

namespace App\Http\Controllers;

use App\Models\JobModel;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Http\Request;
Use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class FrontEndController extends Controller
{
    function home(){
        $categories=Category::all();
        $totalJob=JobModel::count();
        $jobs=JobModel::all();
  
        return view('frontend.index',compact('totalJob','categories','jobs'));
    }

    function apply(){
        if(Auth::check()){
            return redirect()->route('user.user_login');
        }
        return 'ok';
    }
    
}
