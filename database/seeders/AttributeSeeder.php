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
            ['parent_id' => null, 'parent_slug' => null, 'name' => 'Metal Type', 'slug' => 'metal-type', 'data_type' => 'select', 'description' => null], // gold, silver, platinum, etc.
            ['parent_id' => null, 'parent_slug' => null, 'name' => 'Gold Color', 'slug' => 'gold-color', 'data_type' => 'select', 'description' => null], // yellow, white, rose, chrome, etc.
            ['parent_id' => null, 'parent_slug' => null, 'name' => 'Tray', 'slug' => 'tray', 'data_type' => 'string', 'description' => null],
            ['parent_id' => null, 'parent_slug' => null, 'name' => 'Condition', 'slug' => 'condition', 'data_type' => 'number', 'description' => null], // 9:mulus, 8:cacat tidak terlihat, 7:cacat terlihat, 6:jelas ada cacat, 5:rusak
            // Metal Type
            ['parent_id' => 1, 'parent_slug' => 'metal-type', 'name' => 'Gold', 'slug' => 'gold', 'data_type' => null, 'description' => null],
            ['parent_id' => 1, 'parent_slug' => 'metal-type', 'name' => 'Silver', 'slug' => 'silver', 'data_type' => null, 'description' => null],
            // Gold Color
            ['parent_id' => 2, 'parent_slug' => 'gold-color', 'name' => 'Yellow', 'slug' => 'yellow', 'data_type' => null, 'description' => null],
            ['parent_id' => 2, 'parent_slug' => 'gold-color', 'name' => 'White', 'slug' => 'white', 'data_type' => null, 'description' => null],
            ['parent_id' => 2, 'parent_slug' => 'gold-color', 'name' => 'Rose', 'slug' => 'rose', 'data_type' => null, 'description' => null],
            ['parent_id' => 2, 'parent_slug' => 'gold-color', 'name' => 'Chrome', 'slug' => 'chrome', 'data_type' => null, 'description' => null],
            // Condition
            ['parent_id' => 4, 'parent_slug' => 'condition', 'name' => '9', 'slug' => '9', 'data_type' => null, 'description' => 'Mulus'],
            ['parent_id' => 4, 'parent_slug' => 'condition', 'name' => '8', 'slug' => '8', 'data_type' => null, 'description' => 'Cacat Tidak Terlihat'],
            ['parent_id' => 4, 'parent_slug' => 'condition', 'name' => '7', 'slug' => '7', 'data_type' => null, 'description' => 'Cacat Terlihat'],
            ['parent_id' => 4, 'parent_slug' => 'condition', 'name' => '6', 'slug' => '6', 'data_type' => null, 'description' => 'Jelas Ada Cacat'],
            ['parent_id' => 4, 'parent_slug' => 'condition', 'name' => '5', 'slug' => '5', 'data_type' => null, 'description' => 'Rusak'],
        ];

        \Illuminate\Support\Facades\DB::table('attributes')->insert($attributes);
    }
}
