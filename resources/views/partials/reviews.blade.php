{{-- Reusable customer reviews / "say it best" section --}}
@php
    $reviewUrl = Route::has('public.clients') ? route('public.clients') : (Route::has('clients') ? route('clients') : '#');
    $reviews = [
        [
            'source' => 'G2',
            'sourceKey' => 'g2',
            'badgeTop' => 'High',
            'badgeBottom' => 'Performer',
            'award' => 'Named as a High Performer for security assessment services',
            'rating' => '4.8',
            'quote' => "Cyberlog's VAPT work showed strong professionalism and helped improve our cyber defense posture.",
        ],
        [
            'source' => 'Gartner',
            'sourceKey' => 'gartner',
            'badgeTop' => 'Peer',
            'badgeBottom' => 'Insights',
            'award' => 'Managed Detection and Response (MDR)',
            'rating' => '4.9',
            'quote' => 'Their pen testers found issues our previous vendor missed. The remediation guidance was clear and prioritized.',
        ],
        [
            'source' => 'Clutch',
            'sourceKey' => 'clutch',
            'badgeTop' => 'Top',
            'badgeBottom' => 'Company',
            'award' => 'Named as a top cybersecurity company in Bangladesh',
            'rating' => '5.0',
            'quote' => 'From ISO 27001 to staff training, Cyberlog has been a genuine partner in our compliance journey.',
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
                            <strong>{{ $review['source'] }}</strong>
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
