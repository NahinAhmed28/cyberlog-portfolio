
@php
    $sensors = content_items('soc_sensor_sensors');
@endphp

<section class="page-section" id="sensor">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>{{ content('soc_sensor', 'paragraph') }}</p>
        <h2 class="page-section-heading text-center text-secondary mb-2" data-reveal>{{ content('soc_sensor', 'heading') }}</h2>
        <p class="text-center text-muted lead-narrow mb-5" data-reveal>
            {{ content('soc_sensor', 'paragraph_2') }}
        </p>
        <div class="row g-4">
            @foreach ($sensors as $s)
                <div class="col-md-4">
                    <div class="cl-solution-card h-100">
                        <div class="cl-solution-icon"><i class="fas {{ $s[0] }}"></i></div>
                        <h5 class="fw-bold">{{ $s[1] }}</h5>
                        <p class="text-muted mb-0">{{ $s[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
