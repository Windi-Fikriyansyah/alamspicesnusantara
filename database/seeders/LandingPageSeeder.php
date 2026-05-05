<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\HeroSection;
use App\Models\Stat;
use App\Models\AboutSection;
use App\Models\Feature;
use App\Models\Product;
use App\Models\Gallery;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class LandingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Site Settings
        $settings = [
            'site_name' => 'Alam Herbal Nusantaraports',
            'site_tagline' => 'Exports — Ekspor Rempah & Hasil Pertanian Premium',
            'site_description' => 'Eksportir tepercaya rempah dan hasil pertanian Indonesia: kopi, kakao, cengkeh, lada, dan pala ke pasar global dengan standar kualitas internasional.',
            'contact_email' => 'trade@verdania.co.id',
            'contact_phone' => '+62 857-1493-2577',
            'contact_address' => 'Jakarta Selatan, Indonesia',
            'footer_copy' => '© ' . date('Y') . ' Alam Herbal Nusantaraports. Seluruh hak dilindungi.',
            'footer_cert' => 'Bersertifikat ISO 22000 · HACCP · Organic EU',
        ];

        foreach ($settings as $key => $value) {
            Setting::create(['key' => $key, 'value' => $value]);
        }

        // Hero Section
        HeroSection::create([
            'badge_text' => 'From Nusantara to The World',
            'title' => 'Premium Indonesian',
            'title_highlight' => 'Coffee & Herbal Products',
            'description' => 'PT Alam Herbal Nusantara delivers high-quality green coffee beans and natural herbal products sourced directly from Indonesia’s finest regions. From farm to export, we ensure consistency, authenticity, and excellence in every product we supply.',
            'image' => 'images/hero-plantation.jpg',
            'primary_button_text' => 'Minta Penawaran',
            'secondary_button_text' => 'Lihat Produk',
        ]);

        // Stats
        $stats = [
            ['value' => '30+', 'label' => 'Negara Tujuan Ekspor', 'order' => 1],
            ['value' => '1.200', 'label' => 'Petani Mitra', 'order' => 2],
            ['value' => '15thn', 'label' => 'Pengalaman Industri', 'order' => 3],
            ['value' => '8', 'label' => 'Sertifikasi Global', 'order' => 4],
        ];
        foreach ($stats as $stat) {
            Stat::create($stat);
        }

        // About Section
        AboutSection::create([
            'badge_text' => 'About Us',
            'title' => 'Premium Indonesian Coffee & Herbal Products for Global Markets.',
            'content' => "PT Alam Herbal Nusantara is a trusted Indonesian supplier of premium green coffee beans and natural herbal products. We are driven by a commitment to quality, consistency, and long-term partnerships.\n\nWorking directly with local farmers across West Java, Central Java, East Java, and other regions, we carefully control every stage of production—from planting and harvesting to processing and distribution. This ensures that every product meets international standards and delivers authentic Indonesian flavor.\n\nWith a strong understanding of the global market, we aim to bring the best of Indonesia’s coffee and herbal heritage to customers worldwide.",
            'image' => 'images/farmers.jpg',
            'experience_label' => 'Direct trade — no intermediaries',
            'experience_value' => '100%',
        ]);

        // Features
        $features = [
            [
                'title' => 'Tersertifikasi',
                'description' => 'ISO 22000, HACCP, Organic EU & USDA untuk jaminan keamanan pangan.',
                'order' => 1
            ],
            [
                'title' => 'Sumber Berkelanjutan',
                'description' => 'Bermitra langsung dengan koperasi petani—rantai pasok transparan dan adil.',
                'order' => 2
            ],
            [
                'title' => 'Logistik Global',
                'description' => 'FOB, CIF, hingga DDP. Jangkauan ekspor ke Eropa, Amerika, Asia & Timur Tengah.',
                'order' => 3
            ],
            [
                'title' => 'Quality Control',
                'description' => 'Cupping, sortasi, dan laboratorium internal memastikan konsistensi setiap batch.',
                'order' => 4
            ],
        ];
        foreach ($features as $feature) {
            Feature::create($feature);
        }

        // Products
        $products = [
            ['name' => 'Kopi Arabika', 'category' => 'Specialty single-origin', 'image' => 'images/product-coffee.jpg', 'order' => 1],
            ['name' => 'Kakao Fermentasi', 'category' => 'Premium fine flavor', 'image' => 'images/product-cocoa.jpg', 'order' => 2],
            ['name' => 'Cengkeh Utuh', 'category' => 'Hand-picked Maluku', 'image' => 'images/product-cloves.jpg', 'order' => 3],
            ['name' => 'Lada Hitam', 'category' => 'Lampung grade A', 'image' => 'images/product-pepper.jpg', 'order' => 4],
        ];
        foreach ($products as $product) {
            Product::create($product);
        }

        // Gallery
        $galleries = [
            ['title' => 'Pemanenan Selektif', 'subtitle' => 'Hanya biji terbaik yang dipilih.', 'image' => 'images/gallery-1.png', 'order' => 1],
            ['title' => 'Quality Control', 'subtitle' => 'Inspeksi laboratorium ketat.', 'image' => 'images/gallery-2.png', 'order' => 2],
            ['title' => 'Penyimpanan Terpadu', 'subtitle' => 'Menjaga kesegaran komoditas.', 'image' => 'images/gallery-3.png', 'order' => 3],
            ['title' => 'Ekspor Global', 'subtitle' => 'Siap kirim ke seluruh benua.', 'image' => 'images/gallery-4.png', 'order' => 4],
        ];
        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }

        // Testimonials
        $testimonials = [
            [
                'content' => 'Kualitas biji kopi dari Verdania sangat konsisten. Mereka memahami spesifikasi teknis yang kami butuhkan untuk pasar Eropa. Komunikasi mereka sangat profesional dan transparan.',
                'author_name' => 'Marcus Weber',
                'author_role' => 'Green Coffee Buyer — Hamburg, Germany',
                'author_initials' => 'MW',
                'order' => 1
            ],
            [
                'content' => 'Verdania bukan sekadar supplier, tapi partner strategis. Produk rempah mereka memiliki profil aroma yang kuat dan murni. Sangat direkomendasikan untuk industri manufaktur pangan.',
                'author_name' => 'Li Chen',
                'author_role' => 'Sourcing Director — Shanghai, China',
                'author_initials' => 'LC',
                'order' => 2
            ],
            [
                'content' => 'Logistik adalah bagian tersulit dalam impor, tapi tim Verdania menangani dokumentasi dengan sempurna. Barang sampai di pelabuhan kami tepat waktu dan dalam kondisi prima.',
                'author_name' => 'Ahmed Hassan',
                'author_role' => 'Import Manager — Dubai, UAE',
                'author_initials' => 'AH',
                'order' => 3
            ],
        ];
        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
