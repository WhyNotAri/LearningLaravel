<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{

    protected $fillable = [
        'name',
        'company',
        'age'
    ];

    public function Superheroes(): HasMany
    {
        return $this->hasMany(Superheroes::class);
    }
}
