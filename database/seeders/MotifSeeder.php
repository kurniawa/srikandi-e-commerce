<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $motifs = [
            ['slug' => 'classic', 'name' => 'Classic', 'edition' => null, 'year' => null, 'description' => null],
            ['slug' => 'crown', 'name' => 'Crown', 'edition' => null, 'year' => null, 'description' => null],

            ['slug' => 'chinese-zodiac-goat', 'name' => 'Chinese Zodiac (Goat)', 'edition' => 'Chinese Zodiac', 'year' => 2015, 'description' => null],
            ['slug' => 'chinese-zodiac-monkey', 'name' => 'Chinese Zodiac (Monkey)', 'edition' => 'Chinese Zodiac', 'year' => 2016, 'description' => null],
            ['slug' => 'chinese-zodiac-rooster', 'name' => 'Chinese Zodiac (Rooster)', 'edition' => 'Chinese Zodiac', 'year' => 2017, 'description' => null],
            ['slug' => 'chinese-zodiac-dog', 'name' => 'Chinese Zodiac (Dog)', 'edition' => 'Chinese Zodiac', 'year' => 2018, 'description' => null],
            ['slug' => 'chinese-zodiac-pig', 'name' => 'Chinese Zodiac (Pig)', 'edition' => 'Chinese Zodiac', 'year' => 2019, 'description' => null],
            ['slug' => 'chinese-zodiac-rat', 'name' => 'Chinese Zodiac (Rat)', 'edition' => 'Chinese Zodiac', 'year' => 2020, 'description' => null],
            ['slug' => 'chinese-zodiac-ox', 'name' => 'Chinese Zodiac (Ox)', 'edition' => 'Chinese Zodiac', 'year' => 2021, 'description' => null],
            ['slug' => 'chinese-zodiac-tiger', 'name' => 'Chinese Zodiac (Tiger)', 'edition' => 'Chinese Zodiac', 'year' => 2022, 'description' => null],
            ['slug' => 'chinese-zodiac-rabbit', 'name' => 'Chinese Zodiac (Rabbit)', 'edition' => 'Chinese Zodiac', 'year' => 2023, 'description' => null],
            ['slug' => 'chinese-zodiac-dragon', 'name' => 'Chinese Zodiac (Dragon)', 'edition' => 'Chinese Zodiac', 'year' => 2024, 'description' => null],
            ['slug' => 'chinese-zodiac-snake', 'name' => 'Chinese Zodiac (Snake)', 'edition' => null, 'year' => 2025, 'description' => null],
            ['slug' => 'chinese-zodiac-horse', 'name' => 'Chinese Zodiac (Horse)', 'edition' => 'Chinese Zodiac', 'year' => 2026, 'description' => null],

            ['slug' => 'masjid', 'name' => 'Masjid Al-Aqsa', 'edition' => null, 'year' => null, 'description' => null],
            ['slug' => 'masjid-nabawi', 'name' => 'Masjid Nabawi', 'edition' => null, 'year' => null, 'description' => null],
            ['slug' => 'ka-bah', 'name' => 'Ka\'bah', 'edition' => null, 'year' => null, 'description' => null],
        ];

        \Illuminate\Support\Facades\DB::table('motifs')->insert($motifs);
    }
}
