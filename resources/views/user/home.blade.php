{{-- @dd($data) --}}
@extends('layout.index')

@section('konten')
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('img/MRP.png') }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Selamat Datang di</h5>
                                <h1 class="display-3 text-white animated slideInDown">Masjid Raden Patah Universitas
                                    Brawijaya</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('img/2.png') }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Selamat Datang di</h5>
                                <h1 class="display-3 text-white animated slideInDown">Masjid Raden Patah Universitas
                                    Brawijaya</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @isset($pengumuman1)
        <div class="text-center">
            <h1 class="section-title bg-white text-center text-primary px-3">PENGUMUMAN</h1>
        </div>
        @foreach ($pengumuman1 as $data)
            <div class="mt-5 col-lg-12 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        {{-- <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i> --}}
                        <h1 class="mb-3">{{ $data->nama_kegiatan }}</h1>
                        <h4 class="section-title text-center text-primary px-3">&ldquo;{{ $data->judul }}&rdquo;</h4>
                        <h3>{{ $data->pemateri }}</h3>
                        <p>{{ $data->pelaksanaan }}</p>
                        <p>{{ $data->tempat }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    @endisset


    {{-- TENTANG START --}}

    @include('partials.tentang')

    {{-- TENTANG END --}}

    {{-- PENJELASAN START --}}

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/about 1.png') }}"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Tentang Masjid Raden Patah</h6>
                    <h1 class="mb-4">Welcome to Masjid Raden Patah</h1>
                    <p class="mb-4">Masjid Raden Patah merupakan masjid kampus terbesar yang ada di lingkungan civitas
                        akademika Universitas Brawijaya. Masjid Raden Patah berdiri sejak tahun 1975 dan hanya menampung
                        sebanyak 200 jamaah. Masjid ini mengalami pemugaran, dengan meratakan bangunan lama dan memulai
                        pembangunan masjid yang baru dengan arsitektur bergaya Majapahit. Masjid Raden Patah diresmikan
                        kembali pada tahun 2018 dan kini dapat menampung sekitar 7.000 jamaah.</p>
                    <p>
                        Sebagai bagian dari Universitas Brawijaya, visi dan misi Masjid Raden Patah mencerminkan
                        penerjemahan
                        dari Tri Dharma Perguruan Tinggi dalam kacamata dakwah. Secara umum kegiatan yang dijalankan
                        mencakup bidang pendidikan dan pengkaderan, peribadatan dan pelayanan, pengembangan usaha dan
                        pemberdayaan ekonomi umat. Selanjutnya, insan akademis sebagai ciri khas kampus telah
                        menginspirasi Masjid Raden Patah untuk
                        mewujudkan ulul abab atau sosok cendekiawan muslim masa depan yang dapat memajukan peradaban.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp  order-lg-last" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/about 1.png') }}"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4">Visi Masjid Raden Patah</h1>
                    <p>Visi Masjid Raden Patah Universitas Brawijaya adalah “menjadi masjid kampus yang memajukan peradaban
                        dengan berbasis pada pengembangan insan dan masyarakat serta intelektualitas Islami”</p>


                    <div class="row gy-2 gx-4 mb-4">
                        <h1 class="mb-4">Misi Masjid Raden Patah</h1>
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menjadikan masjid sebagai pusat
                            kegiatan kemahasiswaan dan kemasyarakatan </p>
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menjadikan masjid sebagai
                            tempat rekreasi rohani jamaah.</p>
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menjadikan masjid sebagai
                            tempat merujuk berbagai persoalan keumatan.</p>
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menjadikan masjid sebagai pusat
                            studi bagi mahasiswa dan masyarakat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- Fasilitas Start --}}

    @include('partials.fasilitas')

    {{-- Fasilitas End --}}
    @include('partials.artikel')
@endsection
