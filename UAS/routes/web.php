<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserVoteController;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\VotingDetailController;
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
            Route::get("/student", [StudentController::class, "index"])->name("student.index");
            Route::get("/student/voting-history", [StudentController::class, "history"]);
            Route::get("/user_vote/{voting}/{voting_detail}", [UserVoteController::class, "vote"]);
        });
        
        Route::middleware("admin")->group(function(){
            Route::resource("admin", AdminController::class)->except("show");
            Route::get("/admin/user", [AdminController::class, "user"])->name("admin.user");
            Route::resource("admin/categorie", CategorieController::class);
        });

        Route::middleware("staff")->group(function(){
            Route::get("/staff", [StaffController::class, "index"])->name("staff.index");
            Route::resource("staff/voting", VotingController::class);
            Route::get("/staff/voting/open/{voting}", [VotingController::class, "open"])->name("voting.open");
            Route::get("/staff/voting/print/{voting}", [VotingController::class, "printPDF"])->name("voting.print");
            Route::get("/staff/voting/close/{voting}", [VotingController::class, "close"])->name("voting.close");
            Route::get("staff/voting/voting_detail/{voting}", [VotingDetailController::class, "index"])->name("voting_detail.index");
            Route::get("staff/voting/voting_detail/create/{voting}", [VotingDetailController::class, "create"])->name("voting_detail.create");
            Route::resource("staff/voting/voting_detail", VotingDetailController::class)->except("index", "create", "show");
        });
    
        Route::post("/logout", LogoutController::class)->name("logout");
    });
});
