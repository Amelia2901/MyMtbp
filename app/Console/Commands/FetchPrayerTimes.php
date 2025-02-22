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

        $curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $apiUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_TIMEOUT, 30); // Tambahkan timeout lebih lama
$response = curl_exec($curl);
$error = curl_error($curl);
curl_close($curl);

echo $response;

$data = json_decode($response, true);

if ($data && $data['status'] == 1) {
   foreach ($data as $day) {
                $date = $day['tanggal'];

                $existing = prayer_times::where('tanggal', $date)->first();
                if ($existing && $existing->is_edited) {
                    continue;
                }

                prayer_times::updateOrCreate(
                    [   'tanggal' => $day['tanggal'],
                        'imsak'   => $day['imsak'],
                        'subuh'   => $day['subuh'],
                        'syuruk'   => $day['terbit'],
                        'dzuhur'  => $day['dzuhur'],
                        'ashar'   => $day['ashar'],
                        'maghrib' => $day['maghrib'],
                        'isya'    => $day['isya'],
                        'sumber'  => 'API',
                        'is_edited' => false 
                    ]
                );
            }

            $this->info('Jadwal sholat berhasil diperbarui untuk bulan ini.');
} else {
    echo "Gagal mendapatkan data jadwal sholat.";
}

        
    }
}