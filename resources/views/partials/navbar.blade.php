<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ url('/home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class=""></i>Masjid Raden Patah</h2>
    </a>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav me-4 ms-auto p-4 p-lg-0 d-flex align-items-center">
            <a href="{{ url('/home') }}"
                class="nav-item nav-link {{ Request::path() === 'home' ? 'active' : '' }}">Profil</a>
            <a href="{{ url('/program') }}"
                class="nav-item nav-link {{ Request::path() === 'program' ? 'active' : '' }}">Program</a>
            <a href="{{ url('/unit') }}"
                class="nav-item nav-link {{ Request::path() === 'unit' ? 'active' : '' }}">Unit</a>
            <a href="{{ url('/layanan') }}"
                class="nav-item nav-link {{ Request::path() === 'layanan' ? 'active' : '' }}">Layanan</a>
            {{-- TEMPORARY Inactive for now --}}
            {{-- <a href="{{ url('/signin') }}" class="btn btn-primary h-50">Login</a> --}}
        </div>
    </div>
</nav>
