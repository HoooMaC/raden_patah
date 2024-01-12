<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">PROGRAM DI MASJID RADEN PATAH</h6>
            <h3 class="mb-5">{{ strtoupper($programs['category_title']) }}</h3>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center gap-3">
                @foreach ($programs['list'] as $program)
                    <div class="card d-flex align-item-center first wow fadeInUp bg-light border-0" style="width: 18rem;">
                        @if ($program->icon !== '')
                            <img class="card-img-top" src="{{ asset($program->icon) }}" alt="{{ $program->title }}"
                                height="80%" />
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="100%" height="100"
                                fill="#ccc">
                                <!-- Your SVG content here -->
                                <rect width="100%" height="100%" rx="15" />
                            </svg>
                        @endif
                        <div class="image-overlay">
                            <div class="image-overlay">
                                <div class="image-overlay-content">
                                    <p class="image-description">{{ $program->description }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ ucwords($program->title) }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
