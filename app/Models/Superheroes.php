<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Superheroes extends Model
{
    protected $fillable = [
        'name',
        'real_name',
        'gender',
        'universe_id'
    ];

    public function Universe(): BelongsTo
    {
        return $this->belongsTo(Universe::class);
    }
}