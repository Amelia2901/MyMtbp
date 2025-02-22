<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
            {{-- <span class="d-none d-lg-block">NiceAdmin</span> --}}
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-chat-left-text"></i>
                    @if (count($message) > 0)
                        <span class="badge bg-success badge-number">{{ count($message) }}</span>
                    @endif
                </a><!-- End Messages Icon -->
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                    <li class="dropdown-header">
                        @if (count($message) > 0)
                            Anda memiliki {{ count($message) }} pesan
                        @else
                            Anda belum memiliki pesan
                        @endif

                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    @foreach ($message as $index => $item)
                        @if ($index <= 2)
                            <li class="message-item">
                                <div>
                                    <h4>{{ $item['name'] ?? '' }}</h4>
                                    <p>{{ $item['isi'] ?? '' }}</p>
                                    @php
                                        \Carbon\Carbon::setLocale('id');
                                        $tanggal = \Carbon\Carbon::parse($item['created_at']);
                                    @endphp
                                    <p>{{ $tanggal->translatedFormat('l') }}, {{ $tanggal->translatedFormat('d F Y') }}
                                    </p>
                                </div>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        @endif
                    @endforeach
                    <li class="dropdown-footer">
                        <a href="{{ route('dashboard.lihatpesan') }}">Lihat semua pesan</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ $user->name }}</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{ $user->name }}</h6>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-person"></i>
                            <span>Lihat Profil</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Logout</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header>
