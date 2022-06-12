<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(["middleware" => "revalidate"], function(){
    Route::get("/", [LoginController::class, "index"])->name("login.index");
    Route::post("/login", [LoginController::class, "store"])->name("login.store");

    Route::middleware("auth")->group(function(){

        Route::middleware("student")->group(function(){
            Route::get("/student", [StudentController::class, "index"]);
            Route::get("/student/voting-history", [StudentController::class, "history"]);
        });
        
        Route::middleware("admin")->group(function(){
            Route::get("/admin", [AdminController::class, "index"])->middleware("admin");
            Route::get("/admin/user", [AdminController::class, "user"]);
        });

        Route::middleware("staff")->group(function(){
            Route::get("/staff", [StaffController::class, "index"]);
            Route::get("/staff/voting", [StaffController::class, "voting"]);
        });
    
        Route::post("/logout", LogoutController::class)->name("logout");
    });
});
