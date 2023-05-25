@extends('layout/app')

@section('content')

<h1 class="flex justify-center m-6">
    <img class="w-1/4" src="{{ asset('img/titre.png')}}" alt="">
  </h1>


  <div class="text-center">
    <h1 class="text-4xl font-bold m-5 mb-4">Bonjour et bienvenue !</h1>
    <p class="text-lg m-5 mb-8">Nous vous remercions de votre visite sur notre site.</p>
    <p class="text-lg m-5 mb-8">Vous vous trouvez actuellement sur un projet Ecommerce qui se concentre principalement sur l'aspect back-end. Ce projet a été créé dans le but de nous entraîner avec les technologies Laravel et Tailwind. Veuillez noter qu'il ne s'agit pas d'un site fonctionnel permettant de réellement acheter des jeux. C'est plutôt un espace où vous pouvez explorer et expérimenter.</p>
    <p class="text-lg mb-10">Merci encore pour votre visite et profitez pleinement de votre expérience de navigation !</p>
  </div>


  
  <div id="splide" class="splide">
    <div class="splide__track">
      <ul class="splide__list">
        @foreach($games as $game)
          <li class="splide__slide">
            <a href="{{route('game' , ['id' => $game->id])}}"><img class="mx-auto justify-center h-36 "  src="/Gaming-store/Game/public/{{ Storage::url($game->image->path)}}" alt="Jeu" style="visibility: visible"></a>
            
          </li>
        @endforeach
      </ul>
    </div>
  </div>

@endsection