<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
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
        $jobs=JobModel::with('category')->get();
    //   foreach($jobs as $job ){
    //  return $articles_category = JobModel::where('category_id',$job->category_id)->withCount('category')->count();

    //   }
        $app=Application::get();
        return view('frontend.index',compact('totalJob','categories','jobs','categories'));
    }

    function singleJob($id,$name){
        $categories=Category::all();
        $job=JobModel::findOrFail($id);
        return view('frontend.job.single', compact('job','categories'));
    }

    function userAccount(){
        // $user=User::where('is_admin','job_seeker')->where('id',Auth::user()->id)->get();
        return view('frontend.account');
    }

    public function search(Request $request)
    {
        $title = $request->input('title');
        $location = $request->input('location');
        $category = $request->input('category');

        $query = JobModel::query();

        if ($title) {
            $query->where('title', 'LIKE', "%{$title}%");
        }

        if ($location) {
            $query->where('location', 'LIKE', "%{$location}%");
        }

        if ($category) {
            $query->where('category_id','LIKE', "%{$category}%");
        }

        $alljob = $query->get();

        return view('frontend.search', compact('alljob'));
    }
    
}
