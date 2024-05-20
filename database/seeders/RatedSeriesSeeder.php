<?php

namespace Database\Seeders;

use App\Models\RatedSeries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatedSeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RatedSeries::factory()
            ->count(5)
            ->hasSeries(1)
            ->create();
    }
}
