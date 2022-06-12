<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        if(Auth::check()){
            return redirect()->back();
        }
    }
    
    public function index()
    {
        if(Auth::check()){
            return redirect()->back();
        }
        return view("auth.login");
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            if(auth()->user()->role === "admin"){
                return redirect()->intended("/admin");
            }else if(auth()->user()->role === "staff"){
                return redirect()->intended("/staff");
            }else{
                return redirect()->intended("/student");
            }

        }
        return back()->with([
            "error" => "The provided credentials do not match our records." 
        ]);
    }
}
