@extends('layout/app')

@section('content')

<h1 class="flex justify-center m-6">
    <img class="w-1/4" src="{{ asset('img/titre.png')}}" alt="">
  </h1>

  <div class="glide">
    <div class="glide__track" data-glide-el="track">
      <ul class="glide__slides">
        @foreach($games as $game)
          <li class="glide__slide">
            <img class="mx-auto justify-center h-36 w-40" src="/Gaming-store/Game/public/{{ Storage::url($game->image->path) }}" alt="Jeu">
          </li>
        @endforeach
      </ul>
    </div>
  </div>
    
@endsection