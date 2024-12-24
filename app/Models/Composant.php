<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Composant extends Model
{
    public function plats()
{
    return $this->belongsToMany(Plat::class, 'composant_plats')
                ->withPivot('quantite', 'unité');
}

}
