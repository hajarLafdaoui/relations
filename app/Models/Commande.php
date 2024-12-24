<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function plats()
    {
        return $this->belongsToMany(Plat::class, 'commande_plats')
        ->withPivot('nombre');
    }
        public function serveur()
{
    return $this->belongsTo(Serveur::class, 'serveur_id');
}

}
