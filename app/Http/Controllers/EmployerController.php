<?php

namespace App\Http\Controllers;

use App\Models\JobModel;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    function job_list(){
        $jobs=JobModel::where('user_id',Auth::user()->id)->get();
        return view('admin.job.job-list',compact('jobs'));
    }
   

    function create_job(){
      $categories=  Category::get();
        return view('admin.job.create-job', compact('categories'));
    }

    public function CreateJob(Request $request, $id){
        $request->validate([
            'title'=>['required','string','max:255'],
            'description'=>['required','string'],
            'company_name'=>['required','string','max:255'],
            'location'=>['required','string'],
            'sallery'=>['required','numeric'],
            'job_type'=>['required'],
            'application_deadline'=>['required'],
        ]);
        JobModel::create([
            'title'=>$request->title,
            'user_id'=>$id,
            'category_id'=>$request->category_name,
            'description'=>$request->description,
            'company_name'=>$request->company_name,
            'location'=>$request->location,
            'salary'=>$request->sallery,
            'job_type'=>$request->job_type,
            'application_deadline'=>$request->application_deadline,
        ]);
        return redirect()->route('admin.job_list')->with('success','Job Created Successfully');
    }

    function editJob($id){
        $job=JobModel::findOrFail($id);
        return view('admin.job.edit-job',compact('job'));
    }
    public function edit_Job(Request $request, $id){
        $request->validate([
            'title'=>['required','string','max:255'],
            'description'=>['required','string'],
            'company_name'=>['required','string','max:255'],
            'location'=>['required','string'],
            'sallery'=>['required','numeric'],
            'job_type'=>['required'],
            'application_deadline'=>['required'],
        ]);
        JobModel::findOrFail($id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'company_name'=>$request->company_name,
            'location'=>$request->location,
            'salary'=>$request->sallery,
            'job_type'=>$request->job_type,
            'application_deadline'=>$request->application_deadline,
        ]);
        return redirect()->route('admin.job_list')->with('success','Job Updated Successfully');
    }
    public function delete($id){
        JobModel::findOrFail($id)->delete();
        return redirect()->route('admin.job_list')->with('error','Job Deleted Successfully');
    }
}
