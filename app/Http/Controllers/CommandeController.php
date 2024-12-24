<?php

namespace App\Http\Controllers;

use App\Models\Serveur;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CommandeController extends Controller
{
    // 4. Les commandes « en cours » d’un serveur donné ($serveur) ;
    public function getCommandesEnCours($serveurId)
    {
        $serveur = Serveur::find($serveurId);
        $commandesEnCours = $serveur->commandes()->where('etat', 'en cours')->get();
        return view('commandesEnCours', compact('serveur', 'commandesEnCours'));
    }

    // 5. Les plats d’une commande donnée ($commande) ;
    public function getPlatsByCommande($commandeId)
    {
        $commande = Commande::find($commandeId);
        $plats = $commande->plats;
        return view('platsCommand', compact('commande', 'plats'));
    }

    // 6. Les plats à préparer pour toutes les commandes « en cours » ;
    public function getPlatsToPrepare()
    {
        $commandesEnCours = Commande::where('etat', 'en cours')->get();
        $platsToPrepare = [];
        foreach ($commandesEnCours as $commande) {
            foreach ($commande->plats as $plat) {
                $platsToPrepare[] = $plat;
            }
        }
        return view('platsToPrepare', compact('platsToPrepare'));
    }

    // 7. Les commandes en état « servi » et non payées ;

    public function getServiNotPaidCommandes()
    {
        $commandes = Commande::where('etat', 'servi')
                            ->where('payé', false)
                            ->get();

        return view('serviNotPaidCommandes', compact('commandes'));
    }
    // 8. Les commandes où on a demandé plus de 5 plats différents ;
    public function getCommandesWithMoreThan5Plats()
    {
        $commandes = Commande::has('plats', '>', 5)->get();

        return view('commandesMoreThan5Plats', compact('commandes'));
    }
// 9. Le montant total à payer pour une commande donnée ($commande)
public function getTotalAmount($commandeId)
{
    $commande = Commande::find($commandeId);
    $totalAmount = $commande->plats->sum(function ($plat) {
        return ($plat->pivot->nombre ?? 0) * ($plat->price ?? 0);
    });
    return view('totalAmount', compact('commande', 'totalAmount'));
}

// 10. Le nombre total des commandes qui ont été affectées hier à un serveur donné ($serveur)
public function getCommandesFromYesterday($serveurId)
{
    $serveur = Serveur::find($serveurId);
    $yesterday = Carbon::yesterday();
    $totalCommandes = $serveur->commandes()
        ->whereDate('created_at', $yesterday)
        ->count();

    return view('commandesYesterday', compact('serveur', 'totalCommandes', 'yesterday'));
}

}
