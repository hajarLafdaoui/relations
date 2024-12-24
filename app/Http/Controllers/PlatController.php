<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use Illuminate\Http\Request;

class PlatController extends Controller
{
    public function getTitle($platId)
    {
        $plat = Plat::find($platId);
        $titreCategorie = $plat->category->titre;

        return view('categoryTitle', compact('titreCategorie'));
    }


    public function getComposition($platId)
{
    $plat = Plat::find($platId);

    $compositions = $plat->composants;
    return view('composition', compact('plat', 'compositions'));
}

}
