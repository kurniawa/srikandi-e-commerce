<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'term' => 'product_categories',
                'parent_id' => null,
                'parent_slug' => null,
                'name' => 'Jewelry',
                'nama' => 'Perhiasan',
                'slug' => 'jewelry',
                'description' => null
            ],
            [
                'term' => 'product_categories',
                'parent_id' => null,
                'parent_slug' => null,
                'name' => 'Bullions',
                'nama' => 'LM',
                'slug' => 'bullions',
                'description' => null
            ],
            [
                'term' => 'product_categories',
                'classification' => 'metal_types',
                'parent_id' => 1,
                'parent_slug' => 'jewelry',
                'class' => 'gold',
                'name' => 'Gold Jewelry',
                'nama' => 'Perhiasan Emas',
                'slug' => 'jewelry-gold',
                'description' => null
            ]
        ];

        // foreach ($categories as $category) {
        //     \App\Models\ProductCategory::create($category);
        // }
        DB::table('categories')->insert($categories);
    }
}
