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
            ['name' => 'Tray', 'slug' => 'tray', 'data_type' => 'string'],
            ['name' => 'Condition', 'slug' => 'condition', 'data_type' => 'number'], // 9:mulus, 8:cacat tidak terlihat, 7:cacat terlihat, 6:jelas ada cacat, 5:rusak
        ];

        $attribute_values = [
            // Metal Type values
            ['attribute_id' => 1,'attribute_slug' => 'metal-type', 'description' => null, 'slug' => 'gold', 'value' => 'Gold'],
            ['attribute_id' => 1,'attribute_slug' => 'metal-type', 'description' => null, 'slug' => 'silver', 'value' => 'Silver'],
            // Gold Color values
            ['attribute_id' => 2,'attribute_slug' => 'gold-color', 'description' => null, 'slug' => 'yellow', 'value' => 'Yellow'],
            ['attribute_id' => 2,'attribute_slug' => 'gold-color', 'description' => null, 'slug' => 'white', 'value' => 'White'],
            ['attribute_id' => 2,'attribute_slug' => 'gold-color', 'description' => null, 'slug' => 'rose', 'value' => 'Rose'],
            ['attribute_id' => 2,'attribute_slug' => 'gold-color', 'description' => null, 'slug' => 'chrome', 'value' => 'Chrome'],
            // Condition values
            ['attribute_id' => 4,'attribute_slug' => 'condition', 'slug' => '9', 'value' => '9', 'description' => 'Mulus'],
            ['attribute_id' => 4,'attribute_slug' => 'condition', 'slug' => '8', 'value' => '8', 'description' => 'Cacat Tidak Terlihat'],
            ['attribute_id' => 4,'attribute_slug' => 'condition', 'slug' => '7', 'value' => '7', 'description' => 'Cacat Terlihat'],
            ['attribute_id' => 4,'attribute_slug' => 'condition', 'slug' => '6', 'value' => '6', 'description' => 'Jelas Ada Cacat'],
            ['attribute_id' => 4,'attribute_slug' => 'condition', 'slug' => '5', 'value' => '5', 'description' => 'Rusak'],
        ];

        \Illuminate\Support\Facades\DB::table('attributes')->insert($attributes);
        \Illuminate\Support\Facades\DB::table('attribute_values')->insert($attribute_values);

    }
}
