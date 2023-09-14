@extends('index')

@section('konten')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">MRP Berbagi</h1>
                    <div class="breadcrumb-item"><a class="text-white" href="#">MRP Berbagi adalah kegiatan memberi kebahagiaan menuju perubahan dengan berbagi di suatu daerah</a></div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">EVENT DI MASJID RADEN PATAH</h6>
            <h3 class="mb-5">MRP BERBAGI</h3>
        </div>
        <div class="row portfolio-container">
                <div class="col-lg-3 col-md-6 mb-4 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="img/9.png" style="Width: 100%; height: 300px" alt="" />
                        <div class="image-overlay">
                            <div class="image-overlay-content">
                                <p class="image-description">Penyuluhan Kesehatan</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        {{-- <h5 class="mb-0">{{$data->nama_kegiatan}}</h5> --}}
                    </div>
                </div>
                </div>
        </div>
    </div>
</div>

@endsection