<?php

namespace App\Http\Controllers;

use App\Models\UserVote;
use App\Models\Voting;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $votings = Voting::join("categories", "votings.categorie_id" , "=", "categories.id")
                    ->select("votings.*","categories.id AS categorie_id", "name_categorie")
                    ->whereNotIn("votings.id", function($query){
                        $query->select("user_votes.voting_id")
                        ->from(with(new UserVote)->getTable())
                        ->where("user_votes.user_id", "=", auth()->user()->id);
                    }) 
                    ->where("voting_status", "open")
                    ->get();
        return view("student.home", compact("votings"));
    }

    public function history()
    {
        $user_votes = UserVote::where("user_id", auth()->user()->id)->get();
        return view("student.history", compact("user_votes"));
    }
}
