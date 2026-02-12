<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $certifications = [
            ['name' => 'ISO 9001', 'issuer' => 'ISO', 'country' => 'International', 'edition' => '2015', 'year' => 2016, 'description' => 'Standar sistem manajemen mutu internasional.', 'logo' => 'iso_9001.png'],
            ['name' => 'Halal Certification', 'issuer' => 'Majelis Ulama Indonesia', 'country' => 'Indonesia', 'edition' => null, 'year' => 2018, 'description' => 'Sertifikasi halal untuk produk dan layanan.', 'logo' => 'halal_certification.png'],
            ['name' => 'SNI (Standar Nasional Indonesia)', 'issuer' => 'BSN (Badan Standardisasi Nasional)', 'country' => 'Indonesia', 'edition' => null, 'year' => 2017, 'description' => 'Standar nasional untuk berbagai produk di Indonesia.', 'logo' => 'sni.png'],
        ];

        \Illuminate\Support\Facades\DB::table('certifications')->insert($certifications);
    }
}
