<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <div class="text-center wow" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">PROGRAM DI MASJID RADEN PATAH</h6>
            <h3 class="mb-5">{{ strtoupper($programs['category_title']) }}</h3>
        </div>

        <!-- Carousel Section -->
        <div id="{{ str_replace(' ', '-', $programs['category_title']) }}" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @php
                    $count = 0;
                    $carouselId = str_replace(' ', '-', $programs['category_title']);
                @endphp
                @foreach ($programs['list'] as $program)
                    @if ($count % 4 == 0)
                        <div class="carousel-item @if ($count === 0) active @endif">
                            <div class="row justify-content-center">
                    @endif

                    <div class="col-6 col-md-3">
                        <div class="card bg-light border-0" style="width: 18rem; min-width: 18rem;">
                            <div class="program-item">
                                <div class="position-relative">
                                    @if ($program->icon !== '')
                                        <img class="img-fluid" src="{{ asset($program->icon) }}"
                                            alt="{{ $program->title }}" />
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="img-fluid"
                                            fill="#ccc">
                                            <!-- Your SVG content here -->
                                            <rect width="100%" height="100%" rx="15" />
                                        </svg>
                                    @endif
                                    <div class="program-overlay">
                                        <p>{{ $program->description }}</p>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <span class="d-block h5">{{ ucwords($program->title) }}</span>
                                    <span class="text-primary me-1">{{ $program->time }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    @php $count++; @endphp

                    @if ($count % 4 == 0 || $loop->last)
            </div>
        </div>
        @endif
        @endforeach
    </div>
    @if (count($programs['list']) > 4)
        <button class="carousel-control-prev" type="button" data-bs-target="#{{ $carouselId }}" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#{{ $carouselId }}" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    @endif
</div>
<!-- End Carousel Section -->
</div>
<script>
    var {{ $carouselId }} = new bootstrap.Carousel(document.querySelector('#{{ $carouselId }}'), {
        interval: false,
    });
</script>
</div>
