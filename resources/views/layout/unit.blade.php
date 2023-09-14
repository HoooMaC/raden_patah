@extends('index')

@section('konten')
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">UNIT</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li> --}}
                        {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                        {{-- <li class="breadcrumb-item text-white active" aria-current="page">Unit</li> --}}
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

        <!-- UMAR Start -->
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('img/UMAR.jpg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    {{-- <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6> // --}}
                    <h1 class="mb-4">UMAR (Unit Mahasiswa Masjid Raden Patah) </h1>
                    <p class="mb-4">UMAR (Unit Mahasiswa Masjid Raden Patah) adalah perkumpulan remaja masjid yang bertugas
                                    melayani jamaah dan membantu seluruh kegiatan yang ada di Masjid Raden Patah. </p>
                    <p class="mb-4">Di dalam UMAR terdapat berbagai divisi, setiap tahun UMAR membuka open recruitment. Jadi, 
                                    para mahasiswa yang ingin tergabung dalam perkumpulan remaja masjid bisa banget join yaa. 
                                    Divisi yang tersedia di UMAR : </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Program dan Dakwah</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Desain dan Multimedia Broadcasting</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pengembangan Sumber Daya Internal</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Development IT</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Social Media Spesialist</p>
                        </div>
                    </div>
                    {{-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- UMAR End -->

    <!-- PTQ Start -->
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('img/PTQ.jpg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    {{-- <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6> // --}}
                    <h1 class="mb-4">PTQ (Pusat Tahfidz Qur'an) </h1>
                    <p class="mb-4">PTQ (Pusat Tahfidz Qur'an) adalah perkumpulan remaja masjid yang difokuskan untuk menghafal
                                    Al-Qur'an dan terdapat berbagai program kerja yang mendekatkan kita pada Al-Qur'an.</p>
                    <p class="mb-4">PTQ sangat direkomendasikan bagi mahasiswa yang ingin murojaah, tilawah, tartil Al-Qur'an.
                                    Kegiatan yang diselenggarakan oleh PTQ :
                    </p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Tahfidz Camp</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Wisuda Tahfidz</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Seminar Qur'ani</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Tahsin</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Baca Tulis Al-Qur'an</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Muro'jaah Al-Qur'an</p>
                        </div>
                    </div>
                    {{-- <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- PTQ End -->


    


@endsection
    