<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Struktur Organisasi | Susunan Organisasi DKM</title>
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
            <h1>Susunan Organisasi DKM</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Struktur Organisasi</a></li>
                    <li class="breadcrumb-item active">Susunan Organisasi DKM</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulir Susunan Organisasi DKM</h5>
                            <form
                                action="{{ isset($item) ? route('organizational_chart.update', $item->id) : route('organizational_chart.store') }}"
                                method="POST" id="form_organisasi" enctype="multipart/form-data">
                                @csrf
                                @if (isset($item))
                                    @method('PUT')
                                @endif

                                    <!-- ======= Foto ======= -->
                                    <div class="row mb-4">
                                        <label for="inputText" class="col-sm-2 col-form-label">Foto</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" id="photo" name="photo" onchange="readURL(this)">
                                        </div>
                                    </div>

                                    {{-- Preview --}}
                                    <div class="row">
                                        <label for="inputText" class="col-sm-2 col-form-label">Preview</label>
                                        <div class="col-sm-10">
                                            @if (!empty($item) && !empty($item->photo))
                                                <img src="{{ asset('storage/' . $organizational_chart->photo) }}" alt="photo" id="previewPhoto" width="35%">
                                            @else
                                                <img src="" alt="" id="previewPhoto" width="35%">
                                            @endif
                                        </div>
                                    </div>
                                    <br>

                                    <!-- ======= Jabatan ======= -->
                                    <div class="row mb-4">
                                        <label for="position" class="col-sm-2 col-form-label">Jabatan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="position" id="position"
                                                value="{{ old('position', $item->position ?? '') }}" required>
                                        </div>
                                    </div>

                                    <!-- ======= Nama ======= -->
                                    <div class="row mb-4">
                                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="name" id="name"
                                                value="{{ old('name', $item->name ?? '') }}" required>
                                        </div>
                                    </div>
                                
                                    <!-- ======= Button ======= -->
                                    <input type="hidden" id="mode" value="{{ isset($organizational_chart) ? 'edit' : 'tambah' }}">
                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <button type="button" onclick="simpan()" class="btn btn-primary">
                                                {{ isset($organizational_chart) ? 'Update Data' : 'Tambah Data' }}
                                            </button>
                                        </div>
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


    <script>
        function validateForm() {
            let valid = true;

            if ($.trim($("#photo").val()) == "") {
                $('#photo').addClass('is-invalid');
                $('#photo').after('<div class="invalid-feedback">Photo wajib diisi</div>');
                valid = false;
            }
            if ($.trim($("#position").val()) == "") {
                $('#position').addClass('is-invalid');
                $('#position').after('<div class="invalid-feedback">Jabatan wajib diisi.</div>');
                valid = false;
            }
            if ($.trim($("#name").val()) == "") {
                $('#name').addClass('is-invalid');
                $('#name').after('<div class="invalid-feedback">nama wajib diisi.</div>');
                valid = false;
            }
            return valid;
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#previewPhoto').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function simpan() {
        if (!validateForm()) {
            return false;
        }

        let mode = document.querySelector('#mode').value; // Ambil nilai mode
        let title, text, confirmButtonText;

        if (mode === 'edit') {
            title = 'Konfirmasi Edit';
            text = 'Apakah anda yakin akan mengupdate data ini?';
            confirmButtonText = 'Ya, Update Data';
        } else {
            title = 'Konfirmasi Tambah';
            text = 'Apakah anda yakin akan menambahkan data baru?';
            confirmButtonText = 'Ya, Tambah Data';
        }

        Swal.fire({
            title: title,
            text: text,
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: confirmButtonText,
            confirmButtonColor: '#253A82',
            cancelButtonText: 'Tidak, Kembali'
    }).then((result) => {
            if (result.isConfirmed) {
                document.querySelector('#form_organisasi').submit();
            }
    });
}

        // Remove invalid class when user starts typing
        $('#photo, #position, #name').on('input', function() {
            if ($.trim($(this).val()) !== "") {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').remove();
            }
        });
    </script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
