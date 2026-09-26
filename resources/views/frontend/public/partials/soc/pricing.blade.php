
@php
$plans = content_items('soc_pricing_plans');
    $contact = Route::has('public.contact') ? route('public.contact') : (Route::has('contact') ? route('contact') : '#');
@endphp

<section class="page-section" id="pricing">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>{{ content('soc_pricing', 'paragraph') }}</p>
        <h2 class="page-section-heading text-center text-secondary mb-5" data-reveal>{{ content('soc_pricing', 'heading') }}</h2>
        <div class="row g-4 justify-content-center">
            @foreach ($plans as $plan)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-price-card {{ $plan[3] ? 'featured' : '' }} h-100 d-flex flex-column">
                        @if ($plan[3])<span class="badge bg-primary mb-2 align-self-center">{{ content('soc_pricing', 'label') }}</span>@endif
                        <h4 class="fw-bold">{{ $plan[0] }}</h4>
                        <p class="text-muted">{{ $plan[1] }}</p>
                        <div class="cl-stat-num mb-3">{{ content('soc_pricing', 'div_text') }}</div>
                        <ul class="list-unstyled text-start mb-4">
                            @foreach ($plan[2] as $feat)
                                <li class="mb-2"><i class="{{ content('soc_pricing', 'icon') }}"></i>{!! $feat !!}</li>
                            @endforeach
                        </ul>
                        <a class="btn {{ $plan[3] ? 'btn-primary text-white' : 'btn-primary text-white' }} mt-auto fw-bold" href="{{ content('soc_pricing', 'destination') }}">{{ content('soc_pricing', 'link_label') }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
