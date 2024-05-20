<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    User::factory()->count(5)->hasLikedMovies()->create();
    User::factory()->count(5)->hasLikedSeries()->create();
    User::factory()->count(5)->hasRatedMovies()->create();
    User::factory()->count(5)->hasRatedSeries()->create();
  }
}
