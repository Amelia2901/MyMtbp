<?php

namespace Database\Seeders;

use App\Models\BannerDashboard;
use Illuminate\Database\Seeder;

class BannerDashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan data contoh ke tabel banner_dashboard
        BannerDashboard::create([
            'banner_photo' => 'example1.jpg',
            'banner_title' => 'Title 1',
            'banner_description' => 'This is the description for banner 1.',
        ]);

        BannerDashboard::create([
            'banner_photo' => 'example2.jpg',
            'banner_title' => 'Title 2',
            'banner_description' => 'This is the description for banner 2.',
        ]);

        BannerDashboard::create([
            'banner_photo' => 'example3.jpg',
            'banner_title' => 'Title 3',
            'banner_description' => 'This is the description for banner 3.',
        ]);
    }
}
