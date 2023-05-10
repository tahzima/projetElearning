<?php

namespace App\Http\Controllers;

use App\Models\Favori;
use Illuminate\Http\Request;

class FavorisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $favoris = Favori::all();
        return response()->json($favoris);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $favoris = new Favori();

        $favoris->nombreFavoris = $request->input('nombreFavoris');


        $favoris->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $favoris = Favori::find($id);
        return response()->json($favoris);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $favoris = Favori::find($id);

        $favoris->nombreFavoris = $request->input('nombreFavoris');

        $favoris->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $favoris = Favori::find($id);

        if($favoris){
            $favoris->delete();
            return response()->json(['message' => 'Favoris supprimée avec succès']);
        }
        return response()->json(['message' => 'Impossible de trouver Favoris'], 404);
    }
}
