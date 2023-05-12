<?php

namespace App\Models;

use App\Models\Tag;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
