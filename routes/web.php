<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Superheroes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

Route::get('/create', function() {
    $universe = Universe::create([
        'name' => 'DC Universe',
        'age' => 'Modern',
        'company' => 'DC'
    ]);

    $superhero = Superheroes::create([
        'name' => 'Spider-Man',
        'real_name' => 'Peter Parker',
        'gender' => 'male',
        'universe_id' => 1
    ]);

    return response() -> json([
        'superhero' => $superhero
    ]);
});

Route::get('/', function() {
    $superheroes = Superheroes::all();

    return response() -> json([
        'superheroes' => $superheroes
    ]);
});

Route::get('/update', function() {
    $superhero = Superheroes::find(1);
    $superhero -> name = 'Batman';
    $superhero -> real_name = 'Bruce Wayne';
    $superhero -> gender = 'male';
    $superhero -> universe_id = 1;
    $superhero -> save();

    return response() -> json([
        'superhero' => $superhero
    ]);
});