<?php

namespace App\Http\Controllers;

use App\Models\Voting;
use App\Models\VotingDetail;
use Illuminate\Http\Request;
use Throwable;

class VotingDetailController extends Controller
{
    private string $data_table = "Candidate";

    public function index(Voting $voting)
    {
        $voting_details = VotingDetail::where("voting_id", $voting->id)->get();
        return view("staff.voting_detail.index", compact("voting", "voting_details"));
    }

    public function create(Voting $voting)
    {
        if($voting->voting_status == "prepare"){
            return view("staff.voting_detail.create", ["voting_id" => $voting->id]);
        }

        return redirect()->route("voting_detail.index", $voting->voting_id)->with([
            "erorr" => "Tidak bisa ditambah",
            "data" => $this->data_table
        ]);
    }

    public function store(Request $request)
    {
        
        $request->validate(["header" => ["required"]]);
        
        try{
            VotingDetail::create([
                "header" => $request->header,
                "voting_details_description" => $request->voting_details_description,
                "voting_id" => $request->voting_id
            ]);
            return redirect()->route("voting_detail.index", $request->voting_id)->with([
                "success" => "Berhasil di Tambah",
                "data" => $this->data_table
            ]);
        }catch(Throwable $e){
            return redirect()->route("voting_detail.index", $request->voting_id)->with([
                "error"=> "Gagal di tambah",
                "data" => $this->data_table
            ]);

        }
        
    }

    public function edit(VotingDetail $votingDetail)
    {
        if(Voting::whereId($votingDetail->voting_id)->voting_status == "prepare"){
            return view("staff.voting_detail.edit", compact("votingDetail"));
        }

        return redirect()->route("voting_detail.index", $votingDetail->voting_id)->with([
            "erorr" => "Tidak bisa di edit",
            "data" => $this->data_table
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VotingDetail  $votingDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VotingDetail $votingDetail)
    {
        $request->validate(["header" => ["required"]]);

        $votingDetail->update([
            "header" => $request->header,
            "voting_details_description" => $request->voting_details_description
        ]);
        
        return redirect()->route("voting_detail.index", $votingDetail->voting_id)->with([
            "success" => "Berhasil di Update",
            "data" => $this->data_table
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VotingDetail  $votingDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(VotingDetail $votingDetail)
    {
        try{
            if(in_array(Voting::whereId($votingDetail->voting_id)->first()->voting_status, ["open", "close"])){
                return redirect()->route("voting_detail.index", $votingDetail->voting_id)->with([
                    "error"=> "Gagal di hapus",
                    "data" => $this->data_table
                ]);
            }
            
            $votingDetail->delete();
        }catch(Throwable $e){
            return redirect()->route("voting_detail.index", $votingDetail->voting_id)->with([
                "error"=> "Gagal di hapus",
                "data" => $this->data_table
            ]);
        }

        return redirect()->route("voting_detail.index", $votingDetail->voting_id)->with([
            "success"=> "Berhasil di hapus",
            "data" => $this->data_table
        ]);
    }
}
