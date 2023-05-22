@extends('layout/app')

@section('content')

<div class="grid gap-5 grid-cols-3 m-5">
    
    @if ($games->count() > 0)
    @foreach ($games as $game)
    <a class="bg-zinc-600 text-white hover:bg-zinc-800 mt-10 mb-10 rounded " href="{{route('game' , ['id' => $game->id])}}">
    <div class="text-center "> 
        
    
        <h3 class="m-4 text-3xl"> {{$game->titre}} </h3>
        <img class="mx-auto justify-center w-1/2"  src="/Gaming-store/Game/public/{{ Storage::url($game->image->path)}}" alt="Jeu">
        @if($game->consoles->count() > 2)

             @foreach ($game->consoles->take(2) as $console)

            <span class="m-5  bg-zinc-800">{{$console->console}}</span>

             @endforeach

            <span>...</span>
            <br>
        @else
        @foreach ($game->consoles as $console)

        <span class="mr-5  bg-zinc-800"> {{$console->console}} </span>
            
        @endforeach
        <br>
        @endif
        
        <span class="ml-5"> {{$game->prix}}$</span>

    


    </div>
</a>
    @endforeach
    @else 

    <span class=" text-center row-span-2 col-span-3">
        No Games
    </span>
        
    @endif
    
    
        
    

</div>
    
@endsection