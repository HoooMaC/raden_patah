@extends('index')

@section('konten')
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('img/MRP.png')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Selamat Datang di</h5>
                            <h1 class="display-3 text-white animated slideInDown">Masjid Raden Patah Universitas Brawijaya</h1>
                            {{-- <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p> --}}
                             {{-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('img/2.png')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Selamat Datang di</h5>
                            <h1 class="display-3 text-white animated slideInDown">Masjid Raden Patah Universitas Brawijaya</h1>
                            {{-- <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p> --}}
                            {{-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a> --}}
                            {{-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-center">
    <h1 class="section-title bg-white text-center text-primary px-3">PENGUMUMAN</h1>
</div>
<br>
@isset($pengumuman1)
@foreach ($pengumuman1 as $data)
<div class="col-lg-12 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item text-center pt-3">
        <div class="p-4">
            {{-- <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i> --}}
            <h1 class="mb-3">{{$data->nama_kegiatan}}</h1>
            <h4 class="section-title text-center text-primary px-3">&ldquo;{{$data->judul}}&rdquo;</h4>
            <p><h3>{{$data->pemateri}}</h3></p>
            <p>{{$data->pelaksanaan}}</p>
            <p>{{$data->tempat}}</p>
        </div>
    </div>
</div>

@endforeach
@endisset


    {{-- TENTANG START --}}

    @include('layout.tentang')

    {{-- TENTANG END --}}

    {{-- PENJELASAN START --}}

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{asset('img/about 1.png')}}" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Tentang Masjid Raden Patah</h6>
                <h1 class="mb-4">Welcome to Masjid Raden Patah</h1>
                <p class="mb-4">Masjid Raden Patah merupakan masjid kampus terbesar yang ada di lingkungan civitas akademika Universitas Brawijaya. Masjid Raden Patah berdiri sejak tahun 1975 dan hanya menampung sebanyak 200 jamaah. Masjid ini mengalami pemugaran, dengan meratakan bangunan lama dan memulai pembangunan masjid yang baru dengan arsitektur bergaya Majapahit. Masjid Raden Patah diresmikan kembali pada tahun 2018 dan kini dapat menampung sekitar 7.000 jamaah.</p>
                <br>
                <p>Sebagai bagian dari Universitas Brawijaya, visi dan misi Masjid Raden Patah mencerminkan penerjemahan 
                    dari Tri Dharma Perguruan Tinggi dalam kacamata dakwah. Secara umum kegiatan yang dijalankan 
                    mencakup bidang pendidikan dan pengkaderan, peribadatan dan pelayanan, pengembangan usaha dan 
                    pemberdayaan ekonomi umat. Selanjutnya, insan akademis sebagai ciri khas kampus telah 
                    menginspirasi Masjid Raden Patah untuk 
                    mewujudkan ulul abab atau sosok cendekiawan muslim masa depan yang dapat memajukan peradaban.</p>
                
                {{-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> --}}
            </div>
        </div>
    </div>
</div>

<hr>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp  order-lg-last" data-wow-delay="0.1s">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{asset('img/about 1.png')}}" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                {{-- <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6> --}}
                <h1 class="mb-4">Visi Masjid Raden Patah</h1>
                <p>Visi Masjid Raden Patah Universitas Brawijaya adalah “menjadi masjid kampus yang memajukan peradaban 
                    dengan berbasis pada pengembangan insan dan masyarakat serta intelektualitas Islami”</p>
                {{-- <p class="mb-4">Masjid Raden Patah merupakan masjid kampus terbesar yang ada di lingkungan civitas akademika Universitas Brawijaya. Masjid Raden Patah berdiri sejak tahun 1975 dan hanya menampung sebanyak 200 jamaah. Masjid ini mengalami pemugaran, dengan meratakan bangunan lama dan memulai pembangunan masjid yang baru dengan arsitektur bergaya Majapahit. Masjid Raden Patah diresmikan kembali pada tahun 2018 dan kini dapat menampung sekitar 5.000 jamaah. .</p> --}}
                
                
                <div class="row gy-2 gx-4 mb-4"> 
                    <h1 class="mb-4">Misi Masjid Raden Patah</h1>
                    {{-- <div class="col-sm-6"> --}}
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menjadikan masjid sebagai pusat kegiatan kemahasiswaan dan kemasyarakatan </p>
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menjadikan masjid sebagai tempat rekreasi rohani jamaah.</p>
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menjadikan masjid sebagai tempat merujuk berbagai persoalan keumatan.</p>
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menjadikan masjid sebagai pusat studi bagi mahasiswa dan masyarakat.</p>

                    </div>
                    {{-- <div class="col-sm-6"> 
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menjadikan masjid sebagai pusat kegiatan mahasiswa dan masyarakat.</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menjadikan masjid sebagai tempat rekreasi rohani jama’ah</p>
                    </div>
                 
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menjadikan masjid sebagai tempat merujuk berbagai persoalan keummatan</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Menjadikan masjid sebagai pesantren dan kampus bagi mahasiswa dan masyarakat</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Membangun dan menggerakkan pemikiran Islami yang rahmatan lil ‘alamin baik di lingkungan kampus maupun masyarakat.</p>
                    </div>  --}} 
                </div>
                {{-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> --}}
            </div>
        </div>
    </div>
</div>

{{-- Fasilitas Start --}}

@include('layout.fasilitas')

{{-- Fasilitas End --}}
@include('layout.artikel')


@endsection





    {{-- PENJELASAN END --}}

    {{-- PROGRAM START 

<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Program di Masjid Raden Patah</h6>
            <h1 class="mb-5">PROGRAM MINGGUAN</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="{{asset('img/kismala.png')}}" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">KISMALA</h5>
                                <small class="text-primary">49 Courses</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="{{asset('img/kiswah.png')}}" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">KISWAH</h5>
                                <small class="text-primary">49 Courses</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="">
                            <img class="img-fluid" src="{{asset('img/kelas tahsin.png')}}" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Kelas Tahsin</h5>
                                <small class="text-primary">49 Courses</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{asset('img/BTA.png')}}" alt="" style="object-fit: cover;">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                        <h5 class="m-0">Kelas Seni Baca Al-Qur'an</h5>
                        <small class="text-primary">49 Courses</small>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">PROGRAM DI MASJID RADEN PATAH</h6>
            <h1 class="mb-5">PROGRAM HARIAN</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/team-1.jpg')}}" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">BTA (Baca Tulis Al-Qur'an)</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/kultum dhuhur.png')}}" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Kultum Dhuhur</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/team-3.jpg')}}" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Kajian Ba'da Maghrib</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/team-4.jpg')}}" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">TPQS (Taman Pendidikan Al-Qur'an dan Sains)</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
            <h1 class="mb-5">Popular Courses</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/course-1.jpg')}}" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">$149.00</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(123)</small>
                        </div>
                        <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/course-2.jpg')}}" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">$149.00</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(123)</small>
                        </div>
                        <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/course-3.jpg')}}" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">$149.00</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(123)</small>
                        </div>
                        <h5 class="mb-4">Web Design & Development Course for Beginners</h5>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- PROGRAM END --}}

    

    

