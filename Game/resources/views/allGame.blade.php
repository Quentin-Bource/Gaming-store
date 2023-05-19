@extends('layout/app')

@section('content')

<div class="grid gap-10 grid-cols-4 m-5">
    
    @if ($games->count() > 0)
    @foreach ($games as $game)
    <div class=" text-center"> 
        <a href="{{route('game' , ['id' => $game->id])}}">
    
        <h3 class=""> {{$game->titre}} </h3>
        <img class="mx-auto justify-center w-2/3"  src=" /Gaming-store/Game/public/{{ Storage::url($game->image->path)}}" alt="Jeu">
        <span class="mr-5"> {{$game->console}} </span>
        <span class="ml-5"> {{$game->prix}}$</span>
    </a>


    </div>
    @endforeach
    @else 

    <span class=" text-center row-span-2 col-span-3">
        No Games
    </span>
        
    @endif
    
    
        
    

</div>
    
@endsection