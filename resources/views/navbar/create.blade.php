@extends('components.layouts.app')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ $title }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Formulir Navbar Menu</h5>
                            <form method="POST" id="navbar_form"
                                action="{{ isset($navbar) ? route('navbar.update', ['id' => $navbar->id]) : route('navbar.store') }}">
                                @csrf
                                @if (isset($navbar))
                                    @method('PUT')
                                @endif


                                <input type="hidden" class="form-control" name="id" id="id"
                                    value="{{ isset($navbar) ? $navbar->id : '' }}" readonly>

                                {{-- Name --}}
                                <div class="row mb-4">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{{ isset($navbar) ? $navbar->name : '' }}" required>
                                    </div>
                                </div>

                                {{-- Url --}}
                                <div class="row mb-4">
                                    <label for="url" class="col-sm-2 col-form-label">URL</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="url" id="url"
                                            value="{{ isset($navbar) ? $navbar->url : '' }}" required>
                                    </div>
                                </div>

                                {{-- Order --}}
                                <div class="row mb-4">
                                    <label for="order" class="col-sm-2 col-form-label">Posisi</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="order" id="order"
                                            value="{{ isset($navbar) ? $navbar->order : '' }}" required>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit Form</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
