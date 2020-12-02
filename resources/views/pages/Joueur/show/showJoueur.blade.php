@extends('templateJoueur')

@section('content')
    
    <h1 class="titre mb-5">Infos Joueur</h1>

    <div class="row d-flex show">
        
        <div class="col-6 text-white">
            <p class="texte-show">Nom: {{$profil->nom}}</p>
            <p class="texte-show">Prenom: {{$profil->prenom}}</p>
            <p class="texte-show">Age: {{$profil->age}}</p>
            <p class="texte-show">Genre: {{$profil->genre}}</p>
            <p class="texte-show">Pays d'origine: {{$profil->origin}}</p>
            <p class="texte-show">Numero de telephone: {{$profil->numeros}}</p>
            <p class="texte-show">Equipe du joueur: {{$profil->equipe->equipe}}</p>
            <p class="texte-show">Poste du joueur: {{$profil->poste->poste}}</p>

        </div>
    
        <div class="col-6">
            <div class="carte-show" style="background-image: url('{{asset('img/carte.png')}}')">
                <img class="contact-show" src="{{asset('images/' . $profil->photo)}}" alt="">
            </div>
        </div>  

    </div>

@endsection