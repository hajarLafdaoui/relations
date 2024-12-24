<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    public function commandes()
{
    return $this->belongsToMany(Commande::class, 'commande_plats')
                ->withPivot('nombre');

            }

    public function category()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
    public function composants()
{
    return $this->belongsToMany(Composant::class, 'composant_plats')
                ->withPivot('quantite', 'unité');
}

    }
