<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return response()->json($user);
    }

    public function getClients()
    {
        // $user = User::all();
        $clients = User::where('role', 'client')->get();
        // return response()->json($clients);
        return view('client.index')->with('clients', $clients);
    }

    public function getUtilisateurs()
    {
        // $user = User::all();
        $clients = User::where('role', 'utilisateur')->get();
        // return response()->json($clients);
        return view('client.index')->with('clients', $clients);
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
    public function storeClient(Request $request)
    {
        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = 'client';
        $user->profile_photo_path = $request->input('profile_photo_path');
        // $file=$request->input('profile_photo_path');
        // $path = $file->store('public/photos');

        $user->save();
        return redirect()->back()->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return response()->json($user);
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
        $user = User::find($id);

        $user->nom = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->email = $request->input('email');

        $user->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if($user){
            $user->delete();
            return response()->json(['message' => 'User supprimée avec succès']);
        }
        return response()->json(['message' => 'Impossible de trouver l User'], 404);
    }
}
