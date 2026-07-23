@php
    $reviews = [
        [
            'rating' => '5.0',
            'quote' => "As Bangladesh's national investment platform, our systems can't afford weak points. Cyberlog's VAPT team identified real, exploitable risks across our platform and gave us a clear path to fix them—the kind of assessment a government platform needs.",
            'name' => 'BIDA (Bangladesh Investment Development Authority)',
            'initials' => 'BIDA',
        ],
        [
            'rating' => '5.0',
            'quote' => "Our digital services reach millions of citizens, so security testing has to be thorough and precise. Cyberlog's assessment was methodical, well-documented, and gave our technical team exactly the evidence needed to prioritize fixes.",
            'name' => 'a2i (Aspire to Innovate)',
            'initials' => 'a2i',
        ],
        [
            'rating' => '5.0',
            'quote' => "As a financial marketplace handling sensitive customer data, security testing isn't a formality for us—it's core to trust. Cyberlog's VAPT team found real, practical risks in our platform and helped us close them fast, with reporting our engineering team could act on immediately.",
            'name' => 'AamarTaka.com',
            'initials' => 'AT',
        ],
    ];
@endphp

<section class="page-section cl-proof-reviews cl-vapt-proof-reviews" id="reviews">
    <div class="container">
        <p class="section-eyebrow cl-proof-kicker text-center mb-2" data-reveal>CLIENT FEEDBACK</p>
        <h2 class="page-section-heading cl-proof-title text-center mb-3" data-reveal>
            Our customers <span>say it best</span>
        </h2>
        <p class="cl-proof-copy text-muted text-center mb-0" data-reveal>
            Recognized by clients for practical security delivery, clear reporting, and measurable improvements.
        </p>

        <div class="row g-4 cl-proof-grid">
            @foreach ($reviews as $review)
                <div class="col-md-4">
                    <article class="cl-proof-card h-100" data-reveal>
                        <div class="cl-proof-badge" aria-hidden="true">
                            <strong>{{ $review['initials'] }}</strong>
                        </div>
                        <h3 class="cl-proof-award">{{ $review['name'] }}</h3>
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

@push('styles')
<style>
    .cl-vapt-proof-reviews {
        background:
            radial-gradient(520px 360px at 92% 8%, rgba(255, 138, 0, .1), transparent 62%),
            radial-gradient(740px 420px at 12% 18%, rgba(109, 156, 255, .08), transparent 62%),
            linear-gradient(180deg, rgba(5, 10, 18, .99), rgba(7, 17, 31, .98));
    }
    .cl-vapt-proof-reviews .cl-proof-badge strong {
        font-size: .72rem;
        letter-spacing: -.02em;
    }
    .cl-vapt-proof-reviews .cl-proof-award {
        max-width: 19rem;
        font-size: 1rem;
    }
</style>
@endpush
