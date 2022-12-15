<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function ingredients()
    {
        return $this->belongsToMany(Ingredients::class, 'recettes_ingredients', 'id_recette', 'id_ingredient')->withPivot('quantite', 'type');
    }

    public function ustensiles()
    {
        return $this->belongsToMany(Ustensiles::class, 'recettes_ustensiles', 'id_recette', 'id_ustensile');
    }

}
