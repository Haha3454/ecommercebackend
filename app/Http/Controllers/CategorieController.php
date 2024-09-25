<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $categories=categorie::all();
            return response()->json($categories);


        }catch(\Exception $e){
            return response()->json("impossible d'afficher la categorie");
        }
    
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {try{
        //code
        $categorie=new Categorie([
            "nomcategorie"=>$request->input("nomcategorie"),
            "imagecategorie"=>$request->input("imagecategorie"),

        ]);
        $categorie->save();
        return response()->json($categorie);
    }
    catch(\Exception $e) {
        return response()->json("Probleme d'ajout");
    }}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $categorie=Categorie::findOrfail($id);
        return response()->json($categorie);
        //
    }catch(\Exception $e){  
return response()->json("probleme d'affichage");}
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorie $categorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {try{
        $categorie=Categorie::findOrfail($id);
        $categorie->delete();   
        return response()->json("categorie supprimer");
        //
    }catch(\Exception $e){
        return response()->json("Suppression impossible");
    }
}}
