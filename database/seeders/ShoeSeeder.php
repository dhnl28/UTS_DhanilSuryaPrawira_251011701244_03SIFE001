<?php

namespace Database\Seeders;

use App\Models\Shoe;
use Illuminate\Database\Seeder;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shoes = [
            [
                'name'        => 'Air Zoom Pegasus 40',
                'brand'       => 'Nike',
                'price'       => 1899000,
                'size_range'  => '38-45',
                'image'       => 'nike-pegasus.jpg',
                'sport_type'  => 'Running',
                'description' => 'Air Zoom Pegasus 40 hadir sebagai sepatu lari harian andalan Nike. Dibekali unit Air Zoom di bagian forefoot untuk responsivitas tinggi, serta foam React yang ringan dan empuk di midsole. Cocok untuk pelari pemula hingga menengah yang menginginkan kenyamanan jarak jauh tanpa mengorbankan kecepatan.',
            ],
            [
                'name'        => 'Ultraboost Light',
                'brand'       => 'Adidas',
                'price'       => 2500000,
                'size_range'  => '39-46',
                'image'       => 'adidas-ultraboost.jpg',
                'sport_type'  => 'Running',
                'description' => 'Ultraboost Light adalah evolusi terbaru dari seri Ultraboost legendaris Adidas. Menggunakan teknologi LIGHTBOOST foam yang 30% lebih ringan dari Boost generasi sebelumnya, sepatu ini memberikan energy return luar biasa di setiap langkah. Upper Primeknit+ yang adaptif membungkus kaki secara natural untuk kenyamanan sepanjang hari.',
            ],
            [
                'name'        => 'Gel-Kayano 30',
                'brand'       => 'Asics',
                'price'       => 2200000,
                'size_range'  => '40-45',
                'image'       => 'asics-kayano.jpg',
                'sport_type'  => 'Running',
                'description' => 'Merayakan 30 tahun warisan stabilitas, Gel-Kayano 30 dari Asics dirancang khusus untuk overpronator yang membutuhkan dukungan maksimal. Teknologi 4D Guidance System dan FF Blast+ Eco foam memberikan kombinasi sempurna antara stabilitas, bantalan, dan efisiensi energi untuk lari jarak jauh.',
            ],
            [
                'name'        => 'Mercurial Vapor 15',
                'brand'       => 'Nike',
                'price'       => 3200000,
                'size_range'  => '38-44',
                'image'       => 'nike-mercurial.jpg',
                'sport_type'  => 'Sepak Bola',
                'description' => 'Dirancang untuk pemain dengan kecepatan sebagai senjata utama, Mercurial Vapor 15 menghadirkan upper Vaporposite yang ultra-tipis untuk sentuhan bola yang presisi. Outsole All Conditions Control (ACC) menjaga performa tetap konsisten baik di lapangan basah maupun kering. Pilihan para pemain sayap dan penyerang cepat.',
            ],
            [
                'name'        => 'Predator Accuracy',
                'brand'       => 'Adidas',
                'price'       => 2800000,
                'size_range'  => '39-45',
                'image'       => 'adidas-predator.jpg',
                'sport_type'  => 'Sepak Bola',
                'description' => 'Predator Accuracy lahir untuk pemain yang mengandalkan kontrol dan akurasi umpan. Zone Skin texture pada upper memberikan grip ekstra saat menggiring dan menendang bola. Konstruksi low-cut memungkinkan kebebasan gerak penuh, sementara outsole AG/FG hybrid cocok di berbagai jenis lapangan.',
            ],
            [
                'name'        => 'LeBron XXI',
                'brand'       => 'Nike',
                'price'       => 3500000,
                'size_range'  => '40-47',
                'image'       => 'nike-lebron.jpg',
                'sport_type'  => 'Basket',
                'description' => 'LeBron XXI adalah sepatu signature LeBron James yang menggabungkan kekuatan dan kelincahan dalam satu desain. Bantalan Air Max di heel memberikan perlindungan saat mendarat, sementara Zoom Air di forefoot mendukung ledakan akselerasi. Upper mesh yang diperkuat memberikan dukungan lateral yang dibutuhkan untuk pemain berpostur besar.',
            ],
            [
                'name'        => 'Curry 11',
                'brand'       => 'Under Armour',
                'price'       => 2400000,
                'size_range'  => '40-46',
                'image'       => 'ua-curry.jpg',
                'sport_type'  => 'Basket',
                'description' => 'Curry 11 dirancang bersama Stephen Curry untuk mendukung gaya bermain shoot-first guard yang dinamis. Teknologi UA Flow foam memberikan grip luar biasa tanpa outsole karet konvensional, memungkinkan perubahan arah yang cepat dan mulus. Desain yang ringan mendukung pergerakan tanpa henti di sepanjang pertandingan.',
            ],
            [
                'name'        => 'Gel-Resolution 9',
                'brand'       => 'Asics',
                'price'       => 1950000,
                'size_range'  => '39-44',
                'image'       => 'asics-resolution.jpg',
                'sport_type'  => 'Tenis',
                'description' => 'Gel-Resolution 9 adalah sepatu tenis premium Asics yang dipercaya oleh pemain profesional di seluruh dunia. Teknologi GEL di heel meredam benturan saat berlari dan berhenti mendadak. Outsole AHAR+ yang tahan lama cocok untuk semua jenis permukaan lapangan, sementara upper yang diperkuat memberikan stabilitas maksimal saat rally panjang.',
            ],
            [
                'name'        => 'Speedmate 200',
                'brand'       => 'Specs',
                'price'       => 450000,
                'size_range'  => '38-43',
                'image'       => 'specs-speedmate.jpg',
                'sport_type'  => 'Futsal',
                'description' => 'Specs Speedmate 200 adalah pilihan cerdas untuk pemain futsal lokal yang menginginkan performa tanpa harga selangit. Sol karet non-marking memberikan grip optimal di lapangan vinyl dan parket indoor. Upper sintetis yang ringan memudahkan sentuhan bola yang responsif, cocok untuk pemain yang mengandalkan kecepatan dan dribbling.',
            ],
            [
                'name'        => 'Thunder Bolt',
                'brand'       => 'Ortuseight',
                'price'       => 389000,
                'size_range'  => '39-44',
                'image'       => 'ortuseight-thunder.jpg',
                'sport_type'  => 'Futsal',
                'description' => 'Thunder Bolt dari Ortuseight membuktikan bahwa brand lokal mampu bersaing di level tertinggi. Desain upper yang ergonomis mengikuti kontur kaki untuk kenyamanan maksimal. Teknologi sol anti-slip khusus lapangan futsal indoor memberikan traksi yang konsisten, sementara harganya yang terjangkau menjadikannya favorit di lapangan-lapangan futsal Indonesia.',
            ],
        ];

        foreach ($shoes as $shoe) {
            Shoe::create($shoe);
        }
    }
}
