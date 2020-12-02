<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Poste;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamHasard = Equipe::inRandomOrder()->limit(10)->get();
        $profil= Profil::all();


        $dataH= DB::table('profils')
        ->where('genre','Homme')
        ->select('nom')
        ->get();
        $teamHasardJ= DB::table('profils')
        ->where('equipes_id',1)
        ->inRandomOrder()
        ->limit(4)
        ->get();
        $teamHasardE= DB::table('profils')
        ->whereNotIn('equipes_id', [1])
        ->inRandomOrder()
        ->limit(4)
        ->get();
        $teamHasardNR= DB::table('equipes')
        ->where('membres', '!=','nombres')
        ->inRandomOrder()
        ->limit(2)
        ->get();
        $fille= DB::table('profils')
        ->where('genre','Femme')
        ->whereNotIn('equipes_id', [1])
        ->inRandomOrder()
        ->limit(5)
        ->get();
        $homme= DB::table('profils')
        ->where('genre','Homme')
        ->whereNotIn('equipes_id', [1])
        ->inRandomOrder()
        ->limit(5)
        ->get();
        $equipe= Equipe::all();


        return view('pages.Joueur.dashboardJoueur', compact('dataH','fille','homme','profil','equipe','teamHasardNR', 'teamHasardE','teamHasard', 'teamHasardJ'));
    }

    public function index2()
    {
        $teamHasard = Equipe::inRandomOrder()->limit(10)->get();
        $profil= Profil::all();


        $dataH= DB::table('profils')
        ->where('genre','Homme')
        ->select('nom')
        ->get();
        $teamHasardJ= DB::table('profils')
        ->where('equipes_id',1)
        ->inRandomOrder()
        ->limit(4)
        ->get();
        $teamHasardE= DB::table('profils')
        ->whereNotIn('equipes_id', [1])
        ->inRandomOrder()
        ->limit(4)
        ->get();
        $teamHasardNR= DB::table('equipes')
        ->where('membres', '!=','nombres')
        ->inRandomOrder()
        ->limit(2)
        ->get();
        $fille= DB::table('profils')
        ->where('genre','Femme')
        ->whereNotIn('equipes_id', [1])
        ->inRandomOrder()
        ->limit(5)
        ->get();
        $homme= DB::table('profils')
        ->where('genre','Homme')
        ->whereNotIn('equipes_id', [1])
        ->inRandomOrder()
        ->limit(5)
        ->get();
        $equipe= Equipe::all();


        return view('pages.Coach.dashboardCoach', compact('dataH','fille','homme','profil','equipe','teamHasardNR', 'teamHasardE','teamHasard', 'teamHasardJ'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function show(Poste $poste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function edit(Poste $poste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poste $poste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poste $poste)
    {
        //
    }
}
