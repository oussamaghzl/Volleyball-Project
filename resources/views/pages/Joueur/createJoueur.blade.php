@extends('templateJoueur')

@section('content')
    
    <h1 class="titre mb-5">Formulaire</h1>



      <form action="/create-joueur" enctype="multipart/form-data" class="bg-white container pt-2 pb-5 px-4 border border-dark rounded" method="post">
          @csrf

          @if (session('status'))
           <div class="alert alert-danger">
            {{ session('status') }}
          </div>
          @endif
          
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          
          <h1 class="titre2 text-dark">S'inscrire</h1>

          <div class="container mt-5">
          <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="inputCity">Nom</label>
                  <input type="text" value="{{old('nom')}}" class="form-control" id="inputCity" name="nom">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCity">Prenom</label>
                  <input type="text" value="{{old('prenom')}}" class="form-control" id="inputCity" name="prenom">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCity">Age</label>
                  <input type="number" value="{{old('age')}}" class="form-control" id="inputCity" name="age">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCity">Pays d'origine</label>
                  <input type="text" value="{{old('origin')}}" class="form-control" id="inputCity" name="origin">
                </div>
              <div class="form-group col-md-6">
                  <label for="inputCity">Numero de telephone</label>
                  <input type="text" value="{{old('numeros')}}" class="form-control" id="inputCity" name="numeros">
                </div>
                <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" value="{{old('email')}}" class="form-control" id="inputEmail4" name="email">
          </div>  
            
          <div class="form-row">
              <div class="form-group mx-3">
                <label for="inputState">Genre</label>
                <select id="inputState" value="{{old('genre')}}" class="form-control" name="genre">
                  <option selected>Homme</option>
                  <option>Femme</option>
                  <option>Autres</option>
                </select>
              </div>
              
              <div class="form-group mx-3">
                <label for="inputState">Choisissez votre equipe </label>
                <select id="inputState" class="form-control" value="{{old('equipes_id')}}" name="equipes_id">
                  <option selected active>Choix equipe</option>
                    @foreach ($equipes as $item)
                      <option value="{{$item->id}}">{{$item->equipe}}</option>
                    @endforeach
                </select>
              </div>

              <div class="form-group mx-3">
                <label for="inputState">Poste</label>
                <select id="inputState" class="form-control" value="{{old('poste_id')}}" name="poste_id">
                  <option selected active>choix postes</option>

                  @foreach ($postes as $item)
                    <option value="{{$item->id}}">{{$item->poste}}</option>

                  @endforeach
                </select>
              </div>

              <div class="form-group mx-5 pt-4">
                <label for="imagee">Votre photo</label>
                <input type="file" name="photo" id="imagee">
              </div>
            </div>
      </div>
      
      <button type="submit" class="btn btn-primary">S'inscrire</button>

        </form>

@endsection