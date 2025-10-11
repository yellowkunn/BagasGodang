<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DestinasiWisata;

class DestinasiWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DestinasiWisata::create([
            'title' => 'Destinasi Wisata',
            'background' => 'images/bg2.jpg',
        ]);
        $data = [
            [
                'title' => 'Destinasi Wisata',
                'background' => 'images/bg2.jpg',
                'cardTitle' => 'Bagas Godang – Rumah Adat Mandailing',
                'gambar' => 'images/destinasi/destinasi1.png',
                'cardContent' => "Bagas Godang adalah rumah adat tradisional suku Mandailing yang berfungsi sebagai tempat tinggal raja dan pusat kegiatan adat. Bangunannya berbentuk rumah panggung besar dengan atap melengkung khas, dihiasi ornamen geometris dan kaligrafi Islam. Di dalamnya terdapat artefak budaya dan pustaha (naskah kuno) yang bernilai sejarah tinggi.\n\n📍 Lokasi: Huta Godang, Kecamatan Ulu Pungkut, Kabupaten Mandailing Natal, Sumatera Utara."
            ],
            [
                'title' => 'Destinasi Wisata',
                'background' => 'images/bg2.jpg',
                'cardTitle' => 'Hutan Mangrove Bagas Godang',
                'gambar' => 'images/destinasi/destinasi2.jpg',
                'cardContent' => "Hutan mangrove di sekitar Bagas Godang berfungsi sebagai ekosistem penyangga pesisir dan habitat berbagai biota laut. Selain itu, hutan ini juga mendukung ekowisata dan pemberdayaan masyarakat pesisir melalui pengelolaan berbasis UMKM.\n\n📍 Lokasi: Pesisir sekitar Bagas Godang, Mandailing Natal"
            ],
            [
                'title' => 'Destinasi Wisata',
                'background' => 'images/bg2.jpg',
                'cardTitle' => 'Gunung Sorik Marapi',
                'gambar' => 'images/destinasi/destinasi3.jpg',
                'cardContent' => "Gunung Sorik Marapi adalah gunung berapi aktif yang terletak di Kecamatan Puncak Sorik Marapi. Destinasi ini cocok bagi para pendaki yang ingin menikmati pemandangan alam dan udara sejuk pegunungan. Gunung ini juga dikenal dengan keindahan alamnya yang memukau."
            ],
        ];

        foreach ($data as $item) {
            DestinasiWisata::create($item);
        }
    }
}
