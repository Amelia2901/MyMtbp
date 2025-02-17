<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Struktur Organisasi | Visi Misi</title>
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
            <h1>Visi Misi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Struktur Organisasi</a></li>
                    <li class="breadcrumb-item active">Visi Misi</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulir Visi Misi</h5>
                                
                            <form id="visionForm" action="{{ route('visi_misi.update', $vision->id ?? '') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-4">
                                <label for="vision" class="col-sm-2 col-form-label">Visi</label>
                                <div class="col-sm-10">
                                    <!-- <textarea class="form-control" name="vision" id="vision" required>{{ old('vision', $vision->vision ?? '') }}</textarea> -->
                                    <textarea class="form-control" name="vision" id="vision" required>{{ old('vision', '') }}</textarea>
                                </div>
                            </div>
                            
                            <div class="row mb-4">
                                <label for="mission" class="col-sm-2 col-form-label">Misi</label>
                                <div class="col-sm-10">
                                    <!-- <textarea class="form-control" name="mission" id="mission" required>{{ old('mission', $vision->mission ?? '') }}</textarea> -->
                                    <textarea class="form-control" name="mission" id="mission" required>{{ old('mission', '') }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-sm-12">
                                <button type="button" onclick="simpan()" class="btn btn-primary">Submit form</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    @include('footer')
    
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
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    <script>
        function validateForm() {
    let valid = true;

        // Reset error messages
        $('.form-control').removeClass('is-invalid');

        if ($.trim($("#vision").val()) == "") {
            $('#vision').addClass('is-invalid');
            valid = false;
        }
        if ($.trim($("#mission").val()) == "") {
            $('#mission').addClass('is-invalid');
            valid = false;
        }

        return valid;
    }

    function simpan() {
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
            $('#visionForm').submit();

            // Mengosongkan input setelah submit
            $('#vision').val('');
            $('#mission').val('');
        }
    });
}


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

</body>

</html>
