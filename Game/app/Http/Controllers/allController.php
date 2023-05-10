<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class allController extends Controller
{
    function home() {
        return view('home');
    }

    function game($id) {
        return view('game');
    }

    function allGame() {

        $games = Game::all();
       

        return view('allGame', [
            'games' => $games
        ]);
    }

    function about() {
        return view('about');
    }

    function sub() {
        return view('sub');
    }

    function login() {
        return view('login');
    }
}
