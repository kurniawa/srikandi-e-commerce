<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes = [
            ['name' => 'Metal Type', 'slug' => 'metal-type', 'data_type' => 'select'], // gold, silver, platinum, etc.
            ['name' => 'Gold Color', 'slug' => 'gold-color', 'data_type' => 'select'], // yellow, white, rose, chrome, etc.
            ['name' => 'Brand', 'slug' => 'brand', 'data_type' => 'string'],
            ['name' => 'Country', 'slug' => 'country', 'data_type' => 'string'],
            ['name' => 'Motif', 'slug' => 'motif', 'data_type' => 'string'],
            ['name' => 'Year', 'slug' => 'year', 'data_type' => 'number'],
            ['name' => 'Edition', 'slug' => 'edition', 'data_type' => 'string'],
            ['name' => 'Tray', 'slug' => 'tray', 'data_type' => 'string'],
            ['name' => 'Condition', 'slug' => 'condition', 'data_type' => 'number'], // 9:mulus, 8:cacat tidak terlihat, 7:cacat terlihat, 6:jelas ada cacat, 5:rusak
        ];

        $attribute_values = [
            // Metal Type values
            ['attribute_slug' => 'metal-type', 'slug' => 'gold', 'value' => 'Gold'],
            ['attribute_slug' => 'metal-type', 'slug' => 'silver', 'value' => 'Silver'],
            // Gold Color values
            ['attribute_slug' => 'gold-color', 'slug' => 'yellow', 'value' => 'Yellow'],
            ['attribute_slug' => 'gold-color', 'slug' => 'white', 'value' => 'White'],
            ['attribute_slug' => 'gold-color', 'slug' => 'rose', 'value' => 'Rose'],
            ['attribute_slug' => 'gold-color', 'slug' => 'rose', 'value' => 'Chrome'],
            // Brand values
            ['attribute_slug' => 'brand', 'slug' => 'antam', 'value' => 'ANTAM'],
            ['attribute_slug' => 'brand', 'slug' => 'heraeus', 'value' => 'Heraeus'],
            ['attribute_slug' => 'brand', 'slug' => 'king-halim', 'value' => 'King Halim'],
            ['attribute_slug' => 'brand', 'slug' => 'lotus-archi', 'value' => 'Lotus Archi'],
            ['attribute_slug' => 'brand', 'slug' => 'nadir', 'value' => 'Nadir'],
            ['attribute_slug' => 'brand', 'slug' => 'pamp', 'value' => 'PAMP'],
            ['attribute_slug' => 'brand', 'slug' => 'ubs', 'value' => 'UBS'],
        ];

        \Illuminate\Support\Facades\DB::table('attributes')->insert($attributes);
        \Illuminate\Support\Facades\DB::table('attribute_values')->insert($attribute_values);

    }
}
