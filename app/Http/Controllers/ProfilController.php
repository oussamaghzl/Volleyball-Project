<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Pays;
use App\Models\Poste;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{

    public function index()
    {
        $profil =  Profil::all();
        $equipes = Equipe::all();
        $postes =  Poste::all();
        $counter = 0;
        return view('pages.Joueur.equipeJoueur', compact('counter','profil','equipes','postes'));
    }

    public function index2()
    {

        $profil =  Profil::all();
        $equipes = Equipe::all();
        $postes =  Poste::all();
        return view('pages.Joueur.listeJoueur', compact('profil','equipes','postes'));
    }
    public function index3()
    {
        $profil =  Profil::all();
        $equipes = Equipe::all();
        $postes =  Poste::all();
        $counter = 0;
        return view('pages.Coach.listeJoueurCoach', compact('counter','profil','equipes','postes'));
    }
    public function create()
    {
        $pays = Pays::all();
        $equipes = Equipe::all();
        $postes = Poste::all();
        return view('pages.Joueur.createJoueur', compact('pays','equipes','postes'));
    
    }

    public function store(Request $request)
    {

        $validateForm = $request->validate([
            "nom" => "string|required",
            "prenom" => "string|required",
            "age" => "integer|required",
            "numeros" => "string|required",
            "email" => "required",
            "genre" => "required",
            "photo" => "required",
            "equipes_id" => "required",
            "poste_id" => "required",
        ]);

        $profil=new Profil;

        $profil->nom=$request->nom;
        $profil->prenom=$request->prenom;
        $profil->age=$request->age;
        $profil->numeros=$request->numeros;
        $profil->email=$request->email;
        $profil->genre=$request->genre;
        $profil->origin=$request->origin;
        $profil->photo=$request->file('photo')->hashName();
        $profil->equipes_id=$request->equipes_id;
        $profil->poste_id=$request->poste_id;
        
        if($request->equipes_id==$profil->equipes_id && $profil->equipe->membres<$profil->equipe->nombres){
            
        $profil->equipe->increment("membres", 1);
        $profil->save();
        $request->file('photo')->storePublicly('images','public');

        return redirect()->back();

        }else{

            return redirect()->back()->with('status', "L'équipe est au complet!")->withInput();
        }
       

    }


    public function show($id)
    {
        $profil =  Profil::find($id);
        $equipes = Equipe::all();
        $postes =  Poste::all();

        return view('pages.Joueur.show.showJoueur', compact('profil','equipes','postes'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profil =  Profil::find($id);
        $equipes = Equipe::all();
        $postes =  Poste::all();

        return view('pages.Joueur.editJoueur', compact('profil','equipes','postes'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateForm = $request->validate([
            "nom" => "required",
            "prenom" => "required",
            "age" => "required",
            "numeros" => "required",
            "email" => "required",
            "genre" => "required",
            "photo" => "required",
            "equipes_id" => "required",
            "poste_id" => "required",
        ]);

        $profil= Profil::find($id);

        $profil->nom=$request->nom;
        $profil->prenom=$request->prenom;
        $profil->age=$request->age;
        $profil->numeros=$request->numeros;
        $profil->email=$request->email;
        $profil->genre=$request->genre;
        $profil->origin=$request->origin;
        $profil->photo=$request->file('photo')->hashName();
        $profil->equipes_id=$request->equipes_id;
        $profil->poste_id=$request->poste_id;

        $profil->save();

        Storage::disk('public')->delete('images/' . $profil->photo);

        $request->file('photo')->storePublicly('images','public');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Profil = Profil::find($id);
        $Profil->equipe->decrement("membres", 1);
        $Profil->delete();
        
        Storage::disk('public')->delete('images/' . $Profil->photo);

        return redirect()->back();
    }
}
