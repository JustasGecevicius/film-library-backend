<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function ratedMovies()
    {
        return $this->hasMany(RatedMovies::class);
    }

    public function ratedSeries()
    {
        return $this->hasMany(RatedSeries::class);
    }

    public function likedSeries()
    {
        return $this->hasMany(LikedSeries::class);
    }

    public function likedMovies()
    {
        return $this->hasMany(LikedMovies::class);
    }

    public function wishlistedMovies()
    {
        return $this->hasMany(WishlistedMovies::class);
    }
}
