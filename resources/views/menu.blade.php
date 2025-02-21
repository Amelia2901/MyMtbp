<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/dashboard') }}">
                <i class="bi bi-house-door-fill"></i>
                <span>Home</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-grid-fill"></i><span>Dashboard</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('/banner') }}">
                        <i class="bi bi-circle"></i><span>Banner</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/shalat') }}">
                        <i class="bi bi-circle"></i><span>Jadwal Sholat</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/kegiatan') }}">
                        <i class="bi bi-circle"></i><span>Kalender Kegiatan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/dashboard/contact') }}">
                        <i class="bi bi-circle"></i><span>Kontak</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-credit-card-fill"></i><span>Infaq</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('/banner-infaq') }}">
                        <i class="bi bi-circle"></i><span>Banner</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('deskripsi-infaq') }}">
                        <i class="bi bi-circle"></i><span>Deskripsi Infaq 1</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('deskripsi-infaq2') }}">
                        <i class="bi bi-circle"></i><span>Deskripsi Infaq 2</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('kategori-infaq') }}">
                        <i class="bi bi-circle"></i><span>Kategori Infaq</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/dashboard/payment-method') }}">
                        <i class="bi bi-circle"></i><span>Metode Infaq</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people-fill"></i><span>Struktur Organisasi</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('/banner-about') }}">
                        <i class="bi bi-circle"></i><span>Banner</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/visi_misi') }}">
                        <i class="bi bi-circle"></i><span>Visi Misi</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/bagan') }}">
                        <i class="bi bi-circle"></i><span>Bagan Struktur Organisasi</span>
                    </a>
                </li>
                <li>
                    <!-- <a href="icons-boxicons.html"> -->
                    <a href="{{ url('/organizational_chart') }}">
                        <i class="bi bi-circle"></i><span>Susunan Organisasi DKM</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#zakats-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-box-seam"></i><span>Zakat</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="zakats-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ url('/banner-zakat') }}">
                        <i class="bi bi-circle"></i><span>Banner</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/zakat-fitrah') }}">
                        <i class="bi bi-circle"></i><span>Zakat Fitrah</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/zakat-penghasilan') }}">
                        <i class="bi bi-circle"></i><span>Zakat Penghasilan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/zakat-ternak') }}">
                        <i class="bi bi-circle"></i><span>Zakat Ternak</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/zakat-perdagangan') }}">
                        <i class="bi bi-circle"></i><span>Zakat Perdagangan</span>
                    </a>
                </li>
            </ul>
        </li>






        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('navbar.index') }}">
                <i class="bi bi-list-task"></i>
                <span>Navbar</span>
            </a>
        </li><!-- End Profile Page Nav -->



    </ul>

</aside>
