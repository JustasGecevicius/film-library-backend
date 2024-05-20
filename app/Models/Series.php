<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    public function likedSeries()
    {
        return $this->belongsToMany(LikedSeries::class);
    }

    public function ratedSeries()
    {
        return $this->belongsToMany(RatedSeries::class);
    }
}
