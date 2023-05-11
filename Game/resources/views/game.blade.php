@extends('layout/app')

@section('content')

<div class="">

    <h3 class=""> {{$game->titre}} </h3>
<img class=""  src="{{$game->jeu}}" alt="Jeu">
<span class=""> {{$game->console}} </span>
<span class=""> {{$game->prix}}$</span>

</div>


    
@endsection