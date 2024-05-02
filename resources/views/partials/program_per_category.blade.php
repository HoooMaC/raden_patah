<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <div class="text-center wow" data-wow-delay="0.1s">
            <h6 class="mrp-section-title bg-white text-center text-primary px-3">PROGRAM DI MASJID RADEN PATAH</h6>
            <h3 class="mb-5">{{ strtoupper($programs['category_title']) }}</h3>
        </div>

        <div class="mrp-row mrp-program">
            @foreach ($programs['list'] as $program)
                <div class="program-card">
                    <div class="program-card__image-container">
                        <img class="program-card__image" src="{{ asset($program->icon) }}" alt="{{ $program->title }}" />
                    </div>
                    <div class="program-card__title-container">
                        <h5 class="program-card__title">{{ ucwords($program->title) }}</h5>
                        @if(isset($program->time))
                            <h6 class="program-card__schedule">{{ $program->time }}</h6>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
