<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <div class="text-center wow" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">PROGRAM DI MASJID RADEN PATAH</h6>
            <h3 class="mb-5">{{ strtoupper($programs['category_title']) }}</h3>
        </div>

        <div class="row justify-content-center">
            @foreach ($programs['list'] as $program)
                <div class="col-12 col-sm-6 col-md-3 mb-3">
                    <div class="card bg-light border-0">
                        <div class="program-item">
                            <div class="position-relative">
                                @if ($program->icon !== '')
                                    <img class="img-fluid" src="{{ asset($program->icon) }}" alt="{{ $program->title }}" />
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="img-fluid" fill="#ccc">
                                        <!-- Your SVG content here -->
                                        <rect width="100%" height="100%" rx="15" />
                                    </svg>
                                @endif
                                <div class="program-overlay" style="font-size: 14px; padding: 10px;">
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
            @endforeach
        </div>
    </div>
</div>
