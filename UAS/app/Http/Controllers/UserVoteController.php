<?php

namespace App\Http\Controllers;

use App\Models\UserVote;
use App\Models\Voting;
use App\Models\VotingDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserVoteController extends Controller
{
   public function vote(Voting $voting, VotingDetail $votingDetail)
   {
        UserVote::create([
            "voting_date" => Carbon::now(),
            "user_id" => auth()->user()->id,
            "voting_id" => $voting->id,
            "voting_detail_id" => $votingDetail->id,
            "title" => $voting->title,
            "header" => $votingDetail->header
        ]);

        return redirect()->route("student.index")->with([
            "success" => "Terima Kasih Sudah Voting",
            "data" => "Student"
        ]);
   }
}
