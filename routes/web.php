<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroesController;
use App\Models\Universe;
use App\Models\Superheroes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

Route::get('/', function () {
    $superhero = Superheroes::where('gender', 'male') -> get();

    return response() -> json([
        'superhero' => $superhero
    ]);
});

Route::resource('universes', UniverseController::class);



Route::resource('superheroes', SuperheroesController::class);