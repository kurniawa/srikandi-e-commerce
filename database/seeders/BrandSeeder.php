<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['slug' => 'antam', 'name' => 'Antam', 'alias' => null, 'manufacturer' => 'PT. Aneka Tambang Tbk.', 'country' => 'Indonesia', 'description' => 'Antam is a leading Indonesian mining company specializing in gold, silver, and other precious metals.', 'logo' => 'antam_logo.png'],
            ['slug' => 'king-halim', 'name' => 'King Halim', 'alias' => null, 'manufacturer' => 'PT. King Halim', 'country' => 'Indonesia', 'description' => 'From its commencement in 1981, PT. King Halim has grown over the years to become one of the leading gold jewelry manufacturers in Indonesia.', 'logo' => 'king_halim_logo.png'],
            ['slug' => 'lotus-archi', 'name' => 'Lotus Archi', 'alias' => 'LA', 'manufacturer' => 'PT. Elang Mulia Abadi Sempurna', 'country' => 'Indonesia', 'description' => 'PT Archi Indonesia (Archi) is an Indonesian based pure gold mining company, with a focus on gold in Indonesia', 'logo' => 'lotus_archi_logo.png'],
            ['slug' => 'ubs', 'name' => 'UBS', 'alias' => null, 'manufacturer' => 'PT. Untung Bersama Sejahtera', 'country' => 'Indonesia', 'description' => 'PT. Untung Bersama Sejahtera atau yang lebih dikenal dengan UBS Gold, merupakan perusahaan yang bergerak di bidang produksi perhiasan emas dan logam mulia.', 'logo' => 'ubs_logo.png'],
        ];

        \Illuminate\Support\Facades\DB::table('brands')->insert($brands);
    }
}
