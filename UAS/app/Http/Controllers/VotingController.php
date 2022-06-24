<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Voting;
use App\Models\VotingDetail;
use Illuminate\Http\Request;
use Throwable;

class VotingController extends Controller
{
    private $data_table = "Voting";

    public function index()
    {
        $votings = Voting::join("categories", "votings.categorie_id" , "=", "categories.id")
                ->select("votings.*","categories.id AS categorie_id", "name_categorie")
                ->get();
        return view("staff.voting.index", compact("votings"));
    }

    public function create()
    {
        $categories = Categorie::all();
        return view("staff.voting.create", compact("categories"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "title" => ["required"],
            "categorie_id" => ["required"]
        ]);

      
        try{
            $created_by = auth()->user()->username;
            $status = "prepare";

            Voting::create([
                "title" => $request->title,
                "voting_description" => $request->voting_description,
                "created_by" => $created_by,
                "voting_status" => $status,
                "categorie_id" => $request->categorie_id
            ]);

            return redirect()->route("voting.index")->with([
                "success" => "Berhasil di Tambah",
                "data" => $this->data_table
            ]);
        }catch(Throwable $e){
            return redirect()->route("voting.index")->with([
                "error"=> "Gagal di tambah",
                "data" => $this->data_table
            ]);

        }
    }

    public function show(Voting $voting)
    {
        return redirect()->route("voting_detail.index", $voting->id);
    }

    public function edit(Voting $voting)
    {
        if(in_array($voting->voting_status, ["open", "close"])){
            return redirect()->route("voting_detail.index", $voting->id)->with([
                "error"=> "Sudah tidak bisa melakukan update data",
                "data" => $this->data_table
            ]);
        }
        $categories = Categorie::all();
        return view("staff.voting.edit", compact("voting","categories"));
    }

    public function update(Request $request, Voting $voting)
    {
        $request->validate([
            "title" => ["required"],
            "categorie_id" => ["required"]
        ]);

      
        try{
            $voting->update([
                "title" => $request->title,
                "voting_description" => $request->voting_description,
                "categorie_id" => $request->categorie_id
            ]);

            return redirect()->route("voting_detail.index", $voting->id)->with([
                "success" => "Berhasil di Update",
                "data" => $this->data_table
            ]);
        }catch(Throwable $e){
            return redirect()->route("voting_detail.index", $voting->id)->with([
                "error"=> "Gagal di Update",
                "data" => $this->data_table
            ]);
        }
    }

    public function destroy(Voting $voting)
    {
        try{
            // VotingDetail::where("voting_id", $voting->id)->delete();
            $voting->delete();
        }catch(Throwable $e){
            return redirect()->route("voting_detail.index", $voting->id)->with([
                "error"=> "Gagal di hapus",
                "data" => $this->data_table
            ]);
        }

        return redirect()->route("voting.index")->with([
            "success"=> "Berhasil di hapus",
            "data" => $this->data_table
        ]);
    }

    public function close(Voting $voting)
    {
        if($voting->voting_status == "open"){
            $voting->update(["voting_status" => "close"]);
            return redirect()->route("voting_detail.index", $voting->id)->with([
                "success"=> "Voting Berhasil di Tutup",
                "data" => $this->data_table
            ]);
        }

        return redirect()->route("voting_detail.index", $voting->id)->with([
            "error"=> "Input salah",
            "data" => "Error"
        ]);
    }

    public function open(Voting $voting)
    {
        if(VotingDetail::where("voting_id", $voting->id)->count() < 2){
            return redirect()->route("voting_detail.index", $voting->id)->with([
                "error"=> "Voting harus memiliki kandidat minimal 2 atau lebih!",
                "data" => $this->data_table
            ]);
        }
        if($voting->voting_status == "prepare"){
            $voting->update(["voting_status" => "open"]);
            return redirect()->route("voting_detail.index", $voting->id)->with([
                "success"=> "Voting berhasil di Buka",
                "data" => $this->data_table
            ]);
        }else if($voting->voting_status == "open"){
            return redirect()->route("voting_detail.index", $voting->id)->with([
                "error"=> "Sudah Dalam Kondisi Terbuka",
                "data" => $this->data_table
            ]);
        }else{
            return redirect()->route("voting_detail.index", $voting->id)->with([
                "error"=> "Voting Sudah di Tutup",
                "data" => $this->data_table
            ]);
        }
    }

    public function printPDF(Voting $voting){
        $votingDetails = VotingDetail::where("voting_id", $voting->id)->get();
        $totalVoting = $votingDetails->sum("voted");
        return view("staff.print", compact("voting", "votingDetails", "totalVoting"));
    }
}
