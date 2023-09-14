<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class=""></i>Masjid Raden Patah</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{url('/home')}}" class="nav-item nav-link {{ Request ::path() === 'home' ? 'active':''}}">Profil</a>
            <a href="{{url('/program')}}" class="nav-item nav-link {{ Request ::path() === 'program' ? 'active':''}}">Program</a>
            <a href="{{url('/event')}}" class="nav-item nav-link {{ Request ::path() === 'event' ? 'active':''}}">Event</a>
            <a href="{{url('/unit')}}" class="nav-item nav-link {{ Request ::path() === 'unit' ? 'active':''}}">Unit</a>
            <a href="{{url('/layanan')}}" class="nav-item nav-link {{ Request ::path() === 'layanan' ? 'active':''}}">Layanan</a>
            {{-- <div class="nav-item dropdown"> 
                <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('pages.*') ? 'active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{route('pages.layanan')}}" class="dropdown-item {{ request()->routeIs('pages.layanan') ? 'active' : '' }}">Layanan</a>
                    <a href="{{route('pages.pengumuman')}}" class="dropdown-item {{ request()->routeIs('pages.pengumuman') ? 'active' : '' }}">Pengumuman</a>
                     <a href="404.html" class="dropdown-item">404 Page</a> 
                </div>
            </div>  --}}
            {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
        </div>
        {{-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a> --}}
    </div>
</nav>