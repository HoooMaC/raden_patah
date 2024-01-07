@extends('layout.index')

@section('konten')

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Event</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

{{-- MRP BERBAGI START --}}

<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">EVENT DI MASJID RADEN PATAH</h6>
            <h3 class="mb-5">MRP BERBAGI</h3>
        </div>
        <div class="row portfolio-container">
            @foreach ($mrpberbagi as $data)
                <div class="col-lg-3 col-md-6 mb-4 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ asset('foto_mrpberbagi/' . $data->gambar) }}" style="Width: 100%; height: 300px" alt="" />
                        <div class="image-overlay">
                            <div class="image-overlay-content">
                                <p class="image-description">{{$data->keterangan}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">{{$data->nama_kegiatan}}</h5>
                    </div>
                </div>
                </div>
            @endforeach
        </div>
    </div>
    <div>
        <form action="/galerimrpberbagi">
            <button type="submit" class="btn-submit">Read More</button>
        </form>
    </div>
</div>

    {{-- MRP BERBAGI END --}}


    {{-- GEBYAR RAMADHAN START --}}

    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">EVENT DI MASJID RADEN PATAH</h6>
                <h3 class="mb-5">GEBYAR RAMADHAN</h3>
            </div>
            <div class="row portfolio-container">
                @foreach ($gebyarramadhan as $data)
                    <div class="col-lg-3 col-md-6 mb-4 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid w-100" src="{{ asset('foto_gebyarramadhan/' . $data->gambar) }}" style="Width: 100%; height: 300px" alt="" />
                            <div class="image-overlay">
                                <div class="image-overlay-content">
                                    <p class="image-description">{{$data->keterangan}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">{{$data->nama_kegiatan}}</h5>
                             {{-- <small>{{$data->pelaksanaan}}</small>  --}}
                        </div>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div>
            <form action="/galerigebyarramadhan">
                <button type="submit" class="btn-submit">Read More</button>
            </form>
        </div>
    </div>

    {{-- GEBYAR RAMADHAN END --}}

    {{-- SYIAR DISABILITAS START --}}

    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">EVENT DI MASJID RADEN PATAH</h6>
                <h3 class="mb-5">SYIAR DISABILITAS</h3>
            </div>
            <div class="row portfolio-container">
                @foreach ($syiar as $data)
                    <div class="col-lg-3 col-md-6 mb-4 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid w-100" src="{{ asset('foto_syiar/' . $data->gambar) }}" style="Width: 100%; height: 300px" alt="" />
                        </div>
                        {{-- <div class="text-center p-4">
                            <h5 class="mb-0">{{$data->nama_kegiatan}}</h5>
                             <small>{{$data->pelaksanaan}}</small>
                        </div>  --}}
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div>
            <form action="/galerisyiardisabilitas">
                <button type="submit" class="btn-submit">Read More</button>
            </form>
        </div>
    </div>

    {{-- SYIAR DISABILITAS END --}}


@endsection
