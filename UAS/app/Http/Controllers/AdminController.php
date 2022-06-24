<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Throwable;

class AdminController extends Controller
{
    private string $data_table = "User";

    public function index()
    { 
        $totalUser = User::count();
        $totalAdmin = User::whereRole("admin")->count();
        $totalStaff = User::whereRole("staff")->count();
        $totalStudent = User::whereRole("student")->count();
        return view("admin.dashboard", compact("totalUser", "totalAdmin", "totalStaff", "totalStudent"));
    }
    
    public function user()
    {
        $users = User::all();
        return view("admin.user.index", compact("users"));
    }

    public function create(){
        return view("admin.user.create");
    }

    public function store(UserRequest $request){
        $request->password = Hash::make($request->password);
        User::create([
            "username" => $request->username,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role" => $request->role
        ]);

        return redirect()->route("admin.user")->with([
            "success" => "Berhasil di tambahkan",
            "data" => $this->data_table
        ]);
    }
    
    public function edit($id){
        
        $user = User::find($id);
        return view("admin.user.edit", compact("user"));
    }

    public function update(Request $request, $id){
        User::find($id)->update([
            "username" => $request->username,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role" => $request->role
        ]);
        return redirect()->route("admin.user")->with([
            "success" => "Berhasil di Update",
            "data" => $this->data_table
        ]);
    }
    
    public function destroy($id){
        try{
            User::find($id)->delete();
        }catch(Throwable $e){
            return redirect()->route("admin.user")->with([
                "error" => "Gagal di Delete",
                "data" => $this->data_table
            ]);
        }
        return redirect()->route("admin.user")->with([
            "success" => "Berhasil di Delete",
            "data" => $this->data_table
        ]);
    }
}
