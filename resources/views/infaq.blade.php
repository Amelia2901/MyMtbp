<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="{{ asset('assets/img/website/logo_masjid.svg') }}" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infaq | Masjid Bumi Prima</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/websiteStyle.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sansita+Swashed:wght@300..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .slider {
            min-height: auto !important;
            margin-bottom: 20px !important;
        }

        .slider-img {
            min-height: 500px;
            max-height: 500px;
            width: 100%;
            object-fit: cover;
            object-position: center;
            filter: brightness(50%) sepia(30%);
            /* Gelapkan & beri efek kecoklatan */
        }

        .content {
            position: absolute;
            z-index: 2;
            /* Pastikan teks di atas gambar */
            color: white;
            text-align: center;
            width: 100%;
            padding: 20px;
        }

        .navbar {
            z-index: 2;
        }
    </style>

</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="link">
                <img src="{{ asset('assets/img/website/logo_masjid.svg') }}" alt="">
                <ul>
                    @foreach ($data['navbar'] as $nav)
                        <li><a href="{{ url($nav->url) }}">{{ $nav->name }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="medsos" style="display: flex;">
                <div class="d-none d-md-block">
                    <div class="searchbar position-relative">
                        <input type="text" placeholder="Pencarian..." class="form-control ps-4" name="searchbar"
                            id="searchbar" oninput="PencarianKonten()">
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
                <a href="{{ url('/login') }}" style="display: block; text-decoration: none;">
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
                <div class="floating-sidebar">
                    @foreach ($data['navbar'] as $nav)
                        <a href="{{ $nav->url }}">{{ $nav->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="slider">
        <img src="{{ isset($data['banner']['banner_photo']) ? asset('storage/' . $data['banner']['banner_photo']) : asset('assets/img/website/slider.jpg') }}"
            alt="" class="slider-img">
        <div class="content">
            <div class="isi-content" style="justify-content: center;">
                <h1>
                    {{ $data['banner']['banner_title'] ?? 'Infaq Masjid' }}
                </h1>
                <p>
                    {{ $data['banner']['banner_description'] ?? '"Tidaklah berkurang rezeki seseorang karena bersedekah."' }}
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
        <div class="contain-infaq">
            <div class="infaq-infaq" style="margin-top: -100px">
                <div class="isi-infaq">
                    <div class="d-block d-md-none">
                        <div class="judul-infaqjamaah">
                            <img src="{{ asset('assets/img/website/10.png') }}" alt=""
                                style="display: block; margin-top: -40px;">
                            <h1>Infaq Jama'ah</h1>
                        </div>
                    </div>
                    <div class="d-none d-md-block">
                        <h1>Infaq Jama'ah</h1>
                    </div>
                    <p>{{ $data['description']['Description_1'] ??
                        "Masjid Bumi Prima Menerima Infaq dan Shodaqoh Jama'ah untuk kebutuhan operasional,kegiatan dan
                                                                                                                                                                                                                                                                                                                        program Masjid Bumi Prima agar senantiasa berjalan dan untuk Kemakmuran Masjid." }}
                    </p>
                </div>
                <img style="width: 300px; height:300px; margin-top: -30px; margin-left:250px;"
                    src="{{ asset('assets/img/website/infaq orang.png') }}">
            </div>
        </div>

        <div class="infaq-love">
            <!-- <img style="height: 400px;" src="images/infaq love.png" alt=""> -->
            <p style="font-size: 25px; font-family: Montserrat, serif;">
                {{ $data['description']['Description_2'] ??
                    "Masjid Bumi Prima Menerima Infaq dan Shodaqoh
                                                                                                                                                                                                                                                Jama’ah untuk kebutuhan operasional,
                                                                                                                                                                                                                                                kegiatan dan program Masjid Bumi Prima agar senantiasa berjalan dan untuk kemakmuran Masjid." }}
            </p>
        </div>


        <div class="d-none d-md-block">
            <h1 style="color: #1E1E1E; margin-left:50px; font-size: 45px; font-family: Montserrat, serif;">Infaq
                Jama’ah
            </h1>
            <div>
                <div class="kategori-infaq">
                    <br>
                    <br>
                    <br>
                    <div class="kotak-kategori" style=" margin-left: 50px;">
                        <div class="icon-infaq">
                            <div class="bulet-icon">
                                <img src="{{ asset('assets/img/website/icon 1.png') }}">
                            </div>
                        </div>
                        <p class="text-infaq">{{ $data['category']['kategori_1'] ?? 'Infaq operasional' }}</p>
                        <p style="font-size: 14px; text-align: center; margin: 20px;">
                            {{ $data['category']['deskripsi_1'] ??
                                'Digunakan untuk keperluan kebutuhan
                                                                                                                                                                                                                                                                                                                                                                                                                                                        operasional dan program untuk Masjid.' }}
                        </p>
                        <div>
                            <a class="button-infaq" onclick="qris()">
                                Infaq Sekarang
                            </a>
                        </div>
                    </div>

                    <div class="kotak-kategori">
                        <div class="icon-infaq">
                            <div class="bulet-icon">
                                <img src="{{ asset('assets/img/website/icon 2.png') }}">
                            </div>
                        </div>
                        <p class="text-infaq">{{ $data['category']['kategori_2'] ?? 'Infaq Sosial' }}</p>
                        <p style="font-size: 14px; text-align: center; margin: 20px;">
                            {{ $data['category']['deskripsi_2'] ??
                                'Santunan kepada anak yatim atau
                                                                                                                                                                                                                                                                                                                                                                                                                                                        yang membutuhkan untuk kesejahteraan umat.' }}
                        </p>
                        <div>
                            <a class="button-infaq" onclick="qris()">
                                Infaq Sekarang
                            </a>
                        </div>
                    </div>
                    <div class="kotak-kategori">
                        <div class="icon-infaq">
                            <div class="bulet-icon">
                                <img src="{{ asset('assets/img/website/icon 3.png') }}">
                            </div>
                        </div>
                        <p class="text-infaq">{{ $data['category']['kategori_3'] ?? 'Infaq Pembangunan' }}</p>
                        <p style="font-size: 14px; text-align: center; margin: 20px;">
                            {{ $data['category']['deskripsi_3'] ??
                                'Kebutuhan Perawatan dan pemeliharaan
                                                                                                                                                                                                                                                                                                                                                                                                                                                        bangunan fisik Masjid dan sarana penunjang.' }}
                        </p>
                        <div>
                            <a class="button-infaq" onclick="qris()">
                                Infaq Sekarang
                            </a>
                        </div>
                    </div>
                    <div class="kotak-kategori" style=" margin-right: 40px ">
                        <div class="icon-infaq">
                            <div class="bulet-icon">
                                <img src="{{ asset('assets/img/website/icon 42.png') }}">
                            </div>
                        </div>
                        <p class="text-infaq">{{ $data['category']['kategori_4'] ?? 'Infaq Kurban' }}</p>
                        <p style="font-size: 14px; text-align: center; margin: 20px;">
                            {{ $data['category']['deskripsi_4'] ??
                                'Program patungan untuk membeli hewan qurban yang akan diserahkan kepada umat.' }}
                        </p>
                        <div>
                            <a class="button-infaq" onclick="qris()">
                                Infaq Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background-transfer">
                <div class="transfer">
                    <div class="kotak-transfer">
                        <div class="kalimat" style="display: block;">
                            <h1
                                style="color: #1E1E1E; font-family: Montserrat, serif; font-size: 45px; margin-left: -50px;">
                                Tunaikan Infaq
                                <span style="color: #1E1E1E">Terbaik</span>
                            </h1>
                            <!-- <h3 class="garistengah" -->
                            <!-- style="color: #E19132; font-family: Montserrat, serif;  font-size: 40px;">
                            Transfer Melalui</h3> -->

                            <div class="bank">
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <img style="width: 240px; height: 200px; border-radius: 20px; margin-bottom: 50px;"
                                        src="{{ asset('assets/img/website/' . $data['payment']['bank'] . '.png') }}">
                                </div>
                                <div class="kalimat-bank-flex">
                                    <div class="kalimat-bank" style="display: block;">
                                        <h2>{{ $data['payment']['bank_name'] }}</h2>
                                        <br>
                                        <h2>No. Rekening : {{ $data['payment']['rekening'] }}</h2>
                                        <br>
                                        <h2 style="font-weight: 300;">A/N : {{ $data['payment']['atas_nama'] }}
                                        </h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="image-transfer" style="width: 30%; display:flex; margin-top: 150px;">
                            <img style="align-items:center; display: flex; margin-top: 0; margin-bottom: 30px; background-color: #583E31; padding: 28px 60px; width: 550px; height: 600px;"
                                src="{{ asset('storage/' . $data['payment']['qris']) }}">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
    </div>
    <br>
    <br>
    <div class="d-block d-md-none">
        <h1 style="color: #1E1E1E; margin-left:20px; font-size: 25px; font-family: Montserrat, serif;">Kategori
            Infaq
        </h1>
        <div class="kategori-infaq">
            <br>
            <br>
            <br>
            <div class="kotak-kategori">
                <div class="icon-infaq">
                    <div class="bulet-icon">
                        <img src="{{ asset('assets/img/website/icon 1.png') }}">
                    </div>
                </div>
                <p class="text-infaq">Infaq operasional</p>
                <p style="font-size: 14px; text-align: center; margin: 20px;">Digunakan untuk keperluan kebutuhan
                    operasional dan program untuk Masjid. </p>
                <div>
                    <a class="button-infaq" href="#">
                        Infaq Sekarang
                    </a>
                </div>
            </div>
            <div class="kotak-kategori">
                <div class="icon-infaq">
                    <div class="bulet-icon">
                        <img src="{{ asset('assets/img/website/icon 2.png') }}">
                    </div>
                </div>
                <p class="text-infaq"> Infaq Sosial </p>
                <p style="font-size: 14px; margin: 0 10px 23px 20px;"> Santunan kepada anak yatim atau
                    yang membutuhkan untuk kesejahteraan umat. </p>
                <div>
                    <a class="button-infaq" href="#">
                        Infaq Sekarang
                    </a>
                </div>
            </div>
        </div>
        <div class="kategori-infaq">
            <div class="kotak-kategori">
                <div class="icon-infaq">
                    <div class="bulet-icon">
                        <img src="{{ asset('assets/img/website/icon 3.png') }}">
                    </div>
                </div>
                <p class="text-infaq"> Infaq Pembangunan </p>
                <p style="font-size: 14px; margin: 0 10px 23px 20px;">Kebutuhan Perawatan dan pemeliharaan
                    bangunan
                    fisik Masjid dan sarana penunjang.</p>
                <div>
                    <a class="button-infaq" href="#">
                        Infaq Sekarang
                    </a>
                </div>
            </div>
            <div class="kotak-kategori">
                <div class="icon-infaq">
                    <div class="bulet-icon">
                        <img src="{{ asset('assets/img/website/icon 42.png') }}">
                    </div>
                </div>
                <p class="text-infaq">Infaq Kurban</p>
                <p style="font-size: 14px; margin: 0 10px 23px 20px">Program patungan untuk membeli hewan qurban
                    yang akan diserahkan kepada umat.</p>
                <div>
                    <a class="button-infaq" href="#">
                        Infaq Sekarang
                    </a>
                </div>
            </div>
        </div>

        <div class="background-transfer">
            <div class="transfer">
                <div class="kotak-transfer">
                    <div class="kalimat" style="display: block;">
                        <h1 style="color: #1E1E1E; font-family: Montserrat, serif; font-size: 25px;">
                            Tunaikan Infaq
                            <span style="color: #1E1E1E">Terbaik</span>
                        </h1>
                        <!-- <h3 class="garistengah" -->
                        <!-- style="color: #E19132; font-family: Montserrat, serif;  font-size: 40px;">
                            Transfer Melalui</h3> -->

                        <div class="bank">
                            <img style="width: 98px; height: 98px; border-radius: 20px; margin-bottom: 50px;"
                                src="{{ asset('assets/img/website/11.png') }}">
                            <div class="kalimat-bank-flex">
                                <div class="kalimat-bank" style="display: block;">
                                    <h2>BANK SYARIAH INDONESIA</h2>
                                    <br>
                                    <h2>No. Rekening : 123 - 456 - 789</h2>
                                    <br>
                                    <h2 style="font-weight: 300;">A/N : MASJID BUMI PRIMA</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-transfer"
                        style="width: 100%; display: flex; justify-content: center; margin: 30px 10px;">
                        <img style="background-color: #583E31; height: 320px; width: 290px; padding: 20px;"
                            src="{{ asset('assets/img/website/Qris.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
    <br>
    <footer class="footer">
        <div style="display: block; width:70%;">
            <p style="margin: 10px 15px;" class="copyright">&copy; Footprint Solutions 2025. All rights reserved.
            </p>
            <br>
            <div style="display: flex;">
                <u style="margin: 10px 15px" class="underlined">Address </u>
                <p style="margin: 10px 15px" class="footer-adress">
                    {{ $data['contact']['address_mosque'] ??
                        'Taman Bumi Prima, Jl.Pesantren Blk. H3 No.4 Cibabat, Kec.Cimahi Utara, Kabupaten Bandung, Jawa Barat 40513' }}
                </p>
            </div>

        </div>

        <div class="footer-kanan" style="margin: 10px; width:30%;">

            <ul>
                @foreach ($data['navbar'] as $nav)
                    <li><a href="{{ url($nav->url) }}">{{ $nav->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </footer>
    <script>
        function toggleSidebar() {
            $('.floating-sidebar').toggleClass('active');
        }

        $('.floating-sidebar a').on('click', function() {
            $('.floating-sidebar').removeClass('active');
        })

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

        function scrollKebawah() {
            window.scrollTo({
                top: 1350,
                behavior: "smooth"
            })
        }

        function qris() {
            window.scrollTo({
                top: 2020,
                behavior: "smooth"
            })
        }
    </script>
</body>

</html>
