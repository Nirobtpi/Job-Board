<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\JobModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    function apply($id){
        if(Auth::check()){
            $app=Application::where('user_id',Auth::user()->id)->get();
            $job=JobModel::findOrFail($id);
            return view('frontend.job.apply',compact('job','app'));
        }else{
            return redirect()->route('user.user_login');
        }
    }

    function app(){
        return $app=Application::get();
    }

    function applyList(){
        $joblist=Application::where('user_id',Auth::user()->id)->with('job')->get();
        return view('frontend.job.application-list',compact('joblist'));
    }

    function applyJob(Request $request,$id){
        // return $request->name =Auth::user()->id;
        $resume=$request->resume;
        
        $request->validate([
            'cover_letter'=>['required','max:255'],
            'resume'=>['required','mimes:jpeg,png,jpg,gif,svg,pdf','max:2048']
        ]);
        if($request->file('resume')){
            $resume=Storage::putFile('uploads',$request->file('resume'));
        }
        Application::create([
           'user_id' =>Auth::user()->id,
           'job_id' =>$id,
           'cover_letter' =>$request->cover_letter,
           'resume' =>$resume,
        ]);

        return redirect()->route('applyList');
    }


    // Admin show application 

    public function showApplication(){

        $applications=Application::with('job','user')->get();
        return view('admin.application.show-application', compact('applications'));
    }

    function Approve($id){
        Application::findOrFail($id)->update([
            'status'=>1,
        ]);
        return back()->with('success','Application Approved');
    }
    
}
