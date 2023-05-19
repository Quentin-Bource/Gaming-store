@extends('layout/app')

@section('content')

<form method="POST" action="">

    @csrf

    <input type="text" name="titre" class=" border-black border-4">

    <textarea name="content" cols="30" rows="10" class=" border-black border-4"></textarea>

    <input type="number" name="prix" class=" border-black border-4" >

    <button type="submit" class=" border-black border-4">Nouveau jeu</button>

    
</form>

<form method="POST" action="">


</form>

<form method="POST" action="">
    
</form>
    
@endsection