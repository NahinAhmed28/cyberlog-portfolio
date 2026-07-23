@php
    $reviews = [
        [
            'rating' => '5.0',
            'quote' => "As Bangladesh's national investment platform, our systems can't afford weak points. Cyberlog's VAPT team identified real, exploitable risks across our platform and gave us a clear path to fix them—the kind of assessment a government platform needs.",
            'name' => 'BIDA (Bangladesh Investment Development Authority)',
            'badge' => 'Government Platform',
        ],
        [
            'rating' => '5.0',
            'quote' => "Our digital services reach millions of citizens, so security testing has to be thorough and precise. Cyberlog's assessment was methodical, well-documented, and gave our technical team exactly the evidence needed to prioritize fixes.",
            'name' => 'a2i (Aspire to Innovate)',
            'badge' => 'Digital Public Services',
        ],
        [
            'rating' => '5.0',
            'quote' => "As a financial marketplace handling sensitive customer data, security testing isn't a formality for us—it's core to trust. Cyberlog's VAPT team found real, practical risks in our platform and helped us close them fast, with reporting our engineering team could act on immediately.",
            'name' => 'AamarTaka.com',
            'badge' => 'Financial Marketplace',
        ],
    ];
@endphp

<section class="page-section cl-vapt-reviews" id="reviews">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>CLIENT FEEDBACK</p>
        <h2 class="page-section-heading text-center text-secondary mb-2" data-reveal>
            Our Customers <span class="text-warning">Say It Best</span>
        </h2>
        <p class="text-muted text-center lead-narrow mb-5" data-reveal>
            Recognized by clients for practical security delivery, clear reporting, and measurable improvements.
        </p>

        <div class="row g-4">
            @foreach ($reviews as $review)
                <div class="col-md-4">
                    <article class="cl-vapt-review h-100 d-flex flex-column" data-reveal>
                        <div class="cl-vapt-review-rating mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <span>{{ $review['rating'] }}</span>
                        </div>
                        <p class="cl-vapt-review-quote">&ldquo;{{ $review['quote'] }}&rdquo;</p>
                        <div class="mt-auto">
                            <div class="cl-vapt-review-name">{{ $review['name'] }}</div>
                            <span class="cl-vapt-review-tag">{{ $review['badge'] }}</span>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-vapt-reviews {
        background:
            radial-gradient(520px 360px at 92% 8%, rgba(255, 138, 0, .1), transparent 62%),
            radial-gradient(740px 420px at 12% 18%, rgba(109, 156, 255, .08), transparent 62%),
            linear-gradient(180deg, rgba(5, 10, 18, .99), rgba(7, 17, 31, .98));
    }
    .cl-vapt-review {
        min-height: 310px;
        padding: clamp(1.35rem, 2.6vw, 2rem);
        border: 1px solid rgba(255, 255, 255, .12);
        border-radius: 8px;
        background: rgba(10, 17, 27, .78);
        color: var(--text);
    }
    .cl-vapt-review-rating {
        display: flex;
        align-items: center;
        gap: .18rem;
        color: var(--warm-soft);
        font-size: .9rem;
    }
    .cl-vapt-review-rating span {
        margin-left: .45rem;
        color: var(--white);
        font-family: 'IBM Plex Mono', monospace;
        font-weight: 700;
    }
    .cl-vapt-review-quote {
        color: var(--white);
        font-style: italic;
        line-height: 1.7;
        margin-bottom: 1.4rem;
    }
    .cl-vapt-review-name {
        color: var(--white);
        font-weight: 700;
        line-height: 1.45;
    }
    .cl-vapt-review-tag {
        display: inline-flex;
        margin-top: .8rem;
        padding: .34rem .58rem;
        border: 1px solid rgba(109, 156, 255, .26);
        border-radius: 6px;
        background: rgba(47, 107, 255, .14);
        color: var(--blue-bright);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .72rem;
    }
</style>
@endpush
