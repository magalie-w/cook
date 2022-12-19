<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ustensiles extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function recettes()
    {
        return $this->belongsToMany(Recette::class, 'recettes_ustensiles', 'id_recettes', 'id_ustensiles');
    }
}
