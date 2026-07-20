{{-- Reusable customer reviews / "say it best" section --}}
@php
    $reviewUrl = Route::has('public.clients') ? route('public.clients') : (Route::has('clients') ? route('clients') : '#');
    $reviews = [
        [
            'source'      => 'BIDA (Bangladesh Investment Development Authority)',
            'sourceKey'   => 'bida',
            'badgeTop'    => 'Government',
            'badgeBottom' => 'Platform',
            'award'       => 'National Investment Platform Assessment',
            'rating'      => '5.0',
            'quote'       => "As Bangladesh's national investment platform, our systems can't afford weak points. Cyberlog's VAPT team identified real, exploitable risks across our platform and gave us a clear path to fix them, the kind of assessment a government platform needs.",
        ],
        [
            'source'      => 'a2i (Aspire to Innovate)',
            'sourceKey'   => 'a2i',
            'badgeTop'    => 'Citizen',
            'badgeBottom' => 'Services',
            'award'       => 'Methodical & Thorough Security Testing',
            'rating'      => '5.0',
            'quote'       => "Our digital services reach millions of citizens, so security testing has to be thorough and precise. Cyberlog's assessment was methodical, well-documented, and gave our technical team exactly the evidence needed to prioritize fixes.",
        ],
        [
            'source'      => 'AamarTaka.com',
            'sourceKey'   => 'aamartaka',
            'badgeTop'    => 'Financial',
            'badgeBottom' => 'Marketplace',
            'award'       => 'Core Trust & Actionable Engineering Reports',
            'rating'      => '5.0',
            'quote'       => "As a financial marketplace handling sensitive customer data, security testing isn't a formality for us, it's core to trust. Cyberlog's VAPT team found real, practical risks in our platform and helped us close them fast, with reporting our engineering team could act on immediately.",
        ],
    ];
@endphp

<section class="page-section cl-proof-reviews" id="reviews">
    <div class="container">
        <p class="section-eyebrow cl-proof-kicker text-center mb-2" data-reveal>CLIENT FEEDBACK</p>
        <h2 class="page-section-heading cl-proof-title text-center mb-3" data-reveal>
            Our customers <span>say it best</span>
        </h2>
        <p class="cl-proof-copy text-center text-muted mb-0" data-reveal>
            Recognized by clients for practical security delivery, clear reporting, and measurable improvements.
        </p>

        <div class="row g-4 cl-proof-grid">
            @foreach ($reviews as $review)
                <div class="col-md-4">
                    <article class="cl-proof-card h-100" data-reveal>
                        <div class="cl-proof-badge cl-proof-badge-{{ $review['sourceKey'] }}" aria-hidden="true">
                            <span>{{ $review['badgeTop'] }}</span>
                            <strong style="font-size: .5rem;">{{ $review['source'] }}</strong>
                            <span>{{ $review['badgeBottom'] }}</span>
                        </div>
                        <h3 class="cl-proof-award">{{ $review['award'] }}</h3>
                        <div class="cl-proof-rating" aria-label="{{ $review['rating'] }} out of 5 stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <span>{{ $review['rating'] }}</span>
                        </div>
                        <p class="cl-proof-quote">&ldquo;{{ $review['quote'] }}&rdquo;</p>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>
