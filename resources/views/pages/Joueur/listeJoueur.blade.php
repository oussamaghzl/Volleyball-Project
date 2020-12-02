@extends('templateJoueur')

@section('content')
    
    <h1 class="titre">Liste des Joueurs</h1>

   
    <table class="table table-dark container text-center px-4 my-5">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">carte</th>
            <th scope="col">Prenom</th>
            <th scope="col">equipes</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody >
            @foreach ($profil as $item)
                <tr style="height: 120px">
                    <th scope="row">{{$item->id}}</th>

                    <td>
                        <div class="carte" style="background-image: url('{{asset('img/carte.png')}}')">
                            <img class="contact" src="{{asset('images/' . $item->photo)}}" alt="">
                        </div>
                    </td>

                    <td>{{$item->prenom}}</td>

                    <td>{{$item->equipe->equipe}}</td>

                    <td>
                        <div class="row d-flex justify-content-center">
                            <a href="/show-joueur/{{$item->id}}">
                                <button class="btn btn-primary ">Infos</button>
                            </a>
                            <a href="/edit-joueur/{{$item->id}}">
                                <button class="btn btn-success mx-4">Edit</button>
                            </a>
                            <form action="/supprimer-joueur/{{$item->id}}" method="post">
                                @csrf
                                <button class="btn btn-danger ">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
      </table>
@endsection