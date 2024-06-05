<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'release_date',
        'poster_path'
    ];

    public function likedMovies()
    {
        return $this->belongsToMany(LikedMovies::class);
    }

    public function ratedMovies()
    {
        return $this->belongsToMany(RatedMovies::class);
    }
}
