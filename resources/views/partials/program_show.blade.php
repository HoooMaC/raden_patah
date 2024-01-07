<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">PROGRAM DI MASJID RADEN PATAH</h6>
            <h3 class="mb-5">{{ $judul_program }}</h3>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center gap-3">
                @foreach ($programs as $program)
                    <div class="card d-flex align-item-center first wow fadeInUp bg-light border-0" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset($lokasi_gambar . $program->gambar) }}" alt="{{ $program->nama_program }}" height="80%" />
                        <div class="image-overlay">
                            <div class="image-overlay">
                                <div class="image-overlay-content">
                                    <p class="image-description">{{ $program->keterangan }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $program->nama_program }}</h5>
                            <p class="text-center">{{ $program->pelaksanaan }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
