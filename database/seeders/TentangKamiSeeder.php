<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class TentangKamiSeeder extends Seeder
{
    public function run(): void
    {
        AboutUs::create([
            'title' => 'Bagas Godang',
            'background' => 'images/bg2.jpg',
            'content' => "Bagas Godang berada di Kelurahan Huta Godang, Kecamatan Ulu Pungkut, Kabupaten Mandailing Natal, Sumatera Utara. Bangunan tradisional ini merupakan rumah adat khas suku Mandailing yang dibangun dari kayu dengan arsitektur megah khas Bagas Godang, lengkap dengan Sopo Godang dan alaman bolak sebagai tempat musyawarah adat. Kompleks Bagas Godang dikenal sebagai pusat kehidupan adat masyarakat Mandailing yang sarat nilai sejarah, sosial, dan budaya. Bagas Godang pernah meraih juara tiga pada Anugerah Pesona Indonesia (API) Award tahun 2022 dalam kategori Kampung Adat, berkat keunikan arsitekturnya serta keteguhan masyarakat dalam mempertahankan tradisi leluhur. Pemerintah Provinsi Sumatera Utara kemudian melakukan revitalisasi dan pemugaran cagar budaya ini sebagai upaya pelestarian serta pengembangan destinasi wisata heritage. Revitalisasi tersebut diresmikan oleh Gubernur Sumatera Utara pada tahun 2023 sebagai bentuk komitmen menjaga warisan budaya lokal. Secara arsitektural, Bagas Godang memiliki ciri khas berupa atap tarup silengkung menyerupai bentuk pedati, berdiri di atas kolong kayu tinggi, dan diakses melalui tangga menuju ruang utama. Keindahan struktur dan nilai filosofi yang terkandung di dalamnya menjadikan Bagas Godang sebagai simbol identitas masyarakat Mandailing serta daya tarik wisata budaya unggulan di Kabupaten Mandailing Natal.",
            'visi' => 'Visi',
            'visiContent' => 'Terwujudnya Destinasi Pariwisata Tapanuli Selatan Yang Berwawasan Lingkungan dan LestarI',
            'misi' => 'Misi',
            'misiContent' => json_encode([
                'destinasi dan daya tarik wisata yang didukung dengan prasarana umum, fasilitas umum dan fasilitas pariwisata untuk menjamin aksesibilitas dan konektifitas pada semua DPK dan KSPK untuk meningkatkan kesejateraan masyarakat dan pendapatan asli daerah',
                'pemasaran destinasi dan daya tarik pariwisata melalui pelibatan dan kerjasama dengan pemangku kepentingan kepariwisataan kabupaten, provinsi dan nasional dengan menjadikan kebudayaan Tapanuli Selatan sebagai karakteristik kepariwisataan kabupaten',
                'industri pariwisata dengan dukungan sumber daya manusia kepariwisataan yang berwawasan, mandiri, terampil, berjiwa keriwirausahaan, perduli pada nilai agama, budaya dan lingkugan serta kearifan masyarakat setempat',
                'kelembagaan kepariwisataan daerah yang modern dan profesional yang didukung oleh sarana dan prasarana berbasis teknologi dan sumber daya manusia yang handal, yang mampu mengemban pembangunan dan pengembangan destinasi, industri dan pemasaran pariwisata padatingkat daerah, nasional dan mancanegara',
            ]),
            'gambar' => 'images/bagasgodang2.jpg'
        ]);
    }
}
