<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class allController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function game($id)
    {
        $game = Game::findOrFail($id);

        return view('game', [
            'game' => $game
        ]);
    }

    public function allGame()
    {

        $games = Game::all();


        return view('allGame', [
            'games' => $games
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function sub()
    {
        return view('sub');
    }

    public function login()
    {
        return view('login');
    }

    public function create()
    {

        return view('create');
    }

    public function post(Request $request)
    {
        Game::create([
            'titre' => $request->titre,
            'content' => $request->content,
            'prix' => $request->prix
        ]);
        dd('Post crée');
    }
}
