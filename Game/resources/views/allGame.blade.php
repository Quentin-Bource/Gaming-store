@extends('layout/app')

@section('content')

<div class="grid gap-5 grid-cols-3 m-5">
    
    @if ($games->count() > 0)
    @foreach ($games as $game)
    <a class="bg-zinc-600 text-white  mt-10 mb-10 rounded h-80 " data-aos="fade-up" data-aos-duration="1000" href="{{route('game' , ['id' => $game->id])}}">
    <div class="text-center"> 
        
    
        <h3 class="m-4 text-3xl"> {{$game->titre}} </h3>
        
        <img class="mx-auto justify-center h-36 "  src="/Gaming-store/Game/public/{{ Storage::url($game->image->path)}}" alt="Jeu">


        <div class="flex justify-center mt-7">
        @if($game->consoles->count() > 2)

        

            @foreach ($game->consoles->take(2) as $console)

            <span class=" mr-5 p-2 text-m rounded-md  bg-zinc-800 items-start">{{$console->console}}</span>

             @endforeach

            <span class=" mr-5 p-2 text-m rounded-md  bg-zinc-800">...</span>
            
        @else
        @foreach ($game->consoles as $console)

        <span class="mr-5 p-2 text-m rounded-md  bg-zinc-800"> {{$console->console}} </span>
            
        @endforeach
        
        @endif

        

        <div class="flex justify-end">
        
        <span class="flex mr-5 p-2 rounded-md text-xl hover:bg-violet-500 bg-zinc-800 ml-5 items-end"> {{$game->prix}}$ ></span>

    


    </div>
        </div>


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

