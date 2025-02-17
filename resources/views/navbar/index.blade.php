@extends('components.layouts.app')


@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ $data['title'] }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">{{ $data['title'] }}</li>
                </ol>
            </nav>
        </div>


        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12 text-end mt-3">
                                <a href="{{ route('navbar.create') }}" class="btn btn-primary button-add">+ Navbar Menu</a>
                            </div>

                            <!-- Table with stripped rows -->
                            <table class="table table-striped" id="table-navbar">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Url</th>
                                        <th scope="col">Posisi</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


@section('script')
    <script>
        $(function() {
            $("#table-navbar").DataTable({
                dom: "lrtip",
                searching: false,
                lengthChange: true,
                pageLength: 10,
                stateSave: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('navbar.data') }}",
                    type: "POST",
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                },
                columns: [{
                        data: "DT_RowIndex",
                        name: "DT_RowIndex",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "name",
                        name: "name"
                    },
                    {
                        data: "url",
                        name: "url"
                    },
                    {
                        data: "order",
                        name: "order"
                    },
                    {
                        data: "action",
                        name: "action",
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });

        function deleteData(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('navbar.destroy', '') }}/" + id,
                        data: {
                            id: id
                        },
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                        },
                        success: function(data) {
                            $("#table-navbar").DataTable().ajax.reload();
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            );
                        },
                        error: function(data) {
                            console.log("Error:", data);
                        }
                    });
                }
            });
        }
    </script>
@endsection
