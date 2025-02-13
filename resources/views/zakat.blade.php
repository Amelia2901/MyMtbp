<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="{{ asset('assets/img/website/logo_masjid.svg') }}" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakat</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/websiteStyle.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alata&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sansita+Swashed:wght@300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        .row {
            width: 100%;
            display: block;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* .nagivasi-zakat a.aktif {
        background: #583e31 !important;
        color: white !important;
    } */
    </style>
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="link">
                <img src="{{ asset('assets/img/website/logo_masjid.svg') }}" alt="">
                <ul>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ url('/about') }}"> Tentang Kami</a></li>
                    <li><a href="{{ url('/schedule') }}">Jadwal Shalat & Kegiatan</a></li>
                    <li><a href="{{ url('/infaq') }}">Donasi</a></li>
                    <li><a href="{{ url('/contact') }}">Kontak</a></li>
                    <li><a href="#">Zakat</a></li>
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
                <a href="login.php" style="display: block; text-decoration: none;">
                    <div class="box-medsos user">
                        <i class="fa-solid fa-user"></i>
                    </div>
                </a>
            </div>
            <div class="hamburger-mobile" onclick="toggleSidebar()" style="display: none;">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="d-block d-md-none">
            <div class="floating-sidebar">
                <a href="index.php"><i class="fa-solid fa-house"></i> <span>Home</span></a>
                <a href="#"><i class="fa-solid fa-users"></i> <span>Tentang Kami</span></a>
                <a href="../#JadwalShalat"><i class="fa-solid fa-calendar"></i> <span>Jadwal Shalat</span></a>
                <a href="infaq.php"><i class="fa-solid fa-hand-holding-heart"> </i> <span>Donasi</span></a>
                <a href="../#Kontak"><i class="fa-solid fa-hand-holding-heart"></i> <span>Kontak</span></a>
                <a href="#"><i class="fa-solid fa-hand-holding-heart"></i> <span>Zakat</span></a>
            </div>
        </div>
    </div>


    <div class="slider" style="min-height: auto !important; padding-bottom: 52px;">
        <img src="{{ asset('assets/img/website/slider.jpg') }}" alt="" style="z-index: 2 !important;">
        <div class="content">
            <div class="isi-content">
                <h1>
                    Zakat
                </h1>
                <p>
                    "Mari bahagiakan para dhuafa, anak yatim dan para <br>mustahik. Zakat Anda, pertolongan untuk
                    mereka"
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
    <div class="container-zakat">
        <div class="d-none d-md-block">
            <div class="title">
                <div class="title-image" style="width: 30%;">
                    <img src="{{ asset('assets/img/website/zakat-image.png') }}" alt="">
                </div>
                <div class="title-text" style="width: 70%;">
                    <h1 align="right" style="margin: 0 40px; font-size: 50px; font-weight: 600;">Zakat Jamaah</h1>
                    <p>Zakat merupakan bentuk ibadah kepada Allah, dengan mengeluarkan bagian yang diwajibkan secara
                        syariat
                        dan harta tertentu untuk golongan atau pihak tertentu</p>
                </div>
            </div>
        </div>
        <div class="d-block d-md-none">
            <div class="title" style="display: flex; height: auto; margin-top: -10px;">
                <div class="title-text" style="width: 60%;">
                    <h1 align="left"
                        style="margin: 40px 0 20px 20px !important; font-size: 25px; font-weight: 400;">
                        Zakat Jamaah</h1>
                </div>
                <div class="title-image" style="width: 40%;">
                    <img src="images/zakat-image.png" alt="">
                </div>
            </div>
            <p style="font-size: 12px; margin-top: -30px; margin-bottom: 30px;">Zakat merupakan bentuk ibadah kepada
                Allah, dengan
                mengeluarkan bagian yang
                diwajibkan secara
                syariat
                dan harta tertentu untuk golongan atau pihak tertentu</p>
        </div>


        <div class="zakat-box-description">
            <div class="visi-misi">
                <h1
                    style="font-family: Alata !important; font-weight: lighter; color: white ;  font-size: 48px; margin-left:50px;">
                    Zakat Fitrah</h1>
                <p
                    style="font-family: Montserrat; color: white;  margin-top: 20px; font-size: 18px; margin-left:50px; margin-bottom:20px;">
                    Zakat yang diwajibkan atas setiap jiwa muslim yang dilakukan pada bulan Ramadhan hingga menjelang
                    salat Idul Fitri.
                </p>
            </div>
            <div class="vl"></div>
            <div class="visi-misi">
                <h1
                    style="font-family: Alata !important; font-weight: lighter; color: white ;  font-size: 48px; margin-left:50px;">
                    Zakat Maal</h1>
                <p
                    style="font-family: Montserrat, serif; color: white;  margin-top: 20px; font-size: 18px; margin-left:50px; margin-bottom:20px;">
                    Zakat yang dikenakan atas segala jenis harta, yang secara zat maupun substansi perolehannya, tidak
                    bertentangan dengan ketentuan agama.</p>
            </div>
        </div>
        <div class="d-none d-md-block">
            <div class="perhitungan-zakat">
                <h1 style="font-Family: 'Alata';">Perhitungan Zakat</h1>
                <div class="navigasi-zakat">
                    <a class="isi-navigasi aktif" onclick="pilihZakat('zakat-fitrah', this)">Zakat Fitrah</a>
                    <a class="isi-navigasi" onclick="pilihZakat('zakat-penghasilan', this)">Zakat Penghasilan</a>
                    <a class="isi-navigasi" onclick="pilihZakat('zakat-emas', this)">Emas & Perak</a>
                    <a class="isi-navigasi" onclick="pilihZakat('zakat-ternak', this)">Hewan Ternak</a>
                    <a class=" isi-navigasi" onclick="pilihZakat('zakat-perdagangan', this)">Perdagangan</a>
                </div>
            </div>
        </div>
        <div class="d-block d-md-none">
            <div class="perhitungan-zakat">
                <h1 style="font-Family: 'Alata'; font-size: 22px;">Perhitungan Zakat</h1>
                <div class="navigasi-zakat">
                    <a class="isi-navigasi aktif" onclick="pilihZakat('zakat-fitrah', this)">Zakat Fitrah</a>
                    <a class="isi-navigasi" onclick="pilihZakat('zakat-penghasilan', this)">Zakat
                        Penghasilan</a>
                    <a class="isi-navigasi" style="margin-left: 10px;" onclick="shownavigasi('navigasi-zakat-2')"><i
                            class="fa-solid fa-ellipsis"></i></a>
                </div>
                <div class="navigasi-zakat navigasi-zakat-2" id="navigasi-zakat-2" style="display: none;">
                    <a class="isi-navigasi" onclick="pilihZakat('zakat-emas', this)">Emas &
                        Perak</a>
                    <a class="isi-navigasi" onclick="pilihZakat('zakat-ternak', this)">Hewan
                        Ternak</a>
                    <a class=" isi-navigasi" onclick="pilihZakat('zakat-perdagangan', this)">Perdagangan</a>
                </div>
            </div>
        </div>

        <!-- zakat fitrah -->
        <div class="jenis-zakat zakat-fitrah" id="zakat-fitrah" style="margin-left: 50px;">
            <h1 style="text-align:center; font-size: 40px; font-weight: 400px;">Zakat Fitrah</h1>

            <div class="isi-zakat-emas" style="margin-top: 40px; margin-right: 15px;">
                <p style="font-size: 22px; color: #583E31;">Besaran pada Zakat Fitrah adalah beras atau makanan pokok
                    seberat 2,5 kg atau 3,5 liter per jiwa. </p>
                <p style="font-size: 22px; color: #583E31;">Untuk perhitungan Zakat Fitrah :
                </p>
                <p style="font-size: 22px; color: #583E31;"> • Setara dengan 1 sha’ gandum, kurma atau beras. </p>
                <p style="font-size: 22px; color: #583E31;"> • Nilai zakat setara dengan uang sebesar Rp. 40.000/jiwa
                    (SK Ketua BAZNAS No.7 Tahun 2021). </p>
            </div>
            <div class="jumlah-jiwa">
                <h1 style="font-size: 35px; font-family: Alata;">Jumlah Jiwa</h1>
                <div class="form-jumlah-jiwa">
                    <p style="font-size: 25px; font-family: montserrat; margin-top: 20px; margin-left:50px;">Jumlah
                        jiwa</p>
                    <div class="box-jumlah-jiwa">
                        <input type="number" class="form-control" id="jumlahJiwa" min="1"
                            placeholder="Masukkan jumlah jiwa" oninput="hitungZakat()">
                        <p>Jiwa</p>
                    </div>
                </div>
            </div>
            <div class="hasil-zakat-fitrah">
                <h1 style="font-size: 35px; font-family: Alata;">Zakat</h1>
                <div class="form-hasil-zakat">
                    <p style="font-size:24px; font-family: montserrat; margin-top: 20px;margin-left:50px;">Hasil
                        Nominal</p>
                    <div class="box-hasil-zakat">
                        <p>Rp.</p>
                        <input type="text" class="form-control" id="hasilZakat" readonly value="0">
                    </div>
                </div>
            </div>
            <div class="isi-akhir" style="color: #583E31; font-size: 22px; margin-left:2px; margin-right:30px;">
                <p>Sebagai salah satu rukun Islam, Zakat ditunaikan untuk diberikan kepada golongan yang berhak
                    menerimanya (asnaf).
                    <br>
                    <br>
                    Dalam Al-Quran disebutkan, “Ambillah zakat dari sebagian harta mereka, dengan zakat itu kamu
                    membersihkan dan menyucikan mereka” (QS. at-Taubah [9]: 103).
                </p>
                <br>
                <br>
                <br>
            </div>
        </div>

        <!-- zakat penghasilan -->
        <div class="jenis-zakat zakat-penghasilan" id="zakat-penghasilan" style="margin-left: 50px; display: none;">
            <h1 style="text-align:center; font-size: 40px; font-weight: 400px;">Zakat Penghasilan</h1>
            <div class="isi-zakat-penghasilan" style="margin-top: 40px; margin-right: 15px;">
                <p style="font-size:22px; color: #583E31; margin-right:50px;">Zakat penghasilan adalah bagian dari
                    zakat maal yang wajib
                    dikeluarkan atas harta yang berasal dari pendapatan / penghasilan rutin dari pekerjaan.</p>
                <p style="font-size:22px; color: #583E31;"> • Kadar zakat penghasilan senilai 2,5%.</p>
                <p style="font-size:22px; color: #583E31;"> • Nishab zakat perbulan setara dengan Rp7.140.498,00</p>
                <p style="font-size:22px; color: #583E31;"> • Nishab zakat penghasilan sebesar 85 gram emas per tahun
                    atau setara dengan Rp85.685.972,00 (SK Ketua BAZNAS No. 13 tahun 2025).</p>
            </div>
            <div class="form-zakat-penghasilan">
                <h1 style="font-size: 36px; font-family: Alata; margin-top:60px;">Penghasilan</h1>
                <div class="content-zakat-penghasilan" style="display: flex; justify-content: space-between;">
                    <p style="font-size: 25px; font-family: montserrat; margin-top: 25px; margin-left:50px;">Gaji</p>
                    <div class="box-zakat-penghasilan">
                        <p>Rp.</p>
                        <input type="text" class="form-control" placeholder="Masukan gaji">
                    </div>
                </div>
                <div class="content-zakat-penghasilan"
                    style="display: flex; justify-content: space-between; margin-top: 30px; margin-left:50px;">
                    <p style="font-size: 25px; font-family: montserrat; margin-top: 20px;">Pendapatan lain</p>
                    <div class="box-zakat-penghasilan">
                        <p>Rp.</p>
                        <input type="text" class="form-control" placeholder="Masukan pendapatan lain">
                    </div>
                </div>
                <div class="content-zakat-penghasilan"
                    style="display: flex; justify-content: space-between; margin-top: 30px;">
                    <p style="font-size: 25px; font-family: montserrat; margin-top: 20px; margin-left:50px;">Jumlah</p>
                    <div class="box-zakat-penghasilan" style="background-color: #583E31;">
                        <p style="color: white;"> Rp.</p>
                        <input type="text" class="form-control" style="color:white" readonly>
                    </div>
                </div>
                <div class="content-zakat-penghasilan">
                    <h1 style="font-size: 35px; font-family: Alata; margin-left: 1px; margin-top:70px;">Zakat</h1>
                    <div class="form-hasil-zakat">
                        <p style="font-size: 25px; font-family: montserrat; margin-top: 20px; margin-left:50px;">Hasil
                            Nominal</p>
                        <div class="box-hasil-zakat">
                            <p style="color: white">Rp.</p>
                            <input type="text" class="form-control" id="hasil_zakat_penghasilan" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="isi-akhir" style="color: #583E31; font-size: 22px; margin-left:2px; margin-right:30px;">
                <p>Sebagai salah satu rukun Islam, Zakat ditunaikan untuk diberikan kepada golongan yang berhak
                    menerimanya (asnaf).
                    <br>
                    <br>
                    Dalam Al-Quran disebutkan, “Ambillah zakat dari sebagian harta mereka, dengan zakat itu kamu
                    membersihkan dan menyucikan mereka” (QS. at-Taubah [9]: 103).
                </p>
                <br>
                <br>
                <br>
            </div>
        </div>

        <!-- zakat emas & perak -->
        <div class="jenis-zakat zakat-emas" id="zakat-emas" style="margin-left: 50px; display: none;">
            <h1 style="text-align:center; font-size: 40px; font-weight: 400px;">Zakat Emas & Perak</h1>
            <div class=" isi-zakat-emas" style="margin-top: 40px; margin-right: 15px;">
                <p style="font-size: 22px; color: #583E31; margin-right:50px;">Untuk menghitung zakat emas dan perak
                    yang telah tersimpan
                    selama 1 tahun hijriyah.
                    Zakat yang dikeluarkan adalah sebesar 2,5%.
                </p>
                <p style="font-size: 22px; color: #583E31;"> • Nishab emas adalah 85 gram. </p>
                <p style="font-size: 22px; color: #583E31;"> • Nishab perak adalah 595 gram. </p>
            </div>
            <div class="form-zakat-penghasilan">
                <h1 style="font-size: 35px; font-family: Alata; margin-top:60px;">Yang Dimiliki</h1>
                <div class="content-zakat-penghasilan" style="display: flex; justify-content: space-between;">
                    <p style="font-size: 25px; font-family: montserrat; margin-top: 20px; margin-left:50px;">Emas</p>
                    <div class="box-zakat-penghasilan">
                        <input type="number" class="form-control" id="JumlahEmas" min="85"
                            placeholder="Masukkan jumlah emas" oninput="HitungZakatEmas()">
                        <p>Gram</p>
                    </div>
                </div>
                <div class="content-zakat-penghasilan"
                    style="display: flex; justify-content: space-between; margin-top: 30px; margin-left:50px;">
                    <p style="font-size: 25px; font-family: montserrat; margin-top: 20px;">Perak</p>
                    <div class="box-zakat-penghasilan">
                        <input type="text" class="form-control" id="JumlahPerak" oninput="HitungZakatPerak()"
                            placeholder="Masukkan jumlah perak">
                        <p>Gram</p>
                    </div>
                </div>
                <div class="hasil-zakat-fitrah">
                    <h1 style="font-size: 35px; font-family: Alata; margin-left: 3px; margin-top:70px;">Zakat</h1>
                    <div class="form-hasil-zakat">
                        <p style="font-size: 25px; font-family: montserrat; margin-top: 20px; margin-left:50px;">Zakat
                            Emas</p>
                        <div class="box-hasil-zakat">
                            <input type="text" class="form-control" readonly id="HasilZakatEmas" value="0">
                            <p style="color: white">Gram</p>
                        </div>
                    </div>
                    <div class="form-hasil-zakat"
                        style="display: flex; justify-content: space-between; margin-top: 30px;">
                        <p style="font-size: 25px; font-family: montserrat; margin-top: 20px; margin-left:50px;">Zakat
                            Perak</p>
                        <div class="box-hasil-zakat">
                            <input type="text" class="form-control" id="HasilZakatPerak" value="0">
                            <p>Gram</p>
                        </div>
                    </div>
                </div>
                <div class="hasil-zakat-fitrah">
                    <h1 style="font-size: 33px; font-family: Alata; margin-left: 8px; margin-top:70px; display: flex;">
                        Zakat (jika dibayar dengan
                        uang)</p>
                    </h1>
                    <div class="form-hasil-zakat" style="margin-top: 25px;">
                        <p style="font-size: 25px; font-family: montserrat; margin-top: 28px; margin-left:50px;">Zakat
                            Emas</p>
                        <div class="box-hasil-zakat">
                            <p style="color: white">Rp.</p>
                            <input type="text" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="form-hasil-zakat"
                        style="display: flex; justify-content: space-between; margin-top: 30px;">
                        <p style="font-size: 25px; font-family: montserrat; margin-top: 20px; margin-left:50px;">Zakat
                            Perak</p>
                        <div class="box-hasil-zakat">
                            <p style="color: white">Rp.</p>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="isi-akhir" style="color: #583E31; font-size: 22px; margin-left:2px; margin-right:30px;">
                <p>Sebagai salah satu rukun Islam, Zakat ditunaikan untuk diberikan kepada golongan yang berhak
                    menerimanya (asnaf).
                    <br>
                    <br>
                    Dalam Al-Quran disebutkan, “Ambillah zakat dari sebagian harta mereka, dengan zakat itu kamu
                    membersihkan dan menyucikan mereka” (QS. at-Taubah [9]: 103).
                </p>
                <br>
                <br>
                <br>
            </div>
        </div>


        <!-- zakat hewan ternak -->
        <div class="jenis-zakat zakat-ternak" id="zakat-ternak" style="margin-left: 50px; display: none;">
            <h1 style="text-align:center; font-size: 40px; font-weight: 400px;">Zakat Hewan Ternak</h1>
            <div class="isi-zakat-emas" style="margin-top: 40px; margin-right: 15px;">
                <p style="font-size: 22px; color: #583E31; margin-right:50px;">Zakat hewan ternak adalah zakat yang
                    wajib dibayarkan oleh
                    umat islam atas kepemilikan hewan ternak tertentu. </p>
                <p style="font-size: 22px; color: #583E31;">Untuk zakat kambing :
                    </4>
                <p style="font-size:22px; color: #583E31;"> • Nishab-nya adalah 40 ekor. </p>
                <p style="font-size:22px; color: #583E31;"> • Telah mencapai haul 1 tahun hijriyah. </p>
            </div>
            <div class="form-zakat-penghasilan">
                <h1 style="font-size: 35px; font-family: Alata; margin-top:60px;">Kambing</h1>
                <div class="content-zakat-penghasilan" style="display: flex; justify-content: space-between;">
                    <p style="font-size: 25px; font-family: montserrat; margin-top: 20px; margin-left:50px;">Jumlah
                        Kambing</p>
                    <div class="box-zakat-penghasilan">
                        <input type="number" class="form-control" id="jumlah-kambing"
                            placeholder="Masukkan jumlah kambing" oninput="HitungZakatPeternakan()">
                        <p>Ekor</p>
                    </div>
                </div>
                <div class="hasil-zakat-fitrah">
                    <h1 style="font-size: 35px; font-family: Alata; margin-left: 5px;">Zakat</h1>
                    <div class="form-hasil-zakat">
                        <p style="font-size: 25px; font-family: montserrat; margin-top: 20px; margin-left: 50px;">Zakat
                        </p>
                        <div class="box-hasil-zakat">
                            <input type="text" class="form-control" id="hasil-zakat-ternak" readonly>
                            <p style="color: white">Ekor</p>
                        </div>
                    </div>
                </div>
                <div class="isi-akhir" style="color: #583E31; font-size: 22px; margin-left:2px; margin-right:30px;">
                    <p>Sebagai salah satu rukun Islam, Zakat ditunaikan untuk diberikan kepada golongan yang berhak
                        menerimanya (asnaf).
                        <br>
                        <br>
                        Dalam Al-Quran disebutkan, “Ambillah zakat dari sebagian harta mereka, dengan zakat itu kamu
                        membersihkan dan menyucikan mereka” (QS. at-Taubah [9]: 103).
                    </p>
                </div>
                <br>
                <br>
                <br>
            </div>
        </div>

        <!-- zakat perdagangan -->
        <div class="jenis-zakat zakat-perdagangan" id="zakat-perdagangan" style="margin-left: 50px; display: none;">
            <h1 style="text-align:center; font-size: 40px; font-weight: 400px;">Zakat Perdagangan</h1>
            <div class=" isi-zakat-emas" style="margin-top: 40px; margin-right: 15px;">
                <p style="font-size: 22px; color: #583E31;">Barang dagangan di sini termasuk tanah, rumah, kendaraan,
                    ternak(selain kambing, sapi/kerbau dan unta), perhiasan dll yang diniatkan untuk dijual.
                </p>
                </p>
                <p style="font-size: 22px; color: #583E31;"> • Nishab-nya senilai 85 gram emas. </p>
                <p style="font-size: 22px; color: #583E31;"> • Ukuran zakatnya adalah sebesar 2,5% atau 1/40. </p>
                <p style="font-size: 22px; color: #583E31;"> • Telah mencapai haul 1 tahun hijriyah. </p>
            </div>
            <div class="form-zakat-penghasilan">
                <h1 style="font-size: 35px; font-family: Alata; margin-top:60px;">Yang Dimiliki</h1>
                <div class="content-zakat-penghasilan" style="display: flex; justify-content: space-between; ">
                    <p style="font-size: 25px; font-family: montserrat; margin-top: 20px; margin-left:50px;">Aset
                        Lancar
                    </p>
                    <div class="box-zakat-penghasilan">
                        <p>Rp.</p>
                        <input type="text" class="form-control" placeholder="Masukkan aset lancar"
                            id="aset_lancar">
                    </div>
                </div>
                <div class="content-zakat-penghasilan"
                    style="display: flex; justify-content: space-between; margin-top: 30px;">
                    <p style="font-size: 25px; font-family: montserrat; margin-top: 20px; margin-left:50px;">Laba</p>
                    <div class="box-zakat-penghasilan">
                        <p>Rp.</p>
                        <input type="text" class="form-control" placeholder="Masukkan laba" id="laba">
                    </div>
                </div>
                <div class="form-hasil-zakat" style="margin-top: 30px;">
                    <p style="font-size: 25px; font-family: montserrat; margin-top: 20px; margin-left:50px;">Jumlah</p>
                    <div class="box-hasil-zakat">
                        <p>Rp.</p>
                        <input type="text" class="form-control" id="jumlah_aset" readonly>
                    </div>
                </div>
                <div class="hasil-zakat-fitrah">
                    <h1 style="font-size: 35px; font-family: Alata; margin-left: 5px;">Zakat</h1>
                    <div class="form-hasil-zakat">
                        <p style="font-size: 25px; font-family: montserrat; margin-top: 25px; margin-left:50px;">Zakat
                        </p>
                        <div class="box-hasil-zakat">
                            <p>Rp.</p>
                            <input type="text" class="form-control" id="hasil_zakat_perdagangan" readonly>
                        </div>
                    </div>
                </div>
                <div class="isi-akhir" style="color: #583E31; font-size: 22px; margin-left:2px; margin-right:30px;">
                    <p>Sebagai salah satu rukun Islam, Zakat ditunaikan untuk diberikan kepada golongan yang berhak
                        menerimanya (asnaf).
                        <br>
                        <br>
                        Dalam Al-Quran disebutkan, “Ambillah zakat dari sebagian harta mereka, dengan zakat itu kamu
                        membersihkan dan menyucikan mereka” (QS. at-Taubah [9]: 103).
                    </p>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>


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
                <li><a href="index.php">Beranda</a></li>
                <li><a href="struktur-organisasi.php">Tentang Kami</a></li>
                <li><a href="../#JadwalShalat">Jadwal Shalat & Kegiatan</a></li>
                <li><a href="infaq.php">Donasi</a></li>
                <li><a href="../#Kontak">Kontak</a></li>
                <li><a href="#">Zakat</a></li>
            </ul>
        </div>
    </footer>
    </div>
    <script>
        function pilihZakat(jenisZakat, aktif) {
            $('.jenis-zakat').each(function() {
                this.style.display = "none";
            })

            var Zakat = document.getElementById(jenisZakat);
            Zakat.style.display = "block";

            $('.isi-navigasi').each(function() {
                // console.log(this);
                $('.isi-navigasi').removeClass('aktif');
            })

            aktif.classList.add('aktif');
        }

        function shownavigasi(isi) {

            var navigasi = document.getElementById(isi);
            navigasi.style.display = "flex";
        }

        function toggleSidebar() {
            $('.floating-sidebar').toggleClass('active');
        }

        $('.floating-sidebar a').on('click', function() {
            $('.floating-sidebar').removeClass('active');
        })

        // perhitungan zakat fitrah
        function hitungZakat() {
            let jumlahJiwa = parseInt($("#jumlahJiwa").val());

            if (isNaN(jumlahJiwa) || jumlahJiwa <= 0) {
                $('#hasilZakat').val(0);
                return;
            }

            const zakatPerJiwa = 40000;
            let totalZakat = jumlahJiwa * zakatPerJiwa;

            document.getElementById("hasilZakat").value = totalZakat.toLocaleString("id-ID");
        }

        // perhitungan zakat emas uang
        function HitungZakatEmas() {
            let JumlahEmas = parseInt($('#JumlahEmas').val()) || 0;
            let totalzakatemas;

            if (JumlahEmas == 0) {
                $('#HasilZakatEmas').val(0);
                return;
            } else if (JumlahEmas >= 85) {
                totalzakatemas = (JumlahEmas * 2.5) / 100;
                $('#HasilZakatEmas').val(totalzakatemas);
            } else if (JumlahEmas < 85) {
                $('#HasilZakatEmas').val("Anda belum mencapai nishab");
            }

            //ini pake uang
            // const zakatPerEmas = 85685972; 
            // let totalZakat = JumlahEmas * zakatPerEmas;

            // document.getElementById("hasilZakatEmasUang").value = totalZakat.toLocaleString("id-ID"); 

        }

        function HitungZakatPerak() {
            let JumlahPerak = parseInt($('#JumlahPerak').val()) || 0;
            let totalzakatperak;

            if (JumlahPerak == 0) {
                $('#HasilZakatPerak').val(0);
                return;
            } else if (JumlahPerak >= 85) {
                totalzakatperak = (JumlahPerak * 2.5) / 100;
                $('#HasilZakatPerak').val(totalzakatperak);
            } else if (JumlahPerak < 85) {
                $('#HasilZakatPerak').val("Anda belum mencapai nishab");
            }
        }

        // zakat penghasilan
        document.addEventListener("DOMContentLoaded", function() {
            const gajiInput = document.querySelectorAll(".box-zakat-penghasilan input")[0];
            const pendapatanLainInput = document.querySelectorAll(".box-zakat-penghasilan input")[1];
            const jumlahInput = document.querySelectorAll(".box-zakat-penghasilan input")[2];

            const nisabPerBulan = 7140498; // Nisab per bulan dalam IDR
            const zakatRate = 0.025; // 2.5%

            function formatRupiah(angka) {
                return angka.toLocaleString("id-ID");
            }

            function HitungZakatPenghasilan() {
                let hasilZakatInput = document.getElementById("hasil_zakat_penghasilan");
                let gaji = parseFloat(gajiInput.value.replace(/[^\d]/g, "")) || 0;
                let pendapatanLain = parseFloat(pendapatanLainInput.value.replace(/[^\d]/g, "")) || 0;

                let totalPendapatan = gaji + pendapatanLain;
                jumlahInput.value = formatRupiah(totalPendapatan);

                if (totalPendapatan >= nisabPerBulan) {
                    let zakat = totalPendapatan * zakatRate;
                    hasilZakatInput.value = formatRupiah(zakat);
                } else {
                    hasilZakatInput.value = "Anda belum mencapai nishab";
                }
            }

            function formatInput(event) {
                let value = event.target.value.replace(/\./g, "").replace(/[^\d]/g, "");
                event.target.value = value ? formatRupiah(parseFloat(value)) : "";
                HitungZakatPenghasilan();
            }

            gajiInput.addEventListener("input", formatInput);
            pendapatanLainInput.addEventListener("input", formatInput);
        });


        // zakat-perdagangan
        document.addEventListener("DOMContentLoaded", function() {
            const asetLancarInput = document.getElementById("aset_lancar");
            const labaInput = document.getElementById("laba");
            const jumlahInput = document.getElementById("jumlah_aset");

            const nisabPerBulan = 7140498; // Nisab per bulan dalam IDR
            const zakatRate = 0.025; // 2.5%

            function formatRupiah(angka) {
                return angka.toLocaleString("id-ID");
            }

            function HitungZakatPerdagangan() {
                let hasilZakatInput = document.getElementById("hasil_zakat_perdagangan");
                let asetLancar = parseFloat(asetLancarInput.value.replace(/[^\d]/g, "")) || 0;
                let laba = parseFloat(labaInput.value.replace(/[^\d]/g, "")) || 0;

                let totalAset = asetLancar + laba;
                jumlahInput.value = formatRupiah(totalAset);

                if (totalAset >= nisabPerBulan) {
                    let zakat = totalAset * zakatRate;

                    hasilZakatInput.value = formatRupiah(zakat);
                } else {
                    hasilZakatInput.value = "Tidak wajib zakat";
                }
            }

            function formatInput(event) {
                let value = event.target.value.replace(/\./g, "").replace(/[^\d]/g,
                    ""); // Hapus titik & karakter non-digit
                event.target.value = value ? formatRupiah(parseFloat(value)) : "";
                HitungZakatPerdagangan();
            }

            asetLancarInput.addEventListener("input", formatInput);
            labaInput.addEventListener("input", formatInput);

        });

        function HitungZakatPeternakan() {
            var jumlah = parseFloat($('#jumlah-kambing').val());
            var zakat;

            if (jumlah >= 40 && jumlah <= 120) {
                zakat = 1;
            } else if (jumlah > 120 && jumlah <= 200) {
                zakat = 2;
            } else if (jumlah > 200) {
                var hasil = jumlah / 100;
                zakat = Math.floor(hasil);
            } else {
                zakat = "Anda belum mencapai nishab";
            }

            $('#hasil-zakat-ternak').val(zakat);
        }

        function scrollKebawah() {
            window.scrollTo({
                top: 800,
                behavior: "smooth"
            })
        }
    </script>
</body>

</html>
