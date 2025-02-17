<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Home | Kegiatan</title>
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
            <h1>Kontao\k Masjid</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Kontak Masjid</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulir Kontak Masjid</h5>
                            <form action="{{ route('contact.update', $item->id) }}" method="POST" id="activityForm">
                                @csrf
                                @if (isset($item))
                                    @method('PUT')
                                @endif
                                <div class="row mb-4">
                                    <label for="shalat_name" class="col-sm-2 col-form-label">Akun Youtube</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="youtube_channel"
                                            id="youtube_channel"
                                            value="{{ old('youtube_channel', $item->youtube_channel ?? '') }}"
                                            required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="shalat_time" class="col-sm-2 col-form-label">Link URL Youtube</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="url_youtube" id="url_youtube"
                                            value="{{ old('url_youtube', $item->url_youtube ?? '') }}" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="shalat_time" class="col-sm-2 col-form-label">Alamat Masjid</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="address_mosque"
                                            id="address_mosque"
                                            value="{{ old('address_mosque', $item->address_mosque ?? '') }}" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <button type="button" onclick="simpan()"
                                            class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
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

    <script>
        // Validation for form before submission
        function validateForm() {
            let valid = true;

            if ($.trim($("#youtube_channel").val()) == "") {
                $('#youtube_channel').addClass('is-invalid');
                $('#youtube_channel').after('<div class="invalid-feedback">Nama Jadwal Shalat wajib diisi.</div>');
                valid = false;
            }
            if ($.trim($("#url_youtube").val()) == "") {
                $('#url_youtube').addClass('is-invalid');
                $('#url_youtube').after('<div class="invalid-feedback">Jam Shalat wajib diisi.</div>');
                valid = false;
            }
            if ($.trim($("#address_mosque").val()) == "") {
                $('#address_mosque').addClass('is-invalid');
                $('#address_mosque').after('<div class="invalid-feedback">Jam Shalat wajib diisi.</div>');
                valid = false;
            }


            return valid;
        }

        // Display confirmation popup when form is submitted
        function simpan() {
            if (!validateForm()) {
                return false;
            }

            let form = document.querySelector('#activityForm');
            console.log(form);

            Swal.fire({
                title: 'Confirmation?',
                text: 'Are you sure you want to update the data?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Yes, Update Data',
                confirmButtonColor: '#253A82',
                cancelButtonText: 'No, Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#activityForm').submit();
                }
            });

        };

        // Remove invalid class when user starts typing
        $('#youtube_channel, #url_youtube, #address_mosque').on('input', function() {
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
    @endif

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
