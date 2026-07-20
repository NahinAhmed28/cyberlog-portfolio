{{-- SOC reviews - reference-style customer feedback cards --}}
@php
    $reviewUrl = Route::has('public.clients') ? route('public.clients') : (Route::has('clients') ? route('clients') : '#');
    $reviews = [
        [
            'source'      => 'Dhaka Stock Exchange (DSE)',
            'sourceKey'   => 'dse',
            'badgeTop'    => 'Financial',
            'badgeBottom' => 'Infrastructure',
            'award'       => 'Critical Financial Infrastructure Provider',
            'rating'      => '5.0',
            'quote'       => "As a critical financial infrastructure provider, security visibility isn't optional for us. Cyberlog's SOC team gave us continuous monitoring and faster incident response across our trading systems, with reporting our management could actually act on.",
        ],
        [
            'source'      => 'Bangladesh Petroleum Institute (BPI)',
            'sourceKey'   => 'bpi',
            'badgeTop'    => 'Energy &',
            'badgeBottom' => 'Research',
            'award'       => 'Government & Energy Sector Security',
            'rating'      => '5.0',
            'quote'       => "Cyberlog helped us structure our security monitoring from the ground up, better log visibility, faster alert triage, and clear guidance whenever something needed attention.",
        ],
        [
            'source'      => 'Adcomm Limited',
            'sourceKey'   => 'adcomm',
            'badgeTop'    => 'Enterprise',
            'badgeBottom' => 'Security',
            'award'       => 'Practical Incident Response Partner',
            'rating'      => '5.0',
            'quote'       => "Cyberlog's SOC support gave our team peace of mind. Their alerts were relevant, not noisy, and their incident response guidance was practical and easy for us to follow.",
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
            Cyberlog SOC helps organizations improve visibility, reduce alert noise, and respond to security incidents with confidence.
        </p>

        <div class="row g-4 cl-proof-grid">
            @foreach ($reviews as $review)
                <div class="col-md-4">
                    <article class="cl-proof-card h-100" data-reveal>
                        <div class="cl-proof-badge cl-proof-badge-{{ $review['sourceKey'] }}" aria-hidden="true">
                            <span>{{ $review['badgeTop'] }}</span>
                            <strong style="font-size: 0.5rem;">{{ $review['source'] }}</strong>
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
