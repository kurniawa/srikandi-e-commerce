<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoldStandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $goldStandards = [
            ['name'=>'200','slug'=>'200','class'=>'md','purity'=>20,'carat'=>5,'carat_ratio'=>20.83,'barcode'=>'01'],
            ['name'=>'250','slug'=>'250','class'=>'md','purity'=>25,'carat'=>6,'carat_ratio'=>25,'barcode'=>'02'],
            ['name'=>'300','slug'=>'300','class'=>'md','purity'=>30,'carat'=>7,'carat_ratio'=>29.17,'barcode'=>'03'],
            ['name'=>'330','slug'=>'330','class'=>'md','purity'=>33,'carat'=>8,'carat_ratio'=>33.33,'barcode'=>'05'],
            ['name'=>'375','slug'=>'375','class'=>'md','purity'=>37.5,'carat'=>9,'carat_ratio'=>37.5,'barcode'=>'06'],
            ['name'=>'400','slug'=>'400','class'=>'md','purity'=>40,'carat'=>10,'carat_ratio'=>41.67,'barcode'=>'07'],
            ['name'=>'420','slug'=>'420','class'=>'md','purity'=>42,'carat'=>10,'carat_ratio'=>41.67,'barcode'=>'08'],
            ['name'=>'450','slug'=>'450','class'=>'md','purity'=>45,'carat'=>11,'carat_ratio'=>45.83,'barcode'=>'09'],
            ['name'=>'500','slug'=>'500','class'=>'md','purity'=>50,'carat'=>12,'carat_ratio'=>50,'barcode'=>'10'],
            ['name'=>'520','slug'=>'520','class'=>'md','purity'=>52,'carat'=>12.5,'carat_ratio'=>52.08,'barcode'=>'11'],
            ['name'=>'540','slug'=>'540','class'=>'md','purity'=>54,'carat'=>13,'carat_ratio'=>54.16,'barcode'=>'12'],
            ['name'=>'580','slug'=>'580','class'=>'md','purity'=>58,'carat'=>14,'carat_ratio'=>58.33,'barcode'=>'13'],
            ['name'=>'625','slug'=>'625','class'=>'md','purity'=>62.5,'carat'=>15,'carat_ratio'=>62.5,'barcode'=>'15'],
            ['name'=>'670','slug'=>'670','class'=>'md','purity'=>67,'carat'=>16,'carat_ratio'=>66.7,'barcode'=>'16'],
            ['name'=>'700','slug'=>'700','class'=>'23','purity'=>70,'carat'=>17,'carat_ratio'=>70.83,'barcode'=>'17'],
            ['name'=>'750','slug'=>'750','class'=>'23','purity'=>75,'carat'=>18,'carat_ratio'=>75,'barcode'=>'18'],
            ['name'=>'800','slug'=>'800','class'=>'23','purity'=>80,'carat'=>19,'carat_ratio'=>79.17,'barcode'=>'19'],
            ['name'=>'830','slug'=>'830','class'=>'23','purity'=>83,'carat'=>20,'carat_ratio'=>83.33,'barcode'=>'20'],
            ['name'=>'875','slug'=>'875','class'=>'23','purity'=>87.5,'carat'=>21,'carat_ratio'=>87.5,'barcode'=>'21'],
            ['name'=>'920','slug'=>'920','class'=>'24','purity'=>92,'carat'=>22,'carat_ratio'=>91.67,'barcode'=>'22'],
            ['name'=>'950','slug'=>'950','class'=>'24','purity'=>95,'carat'=>23,'carat_ratio'=>95.83,'barcode'=>'23'],
            ['name'=>'9999','slug'=>'9999','class'=>'24','purity'=>99.99,'carat'=>24,'carat_ratio'=>100.00,'barcode'=>'25'],
        ];

        \Illuminate\Support\Facades\DB::table('gold_standards')->insert($goldStandards);
    }
}
