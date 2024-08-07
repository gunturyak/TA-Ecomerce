<div class="container-fluid fixed-top">
    <div class="container topbar bg-primary d-none d-lg-block">
        <div class="d-flex justify-content-between">
            <div class="top-info ps-2">
                <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#"
                        class="text-white">Jl.Karya tani,BTN Graha Semarang 6</a></small>

            </div>
        </div>
    </div>
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="index.html" class="navbar-brand">
                <h1 class="text-primary display-6">Opang A.G</h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="{{ url('/') }}"
                        class="nav-item nav-link {{ request()->is('/*') ? 'active' : '' }}">Beranda</a>
                    <a href="{{ url('shop') }}"
                        class="nav-item nav-link {{ request()->is('shop*') ? 'active' : '' }}">Belanja</a>
                    <a href="{{ url('tentang-produk') }}"
                        class="nav-item nav-link {{ request()->is('tentang-produk*') ? 'active' : '' }}">Tentang
                        Produk</a>
                    <a href="{{ url('Contact') }}"
                        class="nav-item nav-link {{ request()->is('Contact*') ? 'active' : '' }}">Kontak</a>
                </div>
                <div class="d-flex m-3 me-0">
                    <!-- <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button> -->
                    <a href="{{ url('Cart') }}" class="position-relative me-4 my-auto">
                        <i class="fa fa-shopping-bag fa-2x"></i>
                    </a>
                    <!-- Tautan Login atau Logout -->
                    @guest
                        <a href="{{ url('Login') }}" class="my-auto">
                            <i class="fas fa-user fa-2x"></i>
                        </a>
                    @endguest

                    @auth
                        <a href="{{ url('Logout') }}" class="my-auto"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt fa-2x"></i>
                        </a>

                        <form id="logout-form" action="{{ url('Logout') }}" method="get" style="display: none;">
                            @csrf
                        </form>
                    @endauth

                </div>
            </div>
        </nav>
    </div>
</div>
