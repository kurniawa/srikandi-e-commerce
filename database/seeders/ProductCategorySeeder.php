<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product_categories = [
            [
                'name' => 'Jewelry',
                'localname' => 'Perhiasan',
                'slug' => 'jewelry',
                'description' => null
            ],
            [
                'name' => 'Gold Bullions',
                'localname' => 'LM',
                'slug' => 'gold-bullions',
                'description' => null
            ]
        ];

        // foreach ($product_categories as $category) {
        //     \App\Models\ProductCategory::create($category);
        // }
        DB::table('product_categories')->insert($product_categories);
    }
}
