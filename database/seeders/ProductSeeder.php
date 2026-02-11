<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes = [
            ['name' => 'Product Type', 'slug' => 'product-type'], // jewelry, bullions, accessory, ornament, etc.
            ['name' => 'Metal Type', 'slug' => 'metal-type'],
            ['name' => 'Gold Color', 'slug' => 'gold-color'],
            ['name' => 'Fineness', 'slug' => 'fineness'],
        ];
    }
}
