<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CategorieController;

Route::get('/plats/{id}', [CategorieController::class, 'showPlats']);
Route::get('/categoryTitle/{platId}', [PlatController::class, 'getTitle']);
Route::get('/composition/{platId}', [PlatController::class, 'getComposition']);
Route::get('/getCommandesEnCours/{serveurId}', [CommandeController::class, 'getCommandesEnCours']);
Route::get('/platsByCommande/{serveurId}', [CommandeController::class, 'getPlatsByCommande']);
Route::get('/platsToPrepare', [CommandeController::class, 'getPlatsToPrepare']);
Route::get('/serviNotPaidCommandes', [CommandeController::class, 'getServiNotPaidCommandes']);
Route::get('/commandesWithMoreThan5Plats', [CommandeController::class, 'getCommandesWithMoreThan5Plats']);
Route::get('/totalAmount/{commandeId}', [CommandeController::class, 'getTotalAmount']);
Route::get('/commandesFromYesterday/{serveurId}', [CommandeController::class, 'getCommandesFromYesterday']);
