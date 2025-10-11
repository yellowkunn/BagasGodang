<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kontak;

class KontakSeeder extends Seeder
{
    public function run(): void
    {
        Kontak::create([
            'title' => 'Kontak',
            'background' => 'images/bg2.jpg',
            'lokasi' => 'Kelurahan Huta Godang, Kec. Ulu Pungkut, Kabupaten Mandailing Natal, Sumatera Utara',
            'maps'   => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63834.043238042555!2d99.78460018618!3d0.5600730999321379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302a5188270a4fc1%3A0xf3de2fab3d4c75e9!2sHuta%20Godang%2C%20Kec.%20Ulu%20Pungkut%2C%20Kabupaten%20Mandailing%20Natal%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1760173509560!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'whatsapp'     => '-',
            'email'  => '-',
        ]);
    }
}
