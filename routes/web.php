<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\UserController;
use App\Models\Application;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('admin', function () {
    return view('dashboard.dashboard');
});

Route::get('user/login',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'userLogin'])->name('user.user_login');
Route::get('user/register',[UserController::class,'register'])->name('user.register');
Route::post('/register',[UserController::class,'userRegister'])->name('user.user_register');

Route::prefix('admin')->group(function(){


    Route::group(['middleware'=>['auth']], function(){
        Route::get('dashboard',[AdminDashboardController::class,'adminDashboard'])->name('admin.dashboard');
        Route::get('logout',[UserController::class,'logout'])->name('logout');

        // category 
        Route::get('category',[CategoryController::class,'category'])->name('admin.category');
        Route::get('category-list',[CategoryController::class,'category_list'])->name('admin.category_list');
        Route::post('category',[CategoryController::class,'createCategory'])->name('admin.createCategory');

        // jobroute 
        Route::get('job-list',[EmployerController::class,'job_list'])->name('admin.job_list');
        Route::get('create-job',[EmployerController::class,'create_job'])->name('admin.create_job');
        Route::post('create-job/{id}',[EmployerController::class,'CreateJob'])->name('admin.createJob');
        // action route in job item 

        Route::get('edit-job/{id}',[EmployerController::class,'editJob'])->name('job.edit_url');
        Route::get('delete-job/{id}',[EmployerController::class,'delete'])->name('job.delete');
        Route::post('edit-job/{id}',[EmployerController::class,'edit_Job'])->name('job.edit');
    });
});

Route::get('/',[FrontEndController::class,'home'])->name('home');
Route::get('job/{id}/{name}',[FrontEndController::class,'singleJob'])->name('job');

 Route::group(['middleware'=>['auth']], function(){
        Route::get('/apply/{id}',[ApplicationController::class,'apply'])->name('apply');
        Route::post('/apply/{id}',[ApplicationController::class,'applyJob'])->name('applyJob');
        Route::get('/apply-list',[ApplicationController::class,'applyList'])->name('applyList');
        Route::get('/user/account',[FrontEndController::class,'userAccount'])->name('account');
        Route::get('user/logout',[UserController::class,'userlogout'])->name('user.logout');
 });
 Route::get('/app',[ApplicationController::class,'app']);
 Route::get('search',[FrontEndController::class,'search'])->name('search');
