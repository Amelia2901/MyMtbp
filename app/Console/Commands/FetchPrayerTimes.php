<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\prayer_times;
use Carbon\Carbon;

class FetchPrayerTimes extends Command
{
    protected $signature = 'prayer:fetch';
    protected $description = 'Mengambil jadwal sholat dari API untuk satu bulan';

    public function handle()
    {
        $year = date('Y');
        $month = date('m');

        $apiUrl = "http://jadwal-sholat.raden.social:3000/getShalatbln?x=c20ad4d76fe97759aa27a0c99bff6710&y=eecca5b6365d9607ee5a9d336962c534&bln=$month&thn=$year";

        $response = Http::timeout(30)->get($apiUrl);

        if ($response->failed()) {
            $this->error("Gagal mengambil data dari API");
            return;
        }

        $data = $response->json();

        if ($data && isset($data['status']) && $data['status'] == 1 && isset($data['data'])) {
            foreach ($data['data'] as $key => $day) {
                if (!is_array($day) || !isset($day['tanggal'])) {
                    continue;
                }

                prayer_times::updateOrCreate(
                    ['tanggal' => $day['tanggal']],
                    [
                        'imsak'   => $day['imsak'] ?? null,
                        'subuh'   => $day['subuh'] ?? null,
                        'syuruk'  => $day['terbit'] ?? null,
                        'dzuhur'  => $day['dzuhur'] ?? null,
                        'ashar'   => $day['ashar'] ?? null,
                        'maghrib' => $day['maghrib'] ?? null,
                        'isya'    => $day['isya'] ?? null,
                        'sumber'  => 'API',
                        'is_edited' => false 
                    ]
                );
            }
        }
        
        // Menampilkan pesan sukses tanpa mencetak array
        $this->info("Jadwal sholat berhasil diperbarui.");
    }
}