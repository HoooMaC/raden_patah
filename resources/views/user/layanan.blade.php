@extends('layout.index')

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
            <h6 class="mrp-section-title bg-white text-center text-primary px-3">LAYANAN DI MASJID RADEN PATAH</h6>
            <h1 class="mb-5">LAYANAN</h1>
        </div>
        <div class="row g-4 justify-content-center ">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light"style="width: 100%; height: 100%;">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/8.png" alt="">
                    </div>
                    <div class="text-center p-2 pb-2">
                        <h3 class="mb-0">Mualaf Center</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                 <div class="course-item bg-light" style="width: 100%; height: 100%;">  {{-- agar ukuran nya sama --}}
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/19.png" alt="">
                    </div>
                    <div class="text-center p-2 pb-2">
                        <h3 class="mb-0">Konsultasi Keagamaan</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light" style="width: 100%; height: 100%;">  {{-- agar ukuran nya sama --}}
                   <div class="position-relative overflow-hidden">
                       <img class="img-fluid" src="img/7.png" alt="">
                   </div>
                   <div class="text-center p-2 pb-2">
                       <h3 class="mb-0">Pelayanan Akad Nikah</h3>
                   </div>
               </div>
           </div>
        </div>
    </div>
</div>
<!-- Courses End -->


@endsection
