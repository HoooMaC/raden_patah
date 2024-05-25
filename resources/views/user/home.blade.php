{{-- @dd($data) --}}
@extends('layout.index')

@section('konten')
    @include('partials.carousel')


    {{-- @isset($announcements) --}}
    {{-- <div class="text-center"> --}}
    {{-- <h1 class="section-title bg-white text-center text-primary px-3">PENGUMUMAN</h1> --}}
    {{-- </div> --}}
    {{-- Looping semua pengumuman --}}
    {{-- @foreach ($announcements as $announcement) --}}
    {{-- Bagian pengumuman terdekat --}}
    {{-- @if ($loop->first) --}}
    {{-- <div class="mt-5 col-lg-12 col-sm-12 wow fadeInUp" data-wow-delay="0.1s"> --}}
    {{-- <div class="service-item text-center pt-3"> --}}
    {{-- <div class="p-4"> --}}
    {{-- <h4 class="section-title text-center text-primary px-3">&ldquo;{{ $announcement->title }}&rdquo; --}}
    {{-- </h4> --}}
    {{-- <p>{{ $announcement->body }}</p> --}}
    {{-- <p>{{ $announcement->caption }}</p> --}}
    {{-- <p>{{ $announcement->date }}</p> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- </div> --}}
    {{-- Bagian pengumuman segera datang : 3 --}}
    {{-- @else --}}
    {{-- <div class="text-center"> --}}
    {{-- <h4>&ldquo;{{ $announcement->title }}</h4> --}}
    {{-- <p>{{ $announcement->body }}</p> --}}
    {{-- <p>{{ $announcement->caption }}</p> --}}
    {{-- <p>{{ $announcement->date }}</p> --}}
    {{-- </div> --}}
    {{-- @endif --}}
    {{-- @endforeach --}}
    {{-- @endisset --}}

    @include('partials.tentang')

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
                    <h6 class="mrp-section-title--start ">Tentang Masjid Raden Patah</h6>
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
                <div class="col-lg-6 wow fadeInUp  order-lg-last" data-wow-delay="0.1s" style="min-height: 400px;">
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


    {{--   Artikel Start --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row wow fadeInUp">
                <h1 class="mrp-section-article-title bg-white text-center text-primary p-3">ARTIKEL</h1>

                <div class="mrp-article-box mt-3">
                    <img class="mrp-article-image" src={{ asset('img/footage_mesjid_8.JPG') }} alt="mesjid mrp">
                    <div class="mrp-article-content">
                        <div>
                            <h2 class="mrp-article-content__title">Menelusuri Sejarah dan Kekuatan Simbolis Masjid Raden
                                Patah</h2>
                            <div class="mrp-article-content__body mt-2">Masjid telah menjadi bagian penting dari kehidupan
                                masyarakat, tidak hanya sebagai tempat ibadah, tetapi juga sebagai ikon keagamaan dan
                                kebudayaan, serta menjadi titik fokus dalam mengeksplorasi sejarah dan seni bangsa....</div>
                        </div>
                        <a href="/article" class="mrp-article-content__link">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--   Artikel End --}}



    {{-- Fasilitas Start --}}
    @include('partials.fasilitas')
    {{-- Fasilitas End --}}

    {{-- @include('partials.artikel') --}}
@endsection
