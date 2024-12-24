<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serveur extends Model
{
    public function commandes()
    {
        return $this->hasMany(Commande::class, 'serveur_id');
    }
    }
