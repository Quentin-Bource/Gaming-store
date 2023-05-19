@extends('layout/app')

@section('content')

<div class="">

    <h3 class=""> {{$game->titre}} </h3>
<img src=" /Gaming-store/Game/public/{{ Storage::url($game->image->path)}}" alt="Jeux">
<span class=""> {{$game->console}} </span>
<span class=""> {{$game->prix}}$</span>
<p>{{$game->content}}</p> 

@forelse ($game->tags as $tag)

<span>{{$tag->name}}</span>
    
@empty

<span>Aucun tags pour ce jeu</span>
    
@endforelse

</div>


    
@endsection