@extends('layout/app')

@section('content')

<h1 class="flex justify-center m-6">
    <img class="w-1/4" src="{{ asset('img/titre.png')}}" alt="">
  </h1>


  
  <div id="splide" class="splide">
    <div class="splide__track">
      <ul class="splide__list">
        @foreach($games as $game)
          <li class="splide__slide">
            
            <img class="mx-auto justify-center h-36 "  src="/Gaming-store/Game/public/{{ Storage::url($game->image->path)}}" alt="Jeu" style="visibility: visible">
          </li>
        @endforeach
      </ul>
    </div>
  </div>

@endsection