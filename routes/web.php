<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Superheroes;

Route::get('/', function () {
    dd(Universe::where('name', 'U2') ->get());
});

Route::get('/superheroes', function () {
    dd(Universe::where('name', 'Peter Parker') -> get());
});