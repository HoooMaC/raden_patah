<nav class="mrp-navbar">
    <div class="mrp-container">
        <a href="{{ url('/') }}" class="mrp-navbar__logo">
            <h2>Masjid Raden Patah</h2>
        </a>

        {{-- This won't show in mobile --}}
        <div class="mrp-navbar__list" id="navbarCollapse">
            <a href="{{ url('/') }}"
                class="mrp-navbar__link {{ Request::path() === '/' ? 'active' : '' }}">Profil</a>
            <a href="{{ url('/program') }}"
                class="mrp-navbar__link {{ Request::path() === 'program' ? 'active' : '' }}">Program</a>
            <a href="{{ url('/unit') }}"
                class="mrp-navbar__link {{ Request::path() === 'unit' ? 'active' : '' }}">Unit</a>
            <a href="{{ url('/layanan') }}"
                class="mrp-navbar__link {{ Request::path() === 'layanan' ? 'active' : '' }}">Layanan</a>
        </div>

        {{-- Help me to check if user is logged in or not, if it is show logout button that send post request to /logout --}}
        @auth
            <a href="{{ route('logout') }}" class="mrp-navbar__link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <p>{{ auth()->user()->name }}</p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <p>Not Logged in</p>
        @endauth

        <i class="mrp-navbar__bars  fa-solid fa-bars"></i>
    </div>
</nav>


<div class="mrp-mobile-nav">
    <ul class="mrp-mobile-nav__list">
        <li class="mrp-mobile-nav__item">
            <a href="{{ url('/') }}"
                class="mrp-mobile-nav__link {{ Request::path() === '/' ? 'active' : '' }}">Profil</a>
        </li>
        <li class="mrp-mobile-nav__item">
            <a href="{{ url('/program') }}"
                class="mrp-mobile-nav__link {{ Request::path() === 'program' ? 'active' : '' }}">Program</a>
        </li>
        <li class="mrp-mobile-nav__item">
            <a href="{{ url('/unit') }}"
                class="mrp-mobile-nav__link {{ Request::path() === 'unit' ? 'active' : '' }}">Unit</a>
        </li>
        <li class="mrp-mobile-nav__item">
            <a href="{{ url('/layanan') }}"
                class="mrp-mobile-nav__link {{ Request::path() === 'layanan' ? 'active' : '' }}">Layanan</a>
        </li>
    </ul>
</div>
