<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Infaq | Kategori Infaq</title>
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
            <h1>Kategori Infaq</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Infaq</a></li>
                    <li class="breadcrumb-item active">Kategori Infaq</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulir Kategori Infaq</h5>
                            <form action="{{ route('CategoriInfaq.storeOrUpdate') }}" method="POST"
                                enctype="multipart/form-data" id="categori_infaq">
                                @csrf
                                <!-- input type hidden -->
                                <input type="hidden" name="id" id="id"
                                    value="{{ old('id', $data->id ?? '') }}">

                                {{-- Kategori 1 --}}
                                <div class="row mb-3">
                                <h3 class="card-title" style="margin-left: 10px;">Kategori 1</h3>
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="kategori_1"
                                            id="kategori_1"
                                            value="{{ old('kategori_1', $kategori_1->Kategori_1 ?? '') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="deskripsi_1" id="deskripsi_1" required> {{ old('deskripsi_1', $deskripsi_1->deskripsi_1 ?? '') }}</textarea>
                                    </div>
                                </div>

                                {{-- Kategori 2 --}}
                                <div class="row mb-3">
                                <h3 class="card-title" style="margin-left: 10px;">Kategori 2</h3>
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="kategori_2"
                                            id="kategori_2"
                                            value="{{ old('kategori_2', $kategori_2->Kategori_2 ?? '') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                    <textarea class="form-control" name="deskripsi_2" id="deskripsi_2" required> {{ old('deskripsi_2', $deskripsi_2->deskripsi_2 ?? '') }}</textarea>
                                    </div>
                                </div>

                                {{-- Kategori 3 --}}
                                <div class="row mb-3">
                                <h3 class="card-title" style="margin-left: 10px;">Kategori 3</h3>
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="kategori_3"
                                            id="kategori_3"
                                            value="{{ old('kategori_3', $kategori_3->Kategori_3 ?? '') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                    <textarea class="form-control" name="deskripsi_3" id="deskripsi_3" required> {{ old('deskripsi_3', $deskripsi_3->deskripsi_3 ?? '') }}</textarea>
                                    </div>
                                </div>

                                {{-- Kategori 4--}}
                                <div class="row mb-3">
                                <h3 class="card-title" style="margin-left: 10px;">Kategori 4</h3>
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="kategori_4"
                                            id="kategori_4"
                                            value="{{ old('kategori_4', $kategori_4->Kategori_4 ?? '') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="deskripsi_4" id="deskripsi_4" required> {{ old('deskripsi_4', $deskripsi_4->deskripsi_4 ?? '') }}</textarea>
                                    </div>
                                </div>

                                {{-- Simpan--}}
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
            $('#kategori_1').removeClass('is-invalid');
            $('#kategori_1').next('.invalid-feedback').remove();
            $('#deskripsi_1').removeClass('is-invalid');
            $('#deskripsi_1').next('.invalid-feedback').remove();
            $('#kategori_2').removeClass('is-invalid');
            $('#kategori_2').next('.invalid-feedback').remove();
            $('#deskripsi_2').removeClass('is-invalid');
            $('#deskripsi_2').next('.invalid-feedback').remove();
            $('#kategori_3').removeClass('is-invalid');
            $('#kategori_3').next('.invalid-feedback').remove();
            $('#deskripsi_3').removeClass('is-invalid');
            $('#deskripsi_3').next('.invalid-feedback').remove();
            $('#kategori_4').removeClass('is-invalid');
            $('#kategori_4').next('.invalid-feedback').remove();
            $('#deskripsi_4').removeClass('is-invalid');
            $('#deskripsi_4').next('.invalid-feedback').remove();
        }

        function simpan() {
            resetValidation();

            let valid = true;

            if ($.trim($("#kategori_1").val()) == "") {
                $('#kategori_1').addClass('is-invalid');
                $('#kategori_1').after('<div class="invalid-feedback">Judul Kategori wajib diisi.</div>');
                valid = false;
            }
            if ($.trim($("#deskripsi_1").val()) == "") {
                $('#deskripsi_1').addClass('is-invalid');
                $('#deskripsi_1').after('<div class="invalid-feedback">Deskripsi Kategori wajib diisi.</div>');
                valid = false;
            }

            if ($.trim($("#kategori_2").val()) == "") {
                $('#kategori_2').addClass('is-invalid');
                $('#kategori_2').after('<div class="invalid-feedback">Judul Kategori wajib diisi.</div>');
                valid = false;
            }
            if ($.trim($("#deskripsi_2").val()) == "") {
                $('#deskripsi_2').addClass('is-invalid');
                $('#deskripsi_2').after('<div class="invalid-feedback">Deskripsi Kategori wajib diisi.</div>');
                valid = false;
            }

            if ($.trim($("#kategori_3").val()) == "") {
                $('#kategori_3').addClass('is-invalid');
                $('#kategori_3').after('<div class="invalid-feedback">Judul Kategori wajib diisi.</div>');
                valid = false;
            }
            if ($.trim($("#deskripsi_3").val()) == "") {
                $('#deskripsi_3').addClass('is-invalid');
                $('#deskripsi_3').after('<div class="invalid-feedback">Deskripsi Kategori wajib diisi.</div>');
                valid = false;
            }

            if ($.trim($("#kategori_4").val()) == "") {
                $('#kategori_4').addClass('is-invalid');
                $('#kategori_4').after('<div class="invalid-feedback">Judul Kategori wajib diisi.</div>');
                valid = false;
            }
            if ($.trim($("#deskripsi_4").val()) == "") {
                $('#deskripsi_4').addClass('is-invalid');
                $('#deskripsi_4').after('<div class="invalid-feedback">Deskripsi Kategori  wajib diisi.</div>');
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
                        $('#categori_infaq').submit();
                    }
                });
            }
        }

        $('#kategori_1').on('input', function() {
            if ($.trim($(this).val()) !== "") {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').remove();
            }
        });
        $('#deskripsi_1').on('input', function() {
            if ($.trim($(this).val()) !== "") {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').remove();
            }
        });

        $('#kategori_2').on('input', function() {
            if ($.trim($(this).val()) !== "") {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').remove();
            }
        });
        $('#deskripsi_2').on('input', function() {
            if ($.trim($(this).val()) !== "") {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').remove();
            }
        });

        $('#kategori_3').on('input', function() {
            if ($.trim($(this).val()) !== "") {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').remove();
            }
        });
        $('#deskripsi_3').on('input', function() {
            if ($.trim($(this).val()) !== "") {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').remove();
            }
        });

        $('#kategori_4').on('input', function() {
            if ($.trim($(this).val()) !== "") {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').remove();
            }
        });
        $('#deskripsi_4').on('input', function() {
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
