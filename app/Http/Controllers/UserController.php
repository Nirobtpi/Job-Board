<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(){
         if(Auth::check()){
            return view('dashboard.dashboard');
        }
        return view('admin.auth.login');
    }
    function register(){
        return view('admin.auth.register');
    }

    function userRegister(Request $request){
        // return $request->all();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email'=>['required','unique:users,email'],
            'password'=>['required','min:6','confirmed'],
            'user'=>['required'],
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'is_admin'=>$request->user,
            'password'=>Hash::make($request->password),
        ]);

        return redirect()->route('login');

    }

    function userLogin(Request $request){
        $request->validate([
            'email'=>['required'],
            'password'=>['required'],
        ]);

        if(Auth::attempt(['email'=>$request->email,'password' =>$request->password])){
            if(Auth::user()->is_admin == 'employer'){
                return redirect()->route('admin.dashboard');
            }else{
                return 'Ok';
            }
        }else{
            return back()->with('error','Please Enter A valid Email Or Password!');
        }
        
    }

    function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
