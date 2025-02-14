<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard | Visi Misi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @include('header')
    @include('menu')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Visi Misi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Visi Misi</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulir Visi Misi</h5>
                            <form action="{{ route('vision.update', $item->id ?? '') }}" method="POST" id="visionForm">
                                @csrf
                                @if (isset($item)) @method('PUT') @endif
                                <div class="row mb-4">
                                    <label for="vision" class="col-sm-2 col-form-label">Visi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="vision" id="vision" required>{{ old('vision', $item->vision ?? '') }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="mission" class="col-sm-2 col-form-label">Misi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="mission" id="mission" required>{{ old('mission', $item->mission ?? '') }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <button type="button" onclick="simpan()" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('footer')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function validateForm() {
            let valid = true;
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
            if (!validateForm()) return false;
            Swal.fire({
                title: 'Konfirmasi?',
                text: 'Apakah Anda yakin ingin menyimpan data?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, Simpan',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#visionForm').submit();
                }
            });
        };
    </script>
</body>

</html>
