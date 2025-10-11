<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaketWisata2;
use App\Models\Itinerary;

class PaketWisata2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ============================
        // PAKET WISATA 1D
        // ============================
        $paket1d = PaketWisata2::create(['label' => '1D']);

        $itineraries1d = [
            ['Hari 1', '06.00 – 12.00', 'Perjalanan dari Medan → Bagas Godang'],
            ['Hari 1', '12.00 – 13.00', 'Makan siang di desa lokal'],
            ['Hari 1', '13.00 – 15.00', 'Kunjungan Rumah Adat Bagas Godang'],
            ['Hari 1', '15.00 – 16.30', 'Wisata Hutan Mangrove & jembatan kayu'],
            ['Hari 1', '16.30 – 17.30', 'Trekking ringan Bukit Pandang Matahari'],
            ['Hari 1', '17.30 – 22.30', 'Perjalanan kembali ke Medan'],
        ];

        foreach ($itineraries1d as $data) {
            Itinerary::create([
                'paket_wisata2_id' => $paket1d->id,
                'hari' => $data[0],
                'waktu' => $data[1],
                'deskripsi' => $data[2],
            ]);
        }

        // ============================
        // PAKET WISATA 2D1N
        // ============================
        $paket2d1n = PaketWisata2::create(['label' => '2D1N']);

        $itineraries2d1n = [
            ['Hari 1', '06.00 – 12.00', 'Perjalanan Medan → Bagas Godang'],
            ['Hari 1', '12.00 – 13.00', 'Makan siang di desa lokal'],
            ['Hari 1', '13.00 – 15.00', 'Kunjungan Rumah Adat Bagas Godang & workshop'],
            ['Hari 1', '15.00 – 17.00', 'Trekking Bukit Pandang Matahari'],
            ['Hari 1', '17.30 – 19.00', 'Check-in homestay'],
            ['Hari 1', '19.00 – 20.00', 'Makan malam + malam budaya'],

            ['Hari 2', '06.00 – 07.00', 'Sunrise di Bukit Pandang Matahari'],
            ['Hari 2', '07.00 – 08.00', 'Sarapan pagi di homestay'],
            ['Hari 2', '08.00 – 10.00', 'Wisata Hutan Mangrove'],
            ['Hari 2', '10.00 – 12.00', 'Kunjungan Air Terjun Paya Sejuk'],
            ['Hari 2', '12.00 – 18.00', 'Perjalanan kembali ke Medan'],
        ];

        foreach ($itineraries2d1n as $data) {
            Itinerary::create([
                'paket_wisata2_id' => $paket2d1n->id,
                'hari' => $data[0],
                'waktu' => $data[1],
                'deskripsi' => $data[2],
            ]);
        }

        // ============================
        // PAKET WISATA 3D2N
        // ============================
        $paket3d2n = PaketWisata2::create(['label' => '3D2N']);

        $itineraries3d2n = [
            // Hari 1
            ['Hari 1', '06.00 – 12.00', 'Perjalanan Medan → Bagas Godang'],
            ['Hari 1', '12.00 – 13.00', 'Check-in homestay & makan siang'],
            ['Hari 1', '13.00 – 15.00', 'Kunjungan Rumah Adat Bagas Godang'],
            ['Hari 1', '15.00 – 17.00', 'Trekking Bukit Pandang Matahari (sunset)'],
            ['Hari 1', '17.00 – 19.00', 'Makan malam & malam budaya'],

            // Hari 2
            ['Hari 2', '06.00 – 07.00', 'Sunrise Bukit Pandang Matahari'],
            ['Hari 2', '07.00 – 08.00', 'Sarapan pagi'],
            ['Hari 2', '08.00 – 12.00', 'Hutan Mangrove + workshop kerajinan tangan'],
            ['Hari 2', '12.00 – 17.00', 'Aktivitas pantai (berenang, bermain pasir)'],
            ['Hari 2', '17.00 – 19.00', 'Makan malam'],

            // Hari 3
            ['Hari 3', '06.00 – 08.00', 'Trekking Air Terjun Paya Sejuk'],
            ['Hari 3', '08.00 – 09.00', 'Sarapan & checkout homestay'],
            ['Hari 3', '09.00 – 15.00', 'Perjalanan kembali ke Medan'],
        ];

        foreach ($itineraries3d2n as $data) {
            Itinerary::create([
                'paket_wisata2_id' => $paket3d2n->id,
                'hari' => $data[0],
                'waktu' => $data[1],
                'deskripsi' => $data[2],
            ]);
        }
    }
}
