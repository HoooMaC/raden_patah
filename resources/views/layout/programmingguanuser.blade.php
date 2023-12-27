@extends('index')

@section('konten')
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">PROGRAM MINGGUAN</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

    {{-- PROGRAM MINGGUAN START --}}

    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">PROGRAM DI MASJID RADEN PATAH</h6>
                <h3 class="mb-5">PROGRAM MINGGUAN</h3>
            </div>
            <div class="row portfolio-container">
                @foreach ($program_mingguan as $data)
                    <div class="col-lg-3 col-md-6 mb-4 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="position-relative overflow-hidden mb-2">
                                <img class="img-fluid w-100" src="{{ asset('foto_programmingguan/' . $data->gambar) }}" style="Width: 100%; height: 300px" alt="" />
                                <div class="image-overlay">
                                    <div class="image-overlay-content">
                                        <p class="image-description">{{$data->keterangan}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">{{$data->nama_program}}</h5>
                                <small>{{$data->pelaksanaan}}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- PROGRAM MINGGUAN END --}}
    
@endsection
   