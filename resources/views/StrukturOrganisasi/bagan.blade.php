<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Struktur Organisasi | Bagan Struktur Organisasi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('menu')
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Bagan Struktur Organisasi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Struktur Organisasi</a></li>
                    <li class="breadcrumb-item active">Bagan Struktur Organisasi</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulir Bagan Struktur Organisasi</h5>
                            <form action="{{ route('bagan.store') }}" method="POST" enctype="multipart/form-data"
                                id="bagan_dashboard_form">
                                @csrf
                                @method('PUT')

                                {{-- Existing Image --}}
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Foto Bagan</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="bagan_photo" id="bagan_photo"
                                            onchange="readURL(this)">
                                    </div>
                                </div>

                                {{-- Preview --}}
                                <div class="row">
                                    <label for="inputText" class="col-sm-2 col-form-label">Preview</label>
                                    <div class="col-sm-10">
                                        @if ($bagan && $bagan->bagan_photo)
                                            <img src="{{ asset('storage/' . $bagan->bagan_photo) }}" alt="bagan_photo" id="previewBagan" width="50%">
                                        @else
                                            <img src="" alt="" id="previewBagan" width="50%">
                                        @endif
                                    </div>
                                </div>
                                <br>

                                {{-- Judul --}}
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Judul bagan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="bagan_title" id="bagan_title"
                                            value="{{ old('bagan_title', $bagan->bagan_title ?? '') }}">
                                    </div>
                                </div>

                                {{-- Deskripsi --}}
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi bagan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="bagan_description"
                                            id="bagan_description"
                                            value="{{ old('bagan_description', $bagan->bagan_description ?? '') }}">
                                    </div>
                                </div>

                                {{-- Save --}}
                                <div class="row mb-3">
                                    <div class="col-sm-12" style="display:flex; justify-content: right;">
                                        <button type="button" onclick="simpan()"
                                            class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script>
        function resetValidation() {
            $('#bagan_photo').removeClass('is-invalid');
            $('#bagan_title').removeClass('is-invalid');
            $('#bagan_description').removeClass('is-invalid');
            $('#bagan_photo').next('.invalid-feedback').remove();
            $('#bagan_title').next('.invalid-feedback').remove();
            $('#bagan_description').next('.invalid-feedback').remove();
        }


        function readURL(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#previewBagan').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function simpan() {
            resetValidation();

            let valid = true;

            if ($.trim($("#bagan_title").val()) == "") {
                $('#bagan_title').addClass('is-invalid');
                $('#bagan_title').after('<div class="invalid-feedback">Judul bagan wajib diisi.</div>');
                valid = false;
            }
            if ($.trim($("#bagan_description").val()) == "") {
                $('#bagan_description').addClass('is-invalid');
                $('#bagan_description').after('<div class="invalid-feedback">Deskripsi bagan wajib diisi.</div>');
                valid = false;
            }


            if (valid) {
                Swal.fire({
                    title: 'Konfirmasi?',
                    text: 'Apakah anda yakin akan mengupdate data?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Update Data',
                    confirmButtonColor: '#253A82',
                    cancelButtonText: 'Tidak, Kembali'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#bagan_dashboard_form').submit();
                    }
                });
            }
        }

        $('#bagan_photo, #bagan_title, #bagan_description').on('input', function() {
            if ($.trim($(this).val()) !== "") {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').remove();
            }
        });
    </script>

    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Sukses!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
        @php
            session()->forget('success');
        @endphp
    @endif




    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
