<?php

namespace App\Http\Controllers;

use App\Models\Superheroes;
use App\Models\Universe;
use Illuminate\Http\Request;

class SuperheroesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheroes = Superheroes::all();

        return view ('superheroes.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superheroes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Superheroes::create([
            'name' => $request -> name,
            'real_name' => $request -> real_name,
            'gender' => $request -> gender,
            'universe_id' => $request -> universe_id
        ]);

        return redirect() -> route('superheroes.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
