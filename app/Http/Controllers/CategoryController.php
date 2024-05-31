<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function category(){
        return view('admin.category.index');
    }

    function category_list(){
       $categories= Category::all();
       return view('admin.category.category-list', compact('categories'));
    }

    function createCategory(Request $request){
        $request->validate([
            'category_name'=>['required','string']
        ]);
        Category::create([
            'name'=>$request->category_name,
        ]);
        return back()->with('success','Category Create Successfully');
    }
}
