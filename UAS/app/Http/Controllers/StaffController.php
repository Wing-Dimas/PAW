<?php

namespace App\Http\Controllers;

use App\Models\Voting;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $total_voting = Voting::count();
        $total_prepare = Voting::where("voting_status","prepare")->count();
        $total_open = Voting::where("voting_status","open")->count();
        $total_close = Voting::where("voting_status","close")->count();
        return view("staff.dashboard", compact("total_voting", "total_prepare","total_open", "total_close"));
    }
}
