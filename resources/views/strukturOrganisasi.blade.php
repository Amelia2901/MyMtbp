<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="{{ asset('assets/img/website/logo_masjid.svg') }}" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi | Masjid Bumi Prima</title>
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
        .row {
            width: 100%;
            display: block;
            justify-content: center;
            flex-wrap: wrap;
        }

        .susunan-organisasi {
            display: flex;
            align-items: center;
            overflow: hidden;
            width: 100%;
            margin: auto;
        }

        .slider-wrapper {
            overflow: hidden;
            width: 59%;
        }

        .slider-container {
            display: flex;
            width: max-content;
            transition: transform 0.5s ease-in-out;
        }

        .frame-image-organisasi {
            min-width: 180px;
            text-align: center;
            margin: 0 5px;
        }

        .image-organisasi img {
            width: 122px;
            height: 150px;
            border-radius: 20px;
            object-fit: cover;
        }

        .icon {
            background-color: #583E31;
            border: none;
            cursor: pointer;
            color: white;
            padding: 3px 18px 8px 18px;
            font-size: 40px;
            margin-bottom: 20px;
            border-radius: 50%;
            /* align-content: center; */
            justify-content: center;
        }

        .image-organisasi {
            padding: 30px !important;
        }

        .slider {
            min-height: auto !important;
            margin-bottom: 120px !important;
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
            <div class="hamburger-mobile" onclick="toggleSidebar()" style="display: none;">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="d-block d-md-none">
            <div class="floating-sidebar">
                @foreach ($data['navbar'] as $nav)
                    <a href="{{ $nav->url }}">{{ $nav->name }}</a>
                @endforeach
            </div>
        </div>
    </div>


    <div class="slider">
        <img src="{{ isset($data['banner']['banner_photo']) ? asset('storage/' . $data['banner']['banner_photo']) : asset('assets/img/website/slider.jpg') }}"
            alt="" class="slider-img">
        <div class="content">
            <div class="isi-content">
                <h1>
                    {{ $data['banner']['banner_title'] ?? ' Struktur Organisasi' }}
                </h1>
                <p>
                    {{ $data['banner']['banner_description'] ?? '"Merajut Iman, Membangun Umat"' }}
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
    <div class="container-struktur">
        <div class="struktur-organisasi">
            <div class="visi-misi">
                <h1
                    style="font-family: Alata, serif; font-weight: lighter; color: white ;  font-size: 48px; margin-left:50px;">
                    Visi</h1>
                <p
                    style="font-family: Montserrat, serif; color: white;  margin-top: 20px; font-size: 18px; margin-left:50px; margin-bottom:20px;">
                    {{ $data['VisiMisi']['vision'] ??
                        'Memakmurkan masjid sebagai Rumah Allah untuk meningkatkan Hablum Minallah dan Hablum Minannas' }}
                </p>
            </div>
            <div class="vl"></div>
            <div class="visi-misi">
                <h1
                    style="font-family: Alata, serif; font-weight: lighter; color: white ;  font-size: 48px; margin-left:50px;">
                    Misi</h1>
                <p
                    style="font-family: Montserrat, serif; color: white;  margin-top: 20px; font-size: 18px; margin-left:50px; margin-bottom:20px;">
                    {{ $data['VisiMisi']['mission'] ??
                        'Menjaga efektifitas pelayanan masjid untuk jamaah dalam penyelenggaraan Ibadah Mahdhoh dan Ibadah' }}
                </p>
            </div>
        </div>


        <div class="d-none d-md-block">
            <h1 style="font-family: Montserrat, serif; color:black; margin-left:30px; margin-top: 40px;">Struktur
                Organisasi DKM Bumi Prima</h>
                <br>
                <p></p>
                <div style="display: flex; justify-content:center; margin-top: 40px;">
                    <img src="{{ isset($data['Bagan']['bagan_photo']) ? asset('storage/' . $data['Bagan']['bagan_photo']) : asset('assets/img/website/stuktur.png') }}"
                        style="height: 750px; width: 95%; object-fit: fill;">
                    <br>
                </div>
        </div>
        <div class="d-block d-md-none">
            <h1
                style="font-family: Montserrat, serif; color:black; margin-top: 40px; font-size: 20px; text-align: center;">
                Struktur
                Organisasi DKM Bumi Prima</h>
                <br>
                <p></p>

                <div style="display: flex; justify-content:center; margin-top: 20px;">
                    <img src="{{ isset($data['Bagan']['bagan_photo']) ? asset('storage/' . $data['Bagan']['bagan_photo']) : asset('assets/img/website/stuktur.png') }}"
                        style="height: 217px; width: 80%;">
                </div>
        </div>

        <div class="d-none d-md-block">
            <h1
                style="font-family: 'Montserrat', serif; color:#1E1E1E; margin-top: 40px; text-align: center; font-weight: 600;">
                Susunan Organisasi DKM<br> <span class="periode-organisasi"></span> Periode 2024-2027</h1>
        </div>
        <div class="d-block d-md-none">
            <h1
                style="font-family: 'Montserrat', serif; color:#1E1E1E; margin-top: 40px; text-align: center; font-weight: bold; font-size: 18px;">
                Susunan Organisasi DKM<br> <span class="periode-organisasi"></span> Periode 2024-2027</h1>
        </div>


        <div class="box-filter-organisasi">
            <ul class="filter-organisasi">
                <li class="li-filter-organisasi active">Perencanaan</li>
                <li class="li-filter-organisasi">Ibadah</li>
                <li class="li-filter-organisasi">Sosial</li>
                <li class="li-filter-organisasi">Logistik</li>
            </ul>
        </div>

        <div class="d-none d-md-block">
            <div class="susunan-organisasi">
                <button class="icon" id="prevButton">&#8592;</button>
                <div class="slider-wrapper">
                    <div class="slider-container" id="slider">
                        @foreach ($data['struktur'] as $item)
                            <div class="frame-image-organisasi" id="template">
                                <div class="image-organisasi">
                                    <img class="foto-organisasi" src="{{ asset('storage/' . $item['photo']) }}">
                                    <p class="jabatan-organisasi">{{ $item['position'] }}</p>
                                    <p class="nama-jabatan-organisasi">{{ $item['name'] }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <button class="icon" id="nextButton"> &#8594; </button>
            </div>
            <br>
            <br>
            <br>
        </div>
        <div class="d-block d-md-none" style="width: 100%;">
            <div class="susunan-organisasi" style="display: flex;">
                <div class="box-icon-struktur" style="margin-right: -45px;">
                    <button class="icon">
                        <i class="fa-solid fa-arrow-left" style="font-size: 20px; color: white;"></i>
                    </button>
                </div>
                <div class="" id="frame-image-organisasi">
                    <div class="image-organisasi">
                        <img src="/images/13.jpeg">
                        <p class="jabatan-organisasi">Koordinator</p>
                        <p class="nama-jabatan-organisasi">Bambang Trisno</p>
                    </div>
                </div>
                <div class="" id="frame-image-organisasi">
                    <div class="image-organisasi">
                        <img src="/images/13.jpeg">
                        <p class="jabatan-organisasi">Wakil
                            Ketua I</p>
                        <p class="nama-jabatan-organisasi">Wiweko</p>
                    </div>
                </div>
                <div class="box-icon-struktur" style="margin-left: -45px;">
                    <button class="icon" onclick="SlideRight()">
                        <i class="fa-solid fa-arrow-right" style="font-size: 20px; color: white;"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

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
        $('.li-filter-organisasi').on('click', function() {
            $('.filter-organisasi li').removeClass('active');
            $(this).addClass('active');
        })

        function toggleSidebar() {
            $('.floating-sidebar').toggleClass('active');
        }

        $('.floating-sidebar a').on('click', function() {
            $('.floating-sidebar').removeClass('active');
        })

        $(document).ready(function() {
            let index = 0;
            let maxIndex = 4;
            // let data = @json($data['struktur'] ?? []);
            // console.log(data);
            // data.forEach(item => {
            //     let clone = $('#template').clone().removeAttr('id');
            //     let photoUrl = "{{ asset('storage') }}/" + item.photo;
            //     clone.find('.foto-organisasi').attr('src', photoUrl);
            //     clone.find('.jabatan-organisasi').text(item.position);
            //     clone.find('.nama-jabatan-organisasi').text(item.name);
            //     $('#slider').append(clone);
            // });
            // $('#template').remove();

            let totalSlides = $('.frame-image-organisasi').length;
            console.log(totalSlides);
            $('#nextButton').click(function() {
                console.log(totalSlides);
                if (totalSlides > maxIndex) {
                    totalSlides--;
                    index++;
                    $('#slider').css('transform', `translateX(-${index * 189}px)`);
                }
            });

            $('#prevButton').click(function() {
                if (index > 0) {
                    totalSlides++;
                    index--;
                    $('#slider').css('transform', `translateX(-${index * 189}px)`);
                }
            });
        });

        function scrollKebawah() {
            window.scrollTo({
                top: 850,
                behavior: "smooth"
            })
        }
    </script>
</body>

</html>
