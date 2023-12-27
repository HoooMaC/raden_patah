<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ url('/home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class=""></i>Masjid Raden Patah</h2>
    </a>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav me-4 ms-auto p-4 p-lg-0 d-flex align-items-center">
            <a href="{{ url('/home') }}"
                class="nav-item nav-link {{ Request::path() === 'home' ? 'active' : '' }}">Profil</a>
            <div class="dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-haspopup=”true” aria-expanded=”false”>Program</a>
                <div class = "dropdown-menu px-4" aria-labelledby = "navbarDropdown" >
                    <a href="{{ url('/progharian') }}"
                        class= "nav-item nav-link {{ Request::path() === 'progharian' ? 'active' : '' }}">Program Harian</a>
                    <hr />
                    <a href="{{ url('/progmingguan') }}"
                        class= "nav-item nav-link {{ Request::path() === 'progmingguan' ? 'active' : '' }}">Program Mingguan</a>
                    <hr />
                    <a href="{{ url('/proglainnya') }}"
                        class= "nav-item nav-link {{ Request::path() === 'proglainnya' ? 'active' : '' }}">Program Lainnya</a> 
                </div>           
            </div>
            <a href="{{ url('/event') }}"
                class="nav-item nav-link {{ Request::path() === 'event' ? 'active' : '' }}">Event</a>
            <a href="{{ url('/unit') }}"
                class="nav-item nav-link {{ Request::path() === 'unit' ? 'active' : '' }}">Unit</a>
            <a href="{{ url('/layanan') }}"
                class="nav-item nav-link {{ Request::path() === 'layanan' ? 'active' : '' }}">Layanan</a>
            <a href="{{ url('/signin') }}" class="btn btn-primary h-50">Login</a>
        </div>
    </div>
</nav>
