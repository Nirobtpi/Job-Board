<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    function job_list(){
        return view('admin.job.job-list');
    }

    function create_job(){
        return view('admin.job.create-job');
    }
}
