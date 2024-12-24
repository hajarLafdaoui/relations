<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    // 1. Liste des plats d’une catégorie donnée ($categorie) ;
    public function showPlats($categorieId)
    {
        $categorie = Categorie::find($categorieId);
        $plats = $categorie->plats;
        return view('plats', compact('plats'));
    }}
