<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Voting;
use App\Models\VotingDetail;
use Symfony\Component\HttpFoundation\Response;

class VotingDetailController extends Controller
{
    public function index($id){
        $voting = Voting::whereId($id)->first();
        $votingDetails = VotingDetail::where("voting_id", $id)->get();
        $response = [
            "message" => "Data Voting Detail",
            "data" => [
                "voting" => $voting,
                "votingDetails" => $votingDetails
            ]
        ];
        return response()->json($response, Response::HTTP_OK);
    }
}
