<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trees = [
            ['term' => 'products', 'parent_id' => null, 'parent_slug' => null, 'classification' => null, 'class' => null, 'name' => 'Jewelry', 'nama' => 'Perhiasan', 'slug' => 'jewelry', 'description' => null, 'has_children' => true],
            ['term' => 'products', 'parent_id' => null, 'parent_slug' => null, 'classification' => null, 'class' => null, 'name' => 'Bullions', 'nama' => 'LM', 'slug' => 'bullions', 'description' => null, 'has_children' => true],
            ['term' => 'products', 'parent_id' => 1, 'parent_slug' => 'jewelry', 'classification' => 'material', 'class' => 'gold', 'name' => 'Gold Jewelry', 'nama' => 'Perhiasan Emas', 'slug' => 'gold-jewelry', 'description' => null, 'has_children' => false],
            ['term' => 'products', 'parent_id' => 1, 'parent_slug' => 'jewelry', 'classification' => 'material', 'class' => 'silver', 'name' => 'Silver Jewelry','nama' => 'Perhiasan Perak', 'slug' => 'silver-jewelry', 'description' => null, 'has_children' => false],
            ['term' => 'products', 'parent_id' => 2, 'parent_slug' => 'bullions', 'classification' => 'material', 'class' => 'gold','name' => 'Gold Bullions', 'nama' => 'LM Emas', 'slug' => 'gold-bullions', 'description' => null, 'has_children' => false],
            ['term' => 'products','parent_id' => 2, 'parent_slug' => 'bullions', 'classification' => 'material', 'class' => 'silver', 'name' => 'Silver Bullions', 'nama' => 'LM Perak', 'slug' => 'silver-bullions', 'description' => null, 'has_children' => false],
            ['term' => 'jewelry', 'parent_id' => null, 'parent_slug' => null, 'classification' => 'ornament_types', 'class' => null, 'name' => 'Earring', 'nama' => 'Anting', 'slug' => 'earring', 'description' => null, 'has_children' => false],
            ['term' => 'jewelry', 'parent_id' => null, 'parent_slug' => null, 'classification' => 'ornament_types', 'class' => null, 'name' => 'Ear Stud', 'nama' => 'Giwang', 'slug' => 'ear-stud', 'description' => null, 'has_children' => false],
            ['term' => 'jewelry', 'parent_id' => null, 'parent_slug' => null, 'classification' => 'ornament_types', 'class' => null, 'name' => 'Ring', 'nama' => 'Cincin', 'slug' => 'ring', 'description' => null, 'has_children' => false],
            ['term' => 'jewelry', 'parent_id' => null, 'parent_slug' => null, 'classification' => 'ornament_types', 'class' => null, 'name' => 'Necklace', 'nama' => 'Kalung', 'slug' => 'necklace', 'description' => null, 'has_children' => true],
            ['term' => 'jewelry', 'parent_id' => null, 'parent_slug' => null, 'classification' => 'ornament_types', 'class' => null, 'name' => 'Bracelet', 'nama' => 'Gelang Tangan', 'slug' => 'bracelet', 'description' => null, 'has_children' => true],
            ['term' => 'jewelry', 'parent_id' => null, 'parent_slug' => null, 'classification' => 'ornament_types', 'class' => null, 'name' => 'Anklet', 'nama' => 'Gelang Kaki', 'slug' => 'anklet', 'description' => null, 'has_children' => false],
            ['term' => 'jewelry', 'parent_id' => null, 'parent_slug' => null, 'classification' => 'ornament_types', 'class' => null, 'name' => 'Pendant', 'nama' => 'Liontin', 'slug' => 'pendant', 'description' => null, 'has_children' => false],
            ['term' => 'jewelry', 'parent_id' => null, 'parent_slug' => null, 'classification' => 'ornament_types', 'class' => null, 'name' => 'Brooch', 'nama' => 'Bros', 'slug' => 'brooch', 'description' => null, 'has_children' => false],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_types', 'class' => null, 'name' => 'Choker', 'nama' => 'Kalung Choker', 'slug' => 'choker', 'description' => null, 'has_children' => false],
            ['term' => 'jewelry', 'parent_id' => 11, 'parent_slug' => 'bracelet', 'classification' => 'ornament_types', 'class' => null, 'name' => 'Chain Bracelet', 'nama' => 'Gelang Tangan Rantai', 'slug' => 'chain-bracelet', 'description' => null, 'has_children' => false],
            ['term' => 'jewelry', 'parent_id' => 11, 'parent_slug' => 'bracelet', 'classification' => 'ornament_types', 'class' => null, 'name' => 'Round Bracelet', 'nama' => 'Gelang Tangan Bulat', 'slug' => 'round-bracelet', 'description' => null, 'has_children' => false],
            ['term' => 'jewelry', 'parent_id' => 12, 'parent_slug' => 'anklet', 'classification' => 'ornament_types', 'class' => null, 'name' => 'Chain Anklet', 'nama' => 'Gelang Kaki Rantai', 'slug' => 'chain-anklet', 'description' => null, 'has_children' => false],
            ['term' => 'jewelry', 'parent_id' => 12, 'parent_slug' => 'anklet', 'classification' => 'ornament_types', 'class' => null, 'name' => 'Round Anklet', 'nama' => 'Gelang Kaki Bulat', 'slug' => 'round-anklet', 'description' => null, 'has_children' => false],
            // Anting
            ['term' => 'jewelry', 'parent_id' => 7, 'parent_slug' => 'earring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Desi', 'slug' => 'anting-desi'],
            ['term' => 'jewelry', 'parent_id' => 7, 'parent_slug' => 'earring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Desi Polos', 'slug' => 'anting-desi-polos'],
            ['term' => 'jewelry', 'parent_id' => 7, 'parent_slug' => 'earring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Jepit', 'slug' => 'anting-jepit'],
            ['term' => 'jewelry', 'parent_id' => 7, 'parent_slug' => 'earring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Jepit Ukir', 'slug' => 'anting-jepit-ukir'],
            ['term' => 'jewelry', 'parent_id' => 7, 'parent_slug' => 'earring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Gipsi', 'slug' => 'anting-gipsi'],
            ['term' => 'jewelry', 'parent_id' => 7, 'parent_slug' => 'earring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Gipsi Ukir', 'slug' => 'anting-gipsi-ukir'],
            ['term' => 'jewelry', 'parent_id' => 7, 'parent_slug' => 'earring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Kait', 'slug' => 'anting-kait'],
            ['term' => 'jewelry', 'parent_id' => 7, 'parent_slug' => 'earring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Kait Panjang', 'slug' => 'anting-kait-panjang'],
            ['term' => 'jewelry', 'parent_id' => 7, 'parent_slug' => 'earring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Kenip', 'slug' => 'anting-kenip'],
            ['term' => 'jewelry', 'parent_id' => 7, 'parent_slug' => 'earring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Toge', 'slug' => 'anting-toge'],
            ['term' => 'jewelry', 'parent_id' => 7, 'parent_slug' => 'earring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Tusuk Sate', 'slug' => 'anting-tusuk-sate'],
            // Giwang
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => '1/2 Tribal', 'slug' => 'giwang-1/2-tribal'],
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Kotak', 'slug' => 'giwang-kotak'],
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Mata Burung', 'slug' => 'giwang-mata-burung'],
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Mata Desi', 'slug' => 'giwang-mata-desi'],
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Panjang', 'slug' => 'giwang-panjang'],
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Pentol Polos', 'slug' => 'giwang-pentol-polos'],
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Pentol Ukir', 'slug' => 'giwang-pentol-ukir'],
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Segitiga', 'slug' => 'giwang-segitiga'],
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Tribal', 'slug' => 'giwang-tribal'],
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Tribal Pasir', 'slug' => 'giwang-tribal-pasir'],
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Tribal Ukir', 'slug' => 'giwang-tribal-ukir'],
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Fashion', 'slug' => 'giwang-fashion'],
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Bintang', 'slug' => 'giwang-bintang'],
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Chanel', 'slug' => 'giwang-chanel'],
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Hello Kitty', 'slug' => 'giwang-hello-kitty'],
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Kembang', 'slug' => 'giwang-kembang'],
            ['term' => 'jewelry', 'parent_id' => 8, 'parent_slug' => 'ear-stud', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Kembang Polos', 'slug' => 'giwang-kembang-polos'],
            // Cincin
            ['term' => 'jewelry', 'parent_id' => 9, 'parent_slug' => 'ring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => '1/2 Rantai', 'slug' => 'cincin-1/2-rantai'],
            ['term' => 'jewelry', 'parent_id' => 9, 'parent_slug' => 'ring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => '1/2 Pasir', 'slug' => 'cincin-1/2-pasir'],
            ['term' => 'jewelry', 'parent_id' => 9, 'parent_slug' => 'ring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Bambu Ukir', 'slug' => 'cincin-bambu-ukir'],
            ['term' => 'jewelry', 'parent_id' => 9, 'parent_slug' => 'ring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Dubai', 'slug' => 'cincin-dubai'],
            ['term' => 'jewelry', 'parent_id' => 9, 'parent_slug' => 'ring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Listring Aurel', 'slug' => 'cincin-listring-aurel'],
            ['term' => 'jewelry', 'parent_id' => 9, 'parent_slug' => 'ring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Listring V', 'slug' => 'cincin-listring-v'],
            ['term' => 'jewelry', 'parent_id' => 9, 'parent_slug' => 'ring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Ring Patkok', 'slug' => 'cincin-patkok'],
            ['term' => 'jewelry', 'parent_id' => 9, 'parent_slug' => 'ring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Ring Polos', 'slug' => 'cincin-ring-polos'],
            ['term' => 'jewelry', 'parent_id' => 9, 'parent_slug' => 'ring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Stempel', 'slug' => 'cincin-stempel'],
            ['term' => 'jewelry', 'parent_id' => 9, 'parent_slug' => 'ring', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Wedding', 'slug' => 'cincin-wedding'],
            // Kalung
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Aurel', 'slug' => 'kalung-aurel'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Balok Mini', 'slug' => 'kalung-balok-mini'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Biji Cabai', 'slug' => 'kalung-biji-cabai'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Biji Lada', 'slug' => 'kalung-biji-lada'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Biji Padi', 'slug' => 'kalung-biji-padi'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Biji Timun', 'slug' => 'kalung-biji-timun'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Biji Timun Lilit', 'slug' => 'kalung-biji-timun-lilit'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Boston', 'slug' => 'kalung-boston'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Cassandra', 'slug' => 'kalung-cassandra'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Cassandra Ukir', 'slug' => 'kalung-cassandra-ukir'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Gepeng', 'slug' => 'kalung-gepeng'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Holo', 'slug' => 'kalung-holo'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Holo Safir', 'slug' => 'kalung-holo-safir'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Holo Ukir', 'slug' => 'kalung-holo-ukir'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Italy', 'slug' => 'kalung-italy'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Italy Kaca', 'slug' => 'kalung-italy-kaca'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Italy Santa', 'slug' => 'kalung-italy-santa'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Milano Bulat', 'slug' => 'kalung-milano-bulat'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Milano Gepeng', 'slug' => 'kalung-milano-gepeng'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Milano Kotak', 'slug' => 'kalung-milano-kotak'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Miyata', 'slug' => 'kalung-miyata'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Nori', 'slug' => 'kalung-nori'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Nori Balok', 'slug' => 'kalung-nori-balok'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Nori Balok Ukir', 'slug' => 'kalung-nori-balok-ukir'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Plexi', 'slug' => 'kalung-plexi'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Rantai Gepeng', 'slug' => 'kalung-rantai-gepeng'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Santa', 'slug' => 'kalung-santa'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Lovina', 'slug' => 'kalung-lovina'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Sela Seli', 'slug' => 'kalung-sela-seli'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Silinder', 'slug' => 'kalung-silinder'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Tambang Lilit', 'slug' => 'kalung-tambang-lilit'],
            ['term' => 'jewelry', 'parent_id' => 10, 'parent_slug' => 'necklace', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Tambang Variasi', 'slug' => 'kalung-tambang-variasi'],
            // Gelang Tangan Rantai
            ['term' => 'jewelry', 'parent_id' => 16, 'parent_slug' => 'chain-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Biji Lada Kombinasi', 'slug' => 'gelang-tangan-rantai-biji-lada-kombinasi'],
            ['term' => 'jewelry', 'parent_id' => 16, 'parent_slug' => 'chain-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Cor', 'slug' => 'gelang-tangan-rantai-cor'],
            ['term' => 'jewelry', 'parent_id' => 16, 'parent_slug' => 'chain-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Gepeng', 'slug' => 'gelang-tangan-rantai-gepeng'],
            ['term' => 'jewelry', 'parent_id' => 16, 'parent_slug' => 'chain-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Hollow', 'slug' => 'gelang-tangan-rantai-hollow'],
            ['term' => 'jewelry', 'parent_id' => 16, 'parent_slug' => 'chain-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Hollow Kombinasi', 'slug' => 'gelang-tangan-rantai-hollow-kombinasi'],
            ['term' => 'jewelry', 'parent_id' => 16, 'parent_slug' => 'chain-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Hollow Ukir', 'slug' => 'gelang-tangan-rantai-hollow-ukir'],
            ['term' => 'jewelry', 'parent_id' => 16, 'parent_slug' => 'chain-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Hollow Safir', 'slug' => 'gelang-tangan-rantai-hollow-safir'],
            ['term' => 'jewelry', 'parent_id' => 16, 'parent_slug' => 'chain-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Serut', 'slug' => 'gelang-tangan-rantai-serut'],
            ['term' => 'jewelry', 'parent_id' => 16, 'parent_slug' => 'chain-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Sisik Naga', 'slug' => 'gelang-tangan-rantai-sisik-naga'],
            ['term' => 'jewelry', 'parent_id' => 16, 'parent_slug' => 'chain-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Sisik Naga Double', 'slug' => 'gelang-tangan-rantai-sisik-naga-double'],
            ['term' => 'jewelry', 'parent_id' => 16, 'parent_slug' => 'chain-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Susun Sirih', 'slug' => 'gelang-tangan-rantai-susun-sirih'],
            ['term' => 'jewelry', 'parent_id' => 16, 'parent_slug' => 'chain-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Wedding', 'slug' => 'gelang-tangan-rantai-wedding'],
            // Gelang Tangan Bulat
            ['term' => 'jewelry', 'parent_id' => 17, 'parent_slug' => 'round-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Polos', 'slug' => 'gelang-tangan-bulat-polos'],
            ['term' => 'jewelry', 'parent_id' => 17, 'parent_slug' => 'round-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Ukir', 'slug' => 'gelang-tangan-bulat-ukir'],
            ['term' => 'jewelry', 'parent_id' => 17, 'parent_slug' => 'round-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Cartier', 'slug' => 'gelang-tangan-bulat-cartier'],
            ['term' => 'jewelry', 'parent_id' => 17, 'parent_slug' => 'round-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Fashion', 'slug' => 'gelang-tangan-bulat-fashion'],
            ['term' => 'jewelry', 'parent_id' => 17, 'parent_slug' => 'round-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Gelombang', 'slug' => 'gelang-tangan-bulat-gelombang'],
            ['term' => 'jewelry', 'parent_id' => 17, 'parent_slug' => 'round-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Keroncong', 'slug' => 'gelang-tangan-bulat-keroncong'],
            ['term' => 'jewelry', 'parent_id' => 17, 'parent_slug' => 'round-bracelet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Ular', 'slug' => 'gelang-tangan-bulat-ular'],
            // Gelang Kaki
            ['term' => 'jewelry', 'parent_id' => 18, 'parent_slug' => 'chain-anklet', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Gelang Kaki Rantai', 'slug' => 'gelang-kaki-rantai'],
            // Liontin
            ['term' => 'jewelry', 'parent_id' => 13, 'parent_slug' => 'pendant', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Batu', 'slug' => 'liontin-batu'],
            ['term' => 'jewelry', 'parent_id' => 13, 'parent_slug' => 'pendant', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Chanel', 'slug' => 'liontin-chanel'],
            ['term' => 'jewelry', 'parent_id' => 13, 'parent_slug' => 'pendant', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Desi', 'slug' => 'liontin-desi'],
            ['term' => 'jewelry', 'parent_id' => 13, 'parent_slug' => 'pendant', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Dubai Ukir Pohon Kelapa', 'slug' => 'liontin-dubai-ukir-pohon-kelapa'],
            ['term' => 'jewelry', 'parent_id' => 13, 'parent_slug' => 'pendant', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Gucci', 'slug' => 'liontin-gucci'],
            ['term' => 'jewelry', 'parent_id' => 13, 'parent_slug' => 'pendant', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Huruf', 'slug' => 'liontin-huruf'],
            ['term' => 'jewelry', 'parent_id' => 13, 'parent_slug' => 'pendant', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Louis Vuitton', 'slug' => 'liontin-louis-vuitton'],
            ['term' => 'jewelry', 'parent_id' => 13, 'parent_slug' => 'pendant', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Salib', 'slug' => 'liontin-salib'],
            // Bros
            ['term' => 'jewelry', 'parent_id' => 14, 'parent_slug' => 'brooch', 'classification' => 'ornament_varians', 'class' => null, 'decription' => null, 'has_children' => false, 'name' => 'Bros Cantik', 'slug' => 'brooch-bros-cantik'],
        ];

        // foreach ($categories as $category) {
        //     \App\Models\ProductCategory::create($category);
        // }
        DB::table('trees')->insert($trees);
    }
}
