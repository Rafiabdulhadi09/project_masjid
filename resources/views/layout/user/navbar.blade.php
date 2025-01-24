        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">Masjid Raya Panjalu</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ url('/') }}" class="nav-item nav-link active">Beranda</a>
                        <a href="{{ url('/tentang') }}" class="nav-item nav-link">Tentang kami</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Keuangan</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="property-list.html" class="dropdown-item">Pemasukan</a>
                                <a href="property-type.html" class="dropdown-item">Pengeluaran</a>
                            </div>
                        </div>
                        <a href="{{ url('/tentang') }}" class="nav-item nav-link">Kajian</a>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="{{ route('login') }}" class="btn btn-primary px-3 d-none d-lg-flex">Login Admin</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->