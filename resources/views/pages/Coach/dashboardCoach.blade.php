@extends('templateCoach')

@section('content')
    <div class="text-center">

        <h1 class="titre" style="font-size: 70px">Dashboard</h1>
    
        <div class=" text-white my-3">
            
            <h1 class="titre2"> Equipes remplies au hasard</h1>
    
            @foreach ($teamHasard as $item)
                @if ($item->nombres==$item->membres)       
                    <h5>{{$item->equipe}}</h5>      
                @endif    
            @endforeach
        </div>
        
        <div class="text-white my-3">
         
                <h1 class="titre2">4 joueurs sans equipes au hasard</h1>
        
                @foreach ($teamHasardJ as $elem)
                    <h5 class="text-center">{{$elem->nom}}</h5>
                @endforeach
      
        </div>
    
        <div class="text-white text-center">
         
            <h1 class="titre2">4 joueurs avec equipe au hasard</h1>
    
            @foreach ($teamHasardE as $elem)
                <h5 class="text-center">{{$elem->nom}}</h5>
            @endforeach
  
        </div>
        
        <div class="text-white text-center">
         
            <h1 class="titre2">2 équipes non remplies au hasard</h1>
    
            @foreach ($teamHasardNR as $elem)
                <h5 class="text-center">{{$elem->equipe}}</h5>
            @endforeach
  
        </div>
    
        <div class="text-white text-center">
         
            <h1 class="titre2"> Pays EUROPE</h1>
        
            @foreach ($equipe as $elem)
                @if($elem->pays->continent=="Europe")
                    <h5 class="text-center">{{$elem->equipe}}</h5>
                @endif
                    
            @endforeach
  
        </div>
        
        <div class="text-white text-center">
         
            <h1 class="titre2"> Pays HORS EUROPE</h1>
    
    
            @foreach ($equipe as $elem)
                @if($elem->pays->continent!="Europe")
                    <h5 class="text-center">{{$elem->equipe}}</h5>
                @endif
            @endforeach
  
        </div>
    
        <div class="text-white text-center">
         
            <h1 class="titre2"> les joueurs qui représente leur pays( meme pays dorigine que l'équipe dans la quelle ils jouent ) </h1>
    
            @foreach ($equipe as $elem)
                @foreach ($profil as $item)
                    @if($elem->pays->pays==$item->origin)
                        <h5 class="text-center">{{$item->nom}}</h5>
                    @endif
                @endforeach
            @endforeach
  
        </div>
    
        <div class="text-white text-center">
         
            <h1 class="titre2"> 5 joueues au hasard qui ont une équipe ! </h1>
    
            @foreach ($fille as $elem)
                <h5 class="text-center">{{$elem->nom}}</h5>
            @endforeach
  
        </div>

        <div class="text-white text-center">
         
            <h1 class="titre2"> 5 joueurs homme et qui ont une équipe ! </h1>
    
                @foreach ($homme as $elem)
                    <h5 class="text-center">{{$elem->nom}}</h5>
                @endforeach
  
        </div>
        

@endsection