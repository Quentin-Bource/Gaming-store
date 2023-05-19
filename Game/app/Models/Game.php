<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Image;
use App\Models\Console;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';

    protected $fillable = ['titre', 'content', 'prix'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function consoles()
    {
        return $this->belongsToMany(Console::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }
}
