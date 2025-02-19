<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Infaq | Metode Infaq</title>
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
        .selectMethod {
            display: flex;
            list-style-type: none;
        }

        .selectMethod li {
            padding: 10px 20px;
            /* border-radius: 10px; */
            cursor: pointer;
        }

        .selectMethod li.active {
            padding: 10px 20px;
            /* border-radius: 10px; */
            background: transparent;
            border-bottom: 3px aqua solid;
        }
    </style>
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
            <h1>Metode Infaq</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Infaq</a></li>
                    <li class="breadcrumb-item active">Metode Infaq</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <ul class="selectMethod">
            <li onclick="selectMethod('sectionBankForm', this)" class="active">Bank</li>
            <li onclick="selectMethod('sectionQrisForm', this)">QRIS</li>
        </ul>

        <section class="section" id="sectionBankForm">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulir Pembayaran Bank </h5>
                            <form action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data"
                                id="payment_method_bank">
                                @csrf
                                <input type="hidden" name="id" id="id"
                                    value="{{ old('id', $data->id ?? '') }}">
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Nama Bank</label>
                                    <div class="col-sm-10">
                                        <select name="bank" id="bank" class="form-control">
                                            <option value="" selected>Pilih</option>
                                            <option value="BCA"
                                                {{ isset($data) && $data->bank == 'BCA' ? 'selected' : '' }}>BCA (Bank
                                                Central Asia)
                                            </option>
                                            <option value="BNI"
                                                {{ isset($data) && $data->bank == 'BNI' ? 'selected' : '' }}>BNI (Bank
                                                Negara Indonesia)
                                            </option>
                                            <option value="BSI"
                                                {{ isset($data) && $data->bank == 'BSI' ? 'selected' : '' }}>BSI (Bank
                                                Syariah Indoneia)
                                            </option>
                                            <option value="BRI"
                                                {{ isset($data) && $data->bank == 'BRI' ? 'selected' : '' }}>BRI (Bank
                                                Rakyat Indonesia)
                                            </option>
                                            <option value="MANDIRI"
                                                {{ isset($data) && $data->bank == 'MANDIRI' ? 'selected' : '' }}>
                                                MANDIRI
                                            </option>
                                            <option value="BTN"
                                                {{ isset($data) && $data->bank == 'BTN' ? 'selected' : '' }}>BTN (Bank
                                                Tabungan Negara)
                                            </option>
                                            <option value="MEGA"
                                                {{ isset($data) && $data->bank == 'MEGA' ? 'selected' : '' }}>MEGA
                                            </option>
                                            <option value="DANAMON"
                                                {{ isset($data) && $data->bank == 'DANAMON' ? 'selected' : '' }}>
                                                DANAMON
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="rekening" class="col-sm-2 col-form-label">No. Rekening</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="rekening" id="rekening"
                                            value="{{ old('rekening', $data->rekening ?? '') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="atas_nama" class="col-sm-2 col-form-label">Nama Pemilik Rekening</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="atas_nama" id="atas_nama"
                                            value="{{ old('atas_nama', $data->atas_nama ?? '') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-12" style="display:flex; justify-content: right;">
                                        <button type="button" onclick="simpanBank()" class="btn btn-primary btn-bank"
                                            disabled>Update</button>
                                    </div>
                                </div>
                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="sectionQrisForm" style="display: none">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulir Pembayaran QRIS </h5>
                            <form action="{{ route('payment.storeqris') }}" method="POST"
                                enctype="multipart/form-data" id="payment_method_qris">
                                @csrf
                                <input type="hidden" name="id" id="id"
                                    value="{{ old('id', $data->id ?? '') }}">

                                <div class="row mb-3">
                                    <label for="rekening" class="col-sm-2 col-form-label">Upload Foto QRIS</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="qris" id="qris"
                                            onchange="readURL(this)">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="rekening" class="col-sm-2 col-form-label">Preview</label>
                                    <div class="col-sm-10">
                                        @if (isset($data))
                                            <img src="{{ asset('storage/' . $data->qris) }}" alt=""
                                                id="previewQRIS" width="30%">
                                        @else
                                            <img src="" alt="" id="previewQRIS" width="30%">
                                        @endif
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-12" style="display:flex; justify-content: right;">
                                        <button type="button" onclick="simpanQRIS()"
                                            class="btn btn-primary btn-qris" disabled>Update</button>
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
        $('#bank, #rekening, #atas_nama').on('input', function() {
            $('.btn-bank').attr('disabled', false);
        })

        $('#qris').on('change', function() {
            $('.btn-qris').attr('disabled', false);
        })

        function resetValidation() {
            $('#bank').removeClass('is-invalid');
            $('#bank').next('.invalid-feedback').remove();
            $('#rekening').removeClass('is-invalid');
            $('#rekening').next('.invalid-feedback').remove();
            $('#atas_nama').removeClass('is-invalid');
            $('#atas_nama').next('.invalid-feedback').remove();
            $('#qris').removeClass('is-invalid');
            $('#qris').next('.invalid-feedback').remove();
        }

        function simpanBank() {
            resetValidation();
            let valid = true;

            if ($.trim($("#bank").val()) == "") {
                $('#bank').addClass('is-invalid');
                $('#bank').after('<div class="invalid-feedback">Jenis Bank wajib diisi.</div>');
                valid = false;
            }
            if ($.trim($("#rekening").val()) == "") {
                $('#rekening').addClass('is-invalid');
                $('#rekening').after('<div class="invalid-feedback">No. Rekening wajib diisi.</div>');
                valid = false;
            }
            if ($.trim($("#atas_nama").val()) == "") {
                $('#atas_nama').addClass('is-invalid');
                $('#atas_nama').after('<div class="invalid-feedback">Nama Pemilik Rekening wajib diisi.</div>');
                valid = false;
            }

            if (valid) {
                Swal.fire({
                    title: 'Konfirmasi?',
                    text: 'Apakah anda yakin?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Tambah Data',
                    confirmButtonColor: '#253A82',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#payment_method_bank').submit();
                    }
                });
            }
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    $('#previewQRIS').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function simpanQRIS() {
            resetValidation();
            let valid = true;

            if ($.trim($("#qris").val()) == "") {
                $('#qris').addClass('is-invalid');
                $('#qris').after('<div class="invalid-feedback">Jenis Bank wajib diisi.</div>');
                valid = false;
            }

            if (valid) {
                Swal.fire({
                    title: 'Konfirmasi?',
                    text: 'Apakah anda yakin?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Perbarui QRIS',
                    confirmButtonColor: '#253A82',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#payment_method_qris').submit();
                    }
                });
            }
        }

        $('#bank, #rekening, #atas_nama, #qris').on('input', function() {
            if ($.trim($(this).val()) !== "") {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').remove();
            }
        });

        function selectMethod(link, li) {
            $('.section').each(function() {
                this.style.display = "none";
            })

            var section = document.getElementById(link);
            section.style.display = 'block';

            console.log(li);

            $('.selectMethod li').each(function() {
                $('.selectMethod li').removeClass('active');
            })

            li.classList.add('active');

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
        @php
            session()->forget('success');
        @endphp
    @endif




    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
