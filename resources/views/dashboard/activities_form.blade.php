<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard | Kegiatan</title>
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
            <h1>Kalender Kegiatan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Kalender Kegiatan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulir Kalender Kegiatan</h5>
                            <form
                                action="{{ isset($item) ? route('kegiatan.update', $item->id) : route('kegiatan.store') }}"
                                method="POST" enctype="multipart/form-data" id="activityForm">
                                @csrf
                                @if (isset($item))
                                    @method('PUT')
                                @endif

                                <!-- Activity Name-->
                                <div class="row mb-4">
                                    <label for="activityName" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="activityName" id="activityName"
                                            value="{{ old('activityName', $item->ActivityName ?? '') }}" required>
                                        <div style="display: flex; align-items: center;">
                                            <input type="checkbox" name="main_activity" id="main_activity"
                                                style="cursor: pointer;">
                                            <p style="margin: 0 5px;"><b>Jadikan kegiatan utama</b> (kegiatan utama yang
                                                lama
                                                akan terganti)</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Activity Photo-->
                                <div class="row mb-4">
                                    <label for="activityPhoto" class="col-sm-2 col-form-label">Foto Kegiatan</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="activityPhoto"
                                            id="activityPhoto" onchange="readURL(this)"
                                            value="{{ old('activityPhoto', $item->ActivityPhoto ?? '') }}" required>
                                    </div>
                                </div>

                                {{-- Preview --}}
                                <div class="row">
                                    <label for="activityPhoto" class="col-sm-2 col-form-label">Preview</label>
                                    <div class="col-sm-10">
                                        @if ($item && $item->ActivityPhoto)
                                            <img src="{{ asset('storage/' . $item->ActivityPhoto) }}"
                                                alt="ActivityPhoto" id="previewActivity" width="35%">
                                        @else
                                            <img src="" alt="" id="previewActivity" width="35%">
                                        @endif
                                    </div>
                                </div>
                                <br>

                                <!-- Activity Description-->
                                <div class="row mb-4">
                                    <label for="activityDescription" class="col-sm-2 col-form-label">Deskripsi
                                        kegiatan</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="activityDescription" id="activityDescription" required>{{ old('activityDescription', $item->ActivityDescription ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Activity Performers-->
                                <div class="row mb-4">
                                    <label for="activityPerformers" class="col-sm-2 col-form-label">Pengisi
                                        Kegiatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="activityPerformers"
                                            id="activityPerformers"
                                            value="{{ old('activityPerformers', $item->ActivityPerformers ?? '') }}"
                                            required>
                                    </div>
                                </div>

                                <!-- Activity Date-->
                                <div class="row mb-4">
                                    <label for="activityDate" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="activityDate"
                                            id="activityDate"
                                            value="{{ old('activityDate', $item->ActivityDate ?? '') }}" required>
                                    </div>
                                </div>

                                <!-- Activity Time-->
                                <div class="row mb-4">
                                    <label for="activityTime" class="col-sm-2 col-form-label">Waktu Mulai</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control" name="activityTime"
                                            id="activityTime"
                                            value="{{ old('activityTime', $item->ActivityTime ?? '') }}" required>
                                    </div>
                                </div>

                                <!-- Activity Time2-->
                                <div class="row mb-4">
                                    <label for="activityTime2" class="col-sm-2 col-form-label">Waktu Selesai</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control" name="activityTime2"
                                            id="activityTime2"
                                            value="{{ old('activityTime2', $item->ActivityTime2 ?? '') }}" required>
                                    </div>
                                </div>

                                <!-- Activity Place-->
                                <div class="row mb-4">
                                    <label for="activityPlace" class="col-sm-2 col-form-label">Tempat Kegiatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="activityPlace"
                                            id="activityPlace"
                                            value="{{ old('activityPlace', $item->ActivityPlace ?? '') }}" required>
                                    </div>
                                </div>

                                <!-- ======= Button ======= -->
                                <input type="hidden" id="mode" value="{{ isset($item) ? 'edit' : 'tambah' }}">
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <button type="button" onclick="simpan()" class="btn btn-primary">
                                            {{ isset($item) ? 'Update Data' : 'Tambah Data' }}</button>
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
            let mode = document.querySelector('#mode').value;

            if ($.trim($("#activityName").val()) == "") {
                $('#activityName').addClass('is-invalid');
                $('#activityName').after('<div class="invalid-feedback">Nama Kegiatan wajib diisi.</div>');
                valid = false;
            }
            if (mode != 'edit') {
                if ($.trim($("#activityPhoto").val()) == "") {
                    $('#activityPhoto').addClass('is-invalid');
                    $('#activityPhoto').after('<div class="invalid-feedback">Foto kegiatan wajib diisi.</div>');
                    valid = false;
                }
            }

            if ($.trim($("#activityDescription").val()) == "") {
                $('#activityDescription').addClass('is-invalid');
                $('#activityDescription').after('<div class="invalid-feedback">Deskripsi wajib diisi.</div>');
                valid = false;
            }
            if ($.trim($("#activityPerformers").val()) == "") {
                $('#activityPerformers').addClass('is-invalid');
                $('#activityPerformers').after('<div class="invalid-feedback">Pengisi kegiatan wajib diisi.</div>');
                valid = false;
            }
            if ($.trim($("#activityDate").val()) == "") {
                $('#activityDate').addClass('is-invalid');
                $('#activityDate').after('<div class="invalid-feedback">Tanggal Kegiatan wajib diisi.</div>');
                valid = false;
            }
            if ($.trim($("#activityTime").val()) == "") {
                $('#activityTime').addClass('is-invalid');
                $('#activityTime').after('<div class="invalid-feedback">Jam Kegiatan wajib diisi.</div>');
                valid = false;
            }
            if ($.trim($("#activityTime2").val()) == "") {
                $('#activityTime2').addClass('is-invalid');
                $('#activityTime2').after('<div class="invalid-feedback">Jam Selesai Kegiatan wajib diisi.</div>');
                valid = false;
            }
            if ($.trim($("#activityPlace").val()) == "") {
                $('#activityPlace').addClass('is-invalid');
                $('#activityPlace').after('<div class="invalid-feedback">Tempat Kegiatan wajib diisi.</div>');
                valid = false;
            }


            return valid;
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#previewActivity').attr('src', e.target.result);
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
                    document.querySelector('#activityForm').submit();
                }
            });
        }

        // Remove invalid class when user starts typing
        $('#activityName, #activityPhoto, #activityDescription, #activityPerformers, #activityDate, #activityTime, #activityTime2, #activityPlace')
            .on('input', function() {
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
