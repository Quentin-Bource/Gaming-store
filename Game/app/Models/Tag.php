<?php

namespace App\Models;

use App\Models\Game;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }
}
