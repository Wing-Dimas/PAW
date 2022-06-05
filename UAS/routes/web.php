<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
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

Route::get("/", [LoginController::class, "index"]);

Route::get("/student", [StudentController::class, "index"]);
Route::get("/student/voting-history", [StudentController::class, "history"]);

Route::get("/admin", [AdminController::class, "index"]);
Route::get("/admin/user", [AdminController::class, "user"]);

Route::get("/staff", [StaffController::class, "index"]);
Route::get("/staff/voting", [StaffController::class, "voting"]);