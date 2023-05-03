<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allControllers extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function game($id)
    {
        return view('game');
    }

    public function allGame()
    {
        return view('allGame');
    }
}
