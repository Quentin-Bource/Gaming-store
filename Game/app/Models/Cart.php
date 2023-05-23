<?php

namespace App\Models;

use App\Models\Console;
use App\Models\Game;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function game()
{
    return $this->belongsTo(Game::class);
}

public function console()
{
    return $this->belongsTo(Console::class);
}
}
