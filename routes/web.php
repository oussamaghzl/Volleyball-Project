<?php

use App\Http\Controllers\PaysController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\PosteController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});



Route::get('/inscription-joueur', [ProfilController::class, 'create']);

Route::get('/liste-equipe-joueur', [ProfilController::class, 'index']);
Route::get('/liste-joueur', [ProfilController::class, 'index2']);
Route::get('/liste-equipe-coach', [ProfilController::class, 'index3']);


Route::get('/show-joueur/{id}', [ProfilController::class, 'show']);
Route::get('/edit-joueur/{id}', [ProfilController::class, 'edit']);


Route::get('/show-equipe/{id}', [EquipeController::class, 'show']);



Route::post('/create-joueur', [ProfilController::class, 'store']);
Route::post('/modifier-joueur/{id}', [ProfilController::class, 'update']);
Route::post('/supprimer-joueur/{id}', [ProfilController::class, 'destroy']);






// Coach

Route::get('/equipe-coach', [PaysController::class, 'index']);

Route::get('/listeJoueurCoach',[ProfilController::class,'index']);

Route::get('/dashboard-coach', [PosteController::class, "index2"]);

Route::get('/contact-coach', function () {
    return view('pages.Coach.contactCoach');
});

Route::post('/profil-coach',[ProfilController::class, 'store']);

Route::post('/store-equipe',[PaysController::class, 'store']);

//Joueur

Route::get('/liste-joueur-joueur', function () {
    return view('pages.Joueur.listeJoueur');
});
Route::get('/dashboard-joueur', [PosteController::class, "index"]);

Route::get('/contact-joueur', function () {
    return view('pages.Joueur.contactJoueur');
});

//accueil

Route::get('/coach',function () {
    return view('pages.Coach.accueilCoach');
});

Route::get('/joueur',function () {
    return view('pages.Joueur.accueilJoueur');
});

