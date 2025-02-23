<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins';
        }

        .card-title span {
            /* text-decoration: underline; */
            /* text-decoration-color: aqua; */
            color: #012970 !important;
            font-size: 20px !important;
            font-weight: bolder !important;
        }

        a.card-title:hover {
            color: #012970 !important;
            text-decoration: underline;
        }

        /* .message-body {
            border: 2px black solid;
        } */
    </style>
</head>

<body>
    @include('header')
    @include('menu')


    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Pesan Masuk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Pesan Masuk</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Pesan Masuk
                            </h3>
                            <div class="message-body">
                                @if ($data['message'] == [])
                                    <p class=""
                                        style="margin:0; margin-top: 6px; font-size: 16px; padding: 0; font-weight:bold;">
                                        Belum ada pesan masuk
                                    </p>
                                @endif
                                @foreach ($data['message'] as $item)
                                    <div class="message-row" style="margin:0 50px;">
                                        <p class=""
                                            style="margin:0; margin-top: 6px; font-size: 16px; padding: 0; font-weight:bold;">
                                            {{ $item['name'] }}
                                        </p>
                                        <p class=""
                                            style="margin:0; font-size: 13px; font-weight: 300px; padding: 0;">
                                            {{ $item['email'] }}
                                        </p>
                                        <p class=""
                                            style="margin:0; font-size: 13px; font-weight: 300px; padding: 0;">
                                            {{ $item['telp'] }}
                                        </p>
                                        <br>
                                        <p class=""
                                            style="margin:0; font-size: 14px; font-weight: 300px; padding: 0;">
                                            Pesan :
                                        </p>
                                        <p class=""
                                            style="margin:0; font-size: 13px; font-weight: 300px; padding:0;">
                                            {{ $item['isi'] }}
                                        </p>
                                    </div>
                                    <br>
                                    <hr style="margin: 0 50px;">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    @include('footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <!-- Vendor JS Files -->
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Sukses!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
