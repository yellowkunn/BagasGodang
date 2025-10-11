<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dashboard;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hero Section
        Dashboard::create([
            'section' => 'hero',
            'title1' => '',
            'title2' => 'BAGAS GODANG',
            'background' => 'images/bg1.jpg',
        ]);

        // Tentang Desa Wisata
        Dashboard::create([
            'section' => 'tentang',
            'title1' => '',
            'title2' => 'BAGAS GODANG',
            'konten' => 'Bagas Godang terletak di Kelurahan Huta Godang, Kecamatan Ulu Pungkut, Kabupaten Mandailing Natal, Sumatera Utara. Kawasan ini dikenal sebagai pusat budaya Mandailing yang memiliki rumah adat megah bernama Bagas Godang, lengkap dengan Sopo Godang dan alaman bolak sebagai tempat musyawarah adat. Terletak di wilayah perbukitan dengan udara sejuk, lingkungan sekitar Bagas Godang menyuguhkan pemandangan alam yang asri dan menenangkan. Keberadaan kompleks adat ini tidak hanya menjadi simbol identitas masyarakat Mandailing, tetapi juga menjadi daya tarik wisata budaya dan sejarah di Mandailing Natal. Pemerintah daerah telah melakukan revitalisasi dan pemugaran untuk melestarikan serta memperkuat fungsi Bagas Godang sebagai warisan budaya dan destinasi wisata unggulan di Sumatera Utara.',
            'background' => 'images/bagasgodang.jpg',
        ]);

        // Destinasi Wisata Section
        Dashboard::create([
            'section' => 'destinasi',
            'title1' => 'Destinasi Wisata BAGAS GODANG',
            'konten' => 'Objek Wisata Desa Dokan adalah Rumah Adat Mandailing, Hutan Mangrove Bagas Godang, dan Gunung Sorik Marapi',
        ]);

        // Paket Wisata Section
        Dashboard::create([
            'section' => 'paket',
            'title1' => 'Paket Wisata Pilihan',
        ]);
    }
}
