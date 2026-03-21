<?php

namespace App\Http\Controllers;

use App\Models\Superheroes;
use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universes = Universe::all();

        return view('universes.index', compact('universes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('universes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);

        Universe::create([
            'name' => $request -> name,
            'company' => $request -> company,
            'age' => $request -> age 
        ]);

        return redirect() -> route('universes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $universes = Universe::findOrFail($id);
        return view('universes.show', compact('universes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $universe = Universe::findOrFail($id);
        return view('universes.edit', compact('universe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $universe = Universe::findOrFail($id);
        $universe -> update([
            'name' => $request -> name,
            'company' => $request -> company,
            'age' => $request -> age 
        ]);

        return redirect() -> route('universes.show', $universe -> id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $universe = Universe::findOrFail($id);

        $superheroes = Superheroes::where('universe_id', $universe -> id) -> delete();

        $universe -> delete();

        return redirect() -> route('universes.index');
    }
}
