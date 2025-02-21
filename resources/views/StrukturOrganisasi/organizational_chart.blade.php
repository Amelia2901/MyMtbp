<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Struktur Organisasi | Susunan Organisasi DKM </title>
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
                            <h5 class="card-title">Data Susunan Organisasi DKM</h5>
                            <div class="col-lg-12 text-end">
                                <a href="{{ route('organizational_chart.create') }}" class="btn btn-primary">+
                                    Tambah</a>
                            </div>

                            <!-- Table -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($organizational_chart as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->name }}
                                            <br>
                                            @if($item->is_active)
                                                    <span class="badge bg-success">Aktif</span>
                                                @else
                                                    <span class="badge bg-danger">Nonaktif</span>
                                                @endif
                                            </td>
                                            <td>{{ $item->position }}</td>
                                            <td><img src="{{ asset('storage/' . $item->photo) }}" width="50" style="max-height: 70px;"></td>
                                            <td  class="d-flex gap-1">
                                                <a href="{{ route('organizational_chart.edit', $item->id) }}"
                                                    class="btn btn-primary">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <form action="{{ route('organizational_chart.toggle', $item->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-secondary">
                                                        <i class="bi bi-x-lg"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


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

    <script>
    $(document).ready(function() {
        $('.btn-secondary').on('click', function(event) {
            event.preventDefault(); 
            let form = $(this).closest('form'); // Ambil form terdekat

            Swal.fire({
                title: "Konfirmasi Status!",
                text: "Apakah kamu yakin akan mengubah status data ini?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#253A82",
                cancelButtonColor: "#6c757d",
                confirmButtonText: "Ya, Ubah",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); 
                }
            });
        });
        });

//     $('.btn-secondary').on('click', function(event) {
//     event.preventDefault();
//     let form = $(this).closest('form');
//     let url = form.attr('action');

//     Swal.fire({
//         title: "Konfirmasi Status!",
//         text: "Apakah kamu yakin akan mengubah status data ini?",
//         icon: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#253A82",
//         cancelButtonColor: "#6c757d",
//         confirmButtonText: "Ya, Ubah",
//         cancelButtonText: "Batal"
//     }).then((result) => {
//         if (result.isConfirmed) {
//             $.ajax({
//                 url: url,
//                 type: "POST",  // HARUS PAKAI POST, BUKAN PATCH
//                 data: form.serialize() + "&_method=PATCH", // TAMBAHKAN _method=PATCH
//                 success: function(response) {
//                     Swal.fire("Sukses!", "Status berhasil diperbarui!", "success").then(() => {
//                         location.reload(); 
//                     });
//                 },
//                 error: function(error) {
//                     Swal.fire("Gagal!", "Ada kesalahan saat mengubah status!", "error");
//                 }
//             });
//         }
//     });
// });

    // </script>


