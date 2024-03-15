<nav class="mrp-navbar">
    <a href="{{ url('/') }}" class="mrp-navbar__logo">
        <h2>Masjid Raden Patah</h2>
    </a>

    <div class="mrp-navbar__list" id="navbarCollapse">
        <a href="{{ url('/') }}" class="mrp-navbar__link {{ Request::path() === '/' ? 'active' : '' }}">Profil</a>
        <a href="{{ url('/program') }}"
            class="mrp-navbar__link {{ Request::path() === 'program' ? 'active' : '' }}">Program</a>
        <a href="{{ url('/unit') }}" class="mrp-navbar__link {{ Request::path() === 'unit' ? 'active' : '' }}">Unit</a>
        <a href="{{ url('/layanan') }}"
            class="mrp-navbar__link {{ Request::path() === 'layanan' ? 'active' : '' }}">Layanan</a>
        {{-- TEMPORARY Inactive for now --}}
        {{-- <a href="{{ url('/signin') }}" class="btn btn-primary h-50">Login</a> --}}
    </div>
    <i class="mrp-navbar__bars  fa-solid fa-bars"></i>
</nav>
