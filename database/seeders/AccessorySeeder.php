<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccessorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accessories = [
            // gems
            ['category'=>'gems','varian'=>'zircon','color'=>'White','warna'=>'Putih','transparency'=>'transparent','slug'=>'gems-zircon-white-transparent','codename'=>'m.pT'], // T: Transparent
            ['category'=>'gems','varian'=>'zircon','color'=>'White','warna'=>'Putih','transparency'=>'opaque','slug'=>'gems-zircon-white-opaque','codename'=>'m.pO'], // O: Opaque
            ['category'=>'gems','varian'=>'zircon','color'=>'Red','warna'=>'Merah','transparency'=>'transparent','slug'=>'gems-zircon-red-transparent','codename'=>'m.mT'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Red','warna'=>'Merah','transparency'=>'opaque','slug'=>'gems-zircon-red-opaque','codename'=>'m.mO'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Pink','warna'=>'Pink','transparency'=>'transparent','slug'=>'gems-zircon-pink-transparent','codename'=>'m.pinkT'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Pink','warna'=>'Pink','transparency'=>'opaque','slug'=>'gems-zircon-pink-opaque','codename'=>'m.pinkO'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Orange','warna'=>'Oranye','transparency'=>'transparent','slug'=>'gems-zircon-orange-transparent','codename'=>'m.oT'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Orange','warna'=>'Oranye','transparency'=>'opaque','slug'=>'gems-zircon-orange-opaque','codename'=>'m.oO'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Yellow','warna'=>'Kuning','transparency'=>'transparent','slug'=>'gems-zircon-yellow-transparent','codename'=>'m.kT'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Yellow','warna'=>'Kuning','transparency'=>'opaque','slug'=>'gems-zircon-yellow-opaque','codename'=>'m.kO'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Lime','warna'=>'Lemon','transparency'=>'transparent','slug'=>'gems-zircon-lime-transparent','codename'=>'m.lT'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Lime','warna'=>'Lemon','transparency'=>'opaque','slug'=>'gems-zircon-lime-opaque','codename'=>'m.lO'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Emerald','warna'=>'Emerald','transparency'=>'transparent','slug'=>'gems-zircon-emerald-transparent','codename'=>'m.emT'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Emerald','warna'=>'Emerald','transparency'=>'opaque','slug'=>'gems-zircon-emerald-opaque','codename'=>'m.emO'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Green','warna'=>'Hijau','transparency'=>'transparent','slug'=>'gems-zircon-green-transparent','codename'=>'m.hjT'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Green','warna'=>'Hijau','transparency'=>'opaque','slug'=>'gems-zircon-green-opaque','codename'=>'m.hjO'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Blue','warna'=>'Biru','transparency'=>'transparent','slug'=>'gems-zircon-blue-transparent','codename'=>'m.bT'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Blue','warna'=>'Biru','transparency'=>'opaque','slug'=>'gems-zircon-blue-opaque','codename'=>'m.bO'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Sky Blue','warna'=>'Biru Langit','transparency'=>'transparent','slug'=>'gems-zircon-skyblue-transparent','codename'=>'m.skyT'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Sky Blue','warna'=>'Biru Langit','transparency'=>'opaque','slug'=>'gems-zircon-skyblue-opaque','codename'=>'m.skyO'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Indigo','warna'=>'Nila','transparency'=>'transparent','slug'=>'gems-zircon-indigo-transparent','codename'=>'m.nT'], // Warna Nila = Ungu + Biru => indigo
            ['category'=>'gems','varian'=>'zircon','color'=>'Indigo','warna'=>'Nila','transparency'=>'opaque','slug'=>'gems-zircon-indigo-opaque','codename'=>'m.nO'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Violet','warna'=>'Ungu','transparency'=>'transparent','slug'=>'gems-zircon-violet-transparent','codename'=>'m.uT'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Violet','warna'=>'Ungu','transparency'=>'opaque','slug'=>'gems-zircon-violet-opaque','codename'=>'m.uO'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Brown','warna'=>'Coklat','transparency'=>'transparent','slug'=>'gems-zircon-brown-transparent','codename'=>'m.cT'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Brown','warna'=>'Coklat','transparency'=>'opaque','slug'=>'gems-zircon-brown-opaque','codename'=>'m.cO'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Black','warna'=>'Hitam','transparency'=>'transparent','slug'=>'gems-zircon-black-transparent','codename'=>'m.htT'],
            ['category'=>'gems','varian'=>'zircon','color'=>'Black','warna'=>'Hitam','transparency'=>'opaque','slug'=>'gems-zircon-black-opaque','codename'=>'m.htO'],
            // mainan
            ['category'=>'toys','name'=>'Bola','slug'=>'toys-bola','codename'=>'m-Bola'],
            ['category'=>'toys','name'=>'Daisy Duck','slug'=>'toys-daisy-duck','codename'=>'m-Daisy'],
            ['category'=>'toys','name'=>'Donald Duck','slug'=>'toys-donald-duck','codename'=>'m-Donald'],
            ['category'=>'toys','name'=>'Dora','slug'=>'toys-dora','codename'=>'m-Dora'],
            ['category'=>'toys','name'=>'Goofy','slug'=>'toys-goofy','codename'=>'m-goofy'],
            ['category'=>'toys','name'=>'Hello Kitty','slug'=>'toys-hello-kitty','codename'=>'m-HelloKitty'],
            ['category'=>'toys','name'=>'Keroppi','slug'=>'toys-keroppi','codename'=>'m-Keroppi'],
            ['category'=>'toys','name'=>'Lonceng','slug'=>'toys-lonceng','codename'=>'m-Lonceng'],
            ['category'=>'toys','name'=>'Lonceng Daun','slug'=>'toys-lonceng-daun','codename'=>'m-LoncengDaun'],
            ['category'=>'toys','name'=>'Lonceng Kupu','slug'=>'toys-lonceng-kupu','codename'=>'m-LoncengKupu'],
            ['category'=>'toys','name'=>'Love','slug'=>'toys-love','codename'=>'m-Love'],
            ['category'=>'toys','name'=>'Love Ukir','slug'=>'toys-love-ukir','codename'=>'m-LoveUkir'],
            ['category'=>'toys','name'=>'Mickey Mouse','slug'=>'toys-mickey-mouse','codename'=>'m-Mickey'],
            ['category'=>'toys','name'=>'Minnie Mouse','slug'=>'toys-minnie-mouse','codename'=>'m-Minnie'],
            ['category'=>'toys','name'=>'Patrick','slug'=>'toys-patrick','codename'=>'m-Patrick'],
            ['category'=>'toys','name'=>'SpongeBob','slug'=>'toys-spongebob','codename'=>'m-SpongeBob'],
            // plates
            ['category'=>'plates','name'=>'Plat','slug'=>'plates','codename'=>'pl'],
            ['category'=>'plates','name'=>'Plat Ukir','slug'=>'plates-carved','codename'=>'pl.ukir'],
            ['category'=>'plates','name'=>'Plat Mata','slug'=>'plates-gems','codename'=>'pl.mata'],
            ['category'=>'plates','name'=>'Plat Ukir Mata','slug'=>'plates-carved-gems','codename'=>'pl.ukir_mata'],

        ];

        $keyBarcode = 1;
        foreach ($accessories as $accessory) {
            if (str_contains((string)$keyBarcode, '4')) {
                $keyBarcode++; // skip barcode with digit '4'
            }
            $barcode = str_pad((string)$keyBarcode, 4, '0', STR_PAD_LEFT);
            $accessory['barcode'] = $barcode;
            \App\Models\Accessory::create($accessory);
            $keyBarcode++;
        }
    }
}
