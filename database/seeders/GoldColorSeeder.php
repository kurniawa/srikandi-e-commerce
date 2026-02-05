<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoldColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $goldColors = [
            [
                'name' => 'Yellow Gold',
                'localname' => 'Emas Kuning',
                'slug' => 'yellow-gold',
                'description' => 'kuning',
                'codename' => 'y-g',
                'barcode' => '01',
            ],
            [
                'name' => 'Rose Gold',
                'localname' => 'Rose Gold',
                'slug' => 'rose-gold',
                'description' => 'rose gold',
                'codename' => 'r-g',
                'barcode' => '03',
            ],
            [
                'name' => 'Chrome Gold',
                'localname' => 'Chrome',
                'slug' => 'chrome-gold',
                'description' => 'chrome',
                'codename' => 'chr-g',
                'barcode' => '05',
            ],
            [
                'name' => 'White Gold',
                'localname' => 'Emas Putih',
                'slug' => 'white-gold',
                'description' => 'putih',
                'codename' => 'wh-g',
                'barcode' => '02',
            ],
        ];

        \DB::table('gold_colors')->insert($goldColors);
    }
}
