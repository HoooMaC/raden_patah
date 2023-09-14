@extends('index')

@section('konten')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Layanan</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li> --}}
                        {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                        {{-- <li class="breadcrumb-item text-white active" aria-current="page">Layanan</li> --}}
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Courses Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">LAYANAN DI MASJID RADEN PATAH</h6>
            <h1 class="mb-5">LAYANAN</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light"style="width: 100%; height: 100%;">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/8.png" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="mualafcenter" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px; border-top-right-radius: 30px; border-bottom-right-radius: 30px;">Daftar</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Mualaf Center</h3>
                        <h6 class ="mb-4">Program yang bertugas melakukan pembinaan dan pendampingan kepada mualaf sesuai tuntutan syara' agar menjadi muslim dan muslimah Kaffah.</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                 <div class="course-item bg-light" style="width: 100%; height: 100%;">  {{-- agar ukuran nya sama --}}
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/19.png" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="/konsultasikeagamaan" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px; border-top-right-radius: 30px; border-bottom-right-radius: 30px;">Daftar</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0">Konsultasi Keagamaan</h3>
                        <h6 class="mb-4">Program pelayanan konsultasi kepada masyarakat terkait syariat Islam agar menjadi muslim dan muslimah Kaffah</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light" style="width: 100%; height: 100%;">  {{-- agar ukuran nya sama --}}
                   <div class="position-relative overflow-hidden">
                       <img class="img-fluid" src="img/7.png" alt="">
                       <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                           <a href="/akadnikah" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px; border-top-right-radius: 30px; border-bottom-right-radius: 30px;">Daftar</a>
                       </div>
                   </div>
                   <div class="text-center p-4 pb-0">
                       <h3 class="mb-0">Pelayanan Akad Nikah</h3>
                       <h6 class="mb-4">Program pelayanan nikah kepada masyarakat yang ingin akad di Masjid Raden Patah sesuai syariat Islam</h6>
                   </div>
               </div>
           </div>
        </div>
    </div>
</div>
<!-- Courses End -->


@endsection