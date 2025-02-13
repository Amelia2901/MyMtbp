<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="{{ asset('assets/img/website/logo_masjid.svg') }}" rel="icon">
    {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masjid Bumi Prima</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/websiteStyle.css') }}">
    <!-- font style  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sansita+Swashed:wght@300..900&display=swap"
        rel="stylesheet">
    <!-- icon from fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        /* .box-icon {
        margin-right: 1800px;
        z-index: 100;
    } */

        .box-icon {
            /* margin-right: -100px; */
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
        }

        .box-icon .icon {
            background-color: white;
            border-radius: 50%;
            color: #046245;
            z-index: 2;
        }

        a.dropdown-filter.active {
            background: #583e31;
        }

        ul li a.dropdown-filter {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="link">
                <img src="{{ asset('assets/img/website/logo_masjid.svg') }}" alt="">
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="{{ url('/about') }}"> Tentang Kami</a></li>
                    <li><a href="{{ url('/schedule') }}">Jadwal Shalat & Kegiatan</a></li>
                    <li><a href="{{ url('/infaq') }}">Donasi</a></li>
                    <li><a href="{{ url('/contact') }}">Kontak</a></li>
                    <li><a href="{{ url('/zakat') }}">Zakat</a></li>
                </ul>
            </div>




            <div class="medsos" style="display: flex;">
                <div class="d-none d-md-block">
                    <div class="searchbar position-relative">
                        <input type="text" placeholder="Pencarian..." class="form-control ps-4" name="searchbar"
                            id="searchbar" oninput="PencarianKonten()" style="border: none;">
                        <i class="bi bi-search position-absolute"
                            style="right: 15px; top: -30%; transform: translateY(50%);"></i>
                    </div>
                </div>
                <div class="box-medsos instagram" style="display: none;">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <a href="https://www.youtube.com/@MasjidBumiPrimaCimahi" style="display: block; text-decoration: none;">
                    <div class="box-medsos youtube">
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </a>
                <div class="box-medsos whatsapp" style="display: none;">
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
                <a href="login.php" style="display: block; text-decoration: none;">
                    <div class="box-medsos user">
                        <i class="fa-solid fa-user"></i>
                    </div>
                </a>
            </div>
            <div class="hamburger-mobile" style="display: none;" onclick="toggleSidebar()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="d-block d-md-none">
            <div class="floating-sidebar">
                <a href="#"><i class="fa-solid fa-house"></i> <span>Home</span></a>
                <a href="{{ url('/about') }}"><i class="fa-solid fa-users"></i> <span>Tentang Kami</span></a>
                <a href="{{ url('/schedule') }}"><i class="fa-solid fa-calendar"></i> <span>Jadwal Shalat</span></a>
                <a href="{{ url('/donation') }}"><i class="fa-solid fa-hand-holding-heart"> </i>
                    <span>Donasi</span></a>
                <a href="{{ url('/contact') }}"><i class="fa-solid fa-hand-holding-heart"></i>
                    <span>Kontak</span></a>
                <a href="{{ url('/zakat') }}"><i class="fa-solid fa-hand-holding-heart"></i> <span>Zakat</span></a>
            </div>
        </div>
    </div>




    <div class="slider">
        <img src="{{ asset('assets/img/website/slider.jpg') }}" alt="">
        <div class="content">
            <div class="isi-content">
                <h1>
                    Masjid Bumi Prima
                </h1>
                <p>
                    "Merajut Iman, Membangun Umat"
                </p>
                <div style="display: flex; justify-content: center;">
                    <a class="btn button-selengkapnya" onclick="scrollKebawah()" style="text-align: center; margin: 0;"
                        align="center">
                        <i class="fas fa-arrow-down">
                        </i>
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </div>



    <div class="container-page" id="container-page">

        <!-- header buat desktop -->

        <section id="JadwalShalat">
            <div class="d-none d-md-block">
                <div class="header">
                    <div class="row">
                        <p class="jadwal" id="jadwal"></p>
                        <h1 class="isi" id="isi"></h1>
                        <p class="mulai">Akan dimulai dalam</p>
                        <div class="jam">
                            <div class="hitung-mundur">
                                <p id="jam-awal" style="margin: 0;">0</p>
                            </div>
                            <div class="hitung-mundur">
                                <p id="jam-akhir" style="margin: 0;">1</p>
                            </div>
                            <p class="titik-dua">:</p>
                            <div class="hitung-mundur">
                                <p id="menit-awal" style="margin: 0;">2</p>
                            </div>
                            <div class="hitung-mundur">
                                <p id="menit-akhir" style="margin: 0;">1</p>
                            </div>
                            <p class="titik-dua">:</p>
                            <div class="hitung-mundur">
                                <p id="detik-awal" style="margin: 0;">3</p>
                            </div>
                            <div class="hitung-mundur">
                                <p id="detik-akhir" style="margin: 0;">0</p>
                            </div>
                        </div>
                    </div>
                    <div class="vl"></div>
                    <div class="row">
                        <div class="shalat">
                            <div class="box-sholat">
                                <p style="font-size: 20px; font-weight: 800px; width:150px;">Shalat Shubuh </p>
                                <p style="font-size: 15px; font-weight: 500px; color: white; margin-top:8px">
                                    04.19 WIB
                                </p>
                            </div>
                            <div class="box-sholat">
                                <p style="font-size: 20px; font-weight: 600px; width:150px;">Shalat Dzuhur </p>
                                <p style="font-size: 15px; font-weight: 500px; color: white; margin-top:8px">
                                    11.58 WIB
                                </p>
                            </div>
                            <div class="box-sholat">
                                <p style="font-size: 20px; font-weight: 600px; width:150px;">Shalat Magrib</p>
                                <p style="font-size: 15px; font-weight: 500px; color: white; margin-top:8px">
                                    18.13 WIB
                                </p>
                            </div>
                        </div>
                        <div class="shalat">
                            <div class="box-sholat">
                                <p style="font-size: 20px; font-weight: 600px; width:150px;">Syuruk/Terbit </p>
                                <p style="font-size: 15px; font-weight: 500px; color: white; margin-top:8px">
                                    05.43 WIB
                                </p>
                            </div>
                            <div class="box-sholat">
                                <p style="font-size: 20px; font-weight: 600px; width:150px;">Shalat Ashar </p>
                                <p style="font-size: 15px; font-weight: 500px; color: white; margin-top:8px">
                                    15.23 WIB
                                </p>
                            </div>
                            <div class="box-sholat">
                                <p style="font-size: 20px; font-weight: 600px; width:150px;">Shalat Isya </p>
                                <p style="font-size: 15px; font-weight: 500px; color: white; margin-top:8px">
                                    19.28 WIB
                                </p>
                            </div>
                        </div>
                        <!-- <div class="shalat">
                    <p>Syuruk/Terbit <br> 05.43 WIB</p>
                    <p>Shalat Ashar <br> 15.23 WIB</p>
                    <p>Shalat Isya <br> 19.28 WIB</p>
                </div> -->
                    </div>
                </div>
            </div>
            <!-- header buat mobile -->
            <div class="d-block d-md-none">
                <div class="header">
                    <div class="row">
                        <p class="jadwal">Jadwal Shalat Selanjutnya</p>
                        <h1 class="isi">Shalat Maghrib</h1>
                        <p class="mulai">Akan dimulai dalam</p>
                        <div class="jam">
                            <p class="jam-awal hitung-mundur">0</p>
                            <p class="jam-akhir hitung-mundur">1</p>
                            <p class="titik-dua">:</p>
                            <p class="menit-awal hitung-mundur">2</p>
                            <p class="menit-akhir hitung-mundur">1</p>
                            <p class="titik-dua">:</p>
                            <p class="detik-awal hitung-mundur">3</p>
                            <p class="detik-akhir hitung-mundur">0
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="shalat">
                        <br>
                        <h1>Jadwal Shalat Hari ini</h1>
                        <div class="container-sholat">
                            <div class="box-sholat sudah-lewat">
                                <p>Shalat Shubuh </p>
                                <p>04.19 WIB</p>
                            </div>
                            <div class="box-sholat sudah-lewat">
                                <p>Shalat Dzuhur </p>
                                <p>11.58 WIB</p>
                            </div>
                            <div class="box-sholat active">
                                <p>Shalat Magrib</p>
                                <p>18.13 WIB</p>
                            </div>
                            <div class="box-sholat">
                                <p>Syuruk/Terbit </p>
                                <p>05.43 WIB</p>
                            </div>
                            <div class="box-sholat">
                                <p>Shalat Ashar </p>
                                <p>15.23 WIB</p>
                            </div>
                            <div class="box-sholat">
                                <p>Shalat Isya </p>
                                <p>19.28 WIB</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="shalat">
                    <p>Syuruk/Terbit <br> 05.43 WIB</p>
                    <p>Shalat Ashar <br> 15.23 WIB</p>
                    <p>Shalat Isya <br> 19.28 WIB</p>
                </div> -->
                </div>
            </div>
        </section>



        <br>
        <div class="headerkegiatan">
            <h1 style="margin-left: 35px; color: black; font-family: 'Montserrat', serif; font-size: 30px;">
                Kalender
                Kegiatan</h1>
            <!-- <button><i class="fa-solid fa-filter"></i> Terbaru</button> -->
            <div class="dropdown-center">
                <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-filter"></i> <span id="buttonFilter">Terbaru</span></button>
                </button>
                <ul class="dropdown-menu" style="width: 108px !important;">
                    <li style="display:flex; justify-content: center;"><a class="dropdown-item dropdown-filter active"
                            onclick="setFilter('Terbaru', this)">Terbaru</a>
                    </li>
                    <li><a class="dropdown-item dropdown-filter" onclick="setFilter('Terlama', this)">Terlama</a></li>
                </ul>
            </div>
        </div>
        <div class="Kalender-kegiatan">
            <div class="row-kalender">
                <img style="border-radius: 20px; width: 600px; height: 350px; object-fit: cover;"
                    src="https://bengkuluekspress.disway.id/upload/1623f9ba1b64cadbbdf6658f7addedc0.jpg">
                <h3 style="color: black; margin-top: 10px; margin-bottom: 20px; font-size:20px; font-weight: 600;">
                    Seminar Keutamaan Shalat Subuh Berjamaah</h3>
                <div class="keterangan">
                    <div class="row-keterangan">
                        <p style="color: black; font-size:14px; font-weight:450;"> <i style="color: #F2AB43;"
                                class="fa-regular fa-clock"></i> Sabtu, 20
                            Januari 2025,</p>
                        <p style="color: black; font-size:14px; font-weight:450; margin-top:-15px; margin-left:18px;">
                            pukul 05.00-07.00 WIB</p>
                    </div>

                    <div class="row-keterangan">
                        <p style="color: black; font-size:14px; font-weight:450;"> <i style="color: #F2AB43"
                                class="fa-solid fa-location-dot"></i> Aula
                            Utama Masjid Al-Falah</p>
                        <p style="color: black; font-size:14px; font-weight:450; margin-top:10px;"> <i
                                style=" color: #F2AB43;" class="fa-regular fa-user"></i> Ustadz
                            Dr.Ahmad Fauzan</p>
                    </div>

                </div>
            </div>
            <div class="row-berita">
                <div class="content-berita">
                    <div class="foto-berita">
                        <img src="https://sumbar.kemenag.go.id/v2/uploads/images/image_1920x_5c90b8225737e.jpg">
                    </div>
                    <div class="isi-berita">
                        <p style="color: black; font-size:13px; font-weight:600; margin-top:-15px;"><i
                                style=" color: #F2AB43;" class="fa-regular fa-clock"></i> Sabtu, 15 Februari
                            2025</p>
                        <h3>Kajian Muslimah: Peran Wanita dalam Membangun Generasi Qur'an.</h3>
                        <p>Deskripsi: Kajian khusus muslimah membahas pentingnya peran perempuan dalam mendidik
                            keluarga
                            berlandaskan nilai-nilai Qur'an</p>
                    </div>

                </div>
                <br>
                <div class="content-berita">
                    <div class="foto-berita">
                        <img src="https://i.pinimg.com/736x/62/4d/23/624d2308e64439524b793d963e673bba.jpg">
                    </div>
                    <div class="isi-berita">
                        <p style="color: black; font-size:13px; font-weight:600; margin-top:-15px;"><i
                                style=" color: #F2AB43;" class="fa-regular fa-clock"></i> Sabtu, 15 Februari
                            2025</p>
                        <h3>Kajian Muslimah: Peran Wanita dalam Membangun Generasi Qur'an.</h3>
                        <p>Deskripsi: Kajian khusus muslimah membahas pentingnya peran perempuan dalam mendidik
                            keluarga
                            berlandaskan nilai-nilai Qur'an</p>
                    </div>

                </div>
                <br>
                <div class="content-berita">
                    <div class="foto-berita">
                        <img src="https://th.bing.com/th/id/OIP.Pkzq6-jkHp1zMbde3ITifgHaES?rs=1&pid=ImgDetMain">
                    </div>
                    <div class="isi-berita">
                        <p style="color: black; font-size:13px; font-weight:600; margin-top:-15px;"><i
                                style="color: #F2AB43;" class="fa-regular fa-clock"></i> Sabtu, 15 Februari 2025
                        </p>
                        <h3>Kajian Muslimah: Peran Wanita dalam Membangun Generasi Qur'an.</h3>
                        <p>Deskripsi: Kajian khusus muslimah membahas pentingnya peran perempuan dalam mendidik
                            keluarga
                            berlandaskan nilai-nilai Qur'an</p>
                    </div>

                </div>
            </div>

        </div>

        <div class="infaq">
            <div class="row">
                <h1>Berikan Kebaikan, Tebarkan Keberkahan</h1>
                <p style="margin-top:20px;">Salurkan infaq terbaik Anda untuk mendukung kegiatan ibadah, pendidikan,
                    dan
                    sosial di masjid kami. Setiap kontribusi adalah investasi untuk akhirat yang penuh pahala.
                </p>
                <div>
                    <a class="button-selengkapnya" href="{{ url('/infaq') }}">
                        <i class="fas fa-arrow-down">
                        </i>
                        Salurkan Infaq Anda
                    </a>
                </div>

            </div>
        </div>



        <!-- address and send message -->
        <section id="Kontak">
            <div class="Alamat">
                <div class="row-alamat" style="width: 50%; ">
                    <h1 style="color: #000000; font-family: 'Montserrat', serif; margin-left:10px; font-size: 40px;"
                        class="dalamkebaikan">Bersama
                        Dalam Kebaikan,
                        <br>
                        Mari Terhubung
                    </h1>
                    <h1 style="color: #525252; font-family: 'Montserrat', serif;font-size: 23px;margin-left:10px;"
                        class="kontaklokasi">
                        Kontak &
                        Lokasi Masjid
                        <!-- <hr> -->
                    </h1>

                    <div class="row-alamat" style="margin-left: 30px; margin-top: 30px; margin-right: 20px;">
                        <div class="kotak-1" style="display:flex;">
                            <div class="kotak-alamat">
                                <div class="isi-kotak">
                                    <p style="margin-bottom: 20px;"><i class="fa-solid fa-phone fa-2xl"></i></p>
                                    <p style="font-weight: bold;">+62 813-2318-1970</p>
                                    <p style="font-weight: 300px; font-size: 14px;">Telepon Masjid Bumi Prima
                                    </p>
                                </div>
                            </div>
                            <div class="kotak-alamat" style="background: white; color: black;">
                                <div class="isi-kotak">
                                    <p style="margin-bottom: 20px;"><i class="fa-brands fa-instagram fa-2xl"></i></p>
                                    <p style="font-weight: bold;">@masjidbumiprima</p>
                                    <p style="font-weight: 300px; font-size: 14px;">Instagram Masjid Bumi Prima
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="kotak-2" style="display:flex;">
                            <a href="https://www.youtube.com/@MasjidBumiPrimaCimahi" style="color: black;">
                                <div class="kotak-alamat" style="background: white; color: black;">
                                    <div class="isi-kotak">
                                        <p style="margin-bottom: 20px;"><i class="fa-brands fa-youtube fa-2xl"></i>
                                        </p>
                                        <p style="font-weight: bold;">masjidbumiprima</p>
                                        <p style="font-weight: 300px; font-size: 14px;">Youtube Masjid Bumi Prima
                                        </p>
                                    </div>
                            </a>
                        </div>
                        <div class="kotak-alamat">
                            <div class="isi-kotak">
                                <p style="margin-bottom: 20px;"><i class="fa-solid fa-location-dot fa-2xl"></i></p>
                                <p style="font-weight: bold;">Cibabat, 40513</p>
                                <p style="font-weight: 300px; font-size: 14px;">Jl Masjid Bumi Prima</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-pesan">
                <form action="tambah.php" method="post">
                    <div class="form-float">
                        <input name="Name" class="form-control" id="Name" placeholder="Nama">
                    </div>
                    <div class="form-float">
                        <input name="Email" class="form-control" id="Email" placeholder="Email">
                    </div>
                    <div class="form-float">
                        <input name="Telp" class="form-control" id="Telp" placeholder="Telepon">
                    </div>
                    <div class="form-float">
                        <textarea name="Isi" class="form-control" id="Isi" placeholder="Isi"></textarea>
                    </div>
                    <button type="button" class="btn button-submit" onclick="kirimpesan()" id="button-kirim"> <i
                            class="fas fa-arrow-down">
                        </i> Kirim Pesan</button>
                </form>
            </div>
    </div>
    </section>

    <div class="row-maps">
        <section id="location">
            <iframe style="border-radius: 25px"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1052658711556!2d107.56060997480925!3d-6.877990393120867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5e8abc0382d%3A0x6e02c5f887f5505e!2sMasjid%20Bumi%20Prima!5e0!3m2!1sid!2sid!4v1736997625833!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>
    </div>
    </div>
    </div>


    <!-- footer -->
    <footer class="footer">
        <div style="display: block;">
            <p style="margin: 10px 15px;" class="copyright">&copy; Footprint Solutions 2025. All rights reserved.
            </p>
            <br>
            <p style="margin: 10px 15px" class="footer-adress"> <u class="underlined">Address</u>: Taman Bumi Prima,
                Jl.Pesantren Blk. H3 No.4
            </p>
            <p style="margin: 10px 15px" class="footer-adress"> Cibabat, Kec.Cimahi Utara, Kabupaten Bandung, Jawa
                Barat
                40513</p>
            <p style="margin: 10px 15px" class="footer-adress">Phone: <u class="underlined">0813-2069-1810</u></p>
        </div>

        <div class="footer-kanan">
            <ul>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                <li><a href="{{ url('/schedule') }}">Jadwal Shalat & Kegiatan</a></li>
                <li><a href="{{ url('/infaq') }}">Donasi</a></li>
                <li><a href="{{ url('/contact') }}">Kontak</a></li>
                <li><a href="{{ url('/zakat') }}">Zakat</a></li>
            </ul>
        </div>
    </footer>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        function toggleSidebar() {
            $('.floating-sidebar').toggleClass('active');
        }

        $('.floating-sidebar a').on('click', function() {
            $('.floating-sidebar').removeClass('active');
        })

        const index = $('#container-page').html();

        function PencarianKonten() {
            var term = $('#searchbar').val().toLowerCase();
            var items = $('#container-page').children();

            if (term !== '') {
                items.each(function() {
                    var text = $(this).text().toLowerCase();
                    if (text.includes(term)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            } else {
                items.show();
            }
        }

        hitungmundur();

        function hitungmundur() {
            setTimeout(hitungmundur, 1000);

        }

        $(document).ready(function() {
            $('#jadwal').text('Jadwal Shalat Selanjutnya');
            getPrayerTimes();

            function getPrayerTimes() {
                let hariSekarang = new Date();
                let tanggalHariIni = hariSekarang.toISOString().split("T")[0];

                return {
                    shubuh: new Date(`${tanggalHariIni}T04:19:00`),
                    dzuhur: new Date(`${tanggalHariIni}T11:58:00`),
                    ashar: new Date(`${tanggalHariIni}T15:23:00`),
                    maghrib: new Date(`${tanggalHariIni}T18:13:00`),
                    isya: new Date(`${tanggalHariIni}T19:28:00`)
                };
            }

            function getNextPrayerTime() {
                let sekarang = new Date();
                let prayerTimes = getPrayerTimes();
                // console.log(prayerTimes)

                for (let [nama, waktu] of Object.entries(prayerTimes)) {
                    if (sekarang < waktu) {
                        return {
                            nama: `Shalat ${nama.charAt(0).toUpperCase() + nama.slice(1)}`,
                            waktu
                        };
                    }
                }

                let besokShubuh = new Date(prayerTimes.shubuh);
                besokShubuh.setDate(besokShubuh.getDate() + 1);
                return {
                    nama: "Shalat Shubuh",
                    waktu: besokShubuh
                };
            }

            function updateCountdown() {
                let {
                    nama,
                    waktu
                } = getNextPrayerTime();
                // console.log(waktu);
                let sekarang = new Date();
                let waktusisa = waktu - sekarang;
                // console.log(waktusisa);
                let batasWaktu = -60 * 60 * 1000;
                // console.log(batasWaktu);

                if (waktusisa <= 0) {
                    $('#jadwal').text('Sudah Memasuki Waktu');
                    $("#jam-awal, #jam-akhir, #menit-awal, #menit-akhir, #detik-awal, #detik-akhir").text(0);
                    return;
                }

                if (waktusisa <= 0 && waktusisa > batasWaktu) {
                    $('#jadwal').text('Jadwal Shalat Selanjutnya');
                    $("#isi").text(nama);
                    $("#jam-awal, #jam-akhir, #menit-awal, #menit-akhir, #detik-awal, #detik-akhir").text(0);
                    return;
                }

                $('#jadwal').text('Jadwal Shalat Selanjutnya');
                $("#isi").text(nama);

                let hours = Math.floor(waktusisa / (1000 * 60 * 60));
                let minutes = Math.floor((waktusisa % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((waktusisa % (1000 * 60)) / 1000);

                $("#jam-awal").text(Math.floor(hours / 10));
                $("#jam-akhir").text(hours % 10);
                $("#menit-awal").text(Math.floor(minutes / 10));
                $("#menit-akhir").text(minutes % 10);
                $("#detik-awal").text(Math.floor(seconds / 10));
                $("#detik-akhir").text(seconds % 10);
            }

            setInterval(updateCountdown, 1000);
            updateCountdown();
        });


        function setFilter(filter, isi) {
            $('#buttonFilter').text(filter);
            $('.dropdown-filter').each(function() {
                $(this).removeClass('active');
            })
            $(isi).addClass('active');
        }

        function scrollKebawah() {
            window.scrollTo({
                top: 950,
                behavior: "smooth"
            })
        }

        function kirimpesan() {
            let nama = $('#Name').val();
            let email = $('#Email').val();
            let telepon = $('#Telp').val();
            let isi = $('#Isi').val();

            let form = $('#button-kirim').parent('form');
            form.submit();
        }
    </script>
</body>

</html>
