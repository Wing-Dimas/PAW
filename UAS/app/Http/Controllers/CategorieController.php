<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Throwable;

class CategorieController extends Controller
{
    private string $data_table = "Categorie";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return view("admin.categorie.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.categorie.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name_categorie"=> ["required", "unique:categories,name_categorie"]
        ]);
        
        // dd($request->all());
        Categorie::create($request->all());

        return redirect()->route("categorie.index")->with([
            "success" => "Berhasil di Tambah",
            "data" => $this->data_table
        ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("admin.categorie.edit", ["categorie" => Categorie::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        $request->validate([
            "name_categorie"=> ["required", "unique:categories,name_categorie"]
        ]);

        $categorie->update([
            "name_categorie" => $request->name_categorie
        ]);

        return redirect()->route("categorie.index")->with([
            "success" => "Berhasil di Update",
            "data" => $this->data_table
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(categorie $categorie)
    {
        try{
            $categorie->delete();
        }catch(Throwable $e){
            return redirect()->route("categorie.index")->with([
                "error"=> "Gagal di hapus",
                "data" => $this->data_table
            ]);
        }

        return redirect()->route("categorie.index")->with([
            "success"=> "Berhasil di hapus",
            "data" => $this->data_table
        ]);
    }
}
