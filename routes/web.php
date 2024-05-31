<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin', function () {
    return view('dashboard.dashboard');
});

Route::prefix('admin')->group(function(){
    Route::get('/login',[UserController::class,'login'])->name('login');
    Route::post('/login',[UserController::class,'userLogin'])->name('user.user_login');
    Route::get('/register',[UserController::class,'register'])->name('user.register');
    Route::post('/register',[UserController::class,'userRegister'])->name('user.user_register');

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
