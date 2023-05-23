@extends('layout/app')

@section('content')

<h1>Panier</h1>
@if($cart->count() > 0)
<table>
    <thead>
        <tr>
            <th>Jeu</th>
            <th>Console</th>
            <th>Prix</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($cart as $cartItem)
            <tr>
                <td>{{ $cartItem->game->titre }}</td>
                <td>{{ $cartItem->console->console }}</td>
                <td>{{ $cartItem->game->prix }} $</td>
                <td>
                    <form action="{{ route('cart.remove', ['id' => $cartItem->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-remove">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

    <div class="total">
        <p>Total: {{ $cart->sum('game.prix') }} $</p>
    </div>

@else

    <p>Votre panier est vide.</p>
@endif





@endsection