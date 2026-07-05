{{-- Reusable customer reviews / "say it best" section (ref: underdefense.com) --}}
<section class="page-section" id="reviews">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Client Feedback</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-2">
            Our Clients <span class="cl-title-accent">Say It Best</span>
        </h2>
        <p class="text-center text-muted mb-5">
            Recognized as a High Performer and a Top Cybersecurity Company by industry leaders.
        </p>

        <div class="row g-4">
            @foreach ([
                ['rating' => '4.8', 'quote' => "Cyberlog's VAPT work showed strong professionalism and helped improve our cyber defense posture.", 'name' => 'Dr. Dewan Muhammad Humayun Kabir, ex Project Director, a2i', 'badge' => 'VAPT Services'],
                ['rating' => '4.9', 'quote' => 'Their pen testers found issues our previous vendor missed. The remediation guidance was clear and prioritized.', 'name' => 'Head of IT, Government Agency', 'badge' => 'Managed Detection &amp; Response'],
                ['rating' => '5.0', 'quote' => 'From ISO 27001 to staff training, Cyberlog has been a genuine partner in our compliance journey.', 'name' => 'Compliance Lead, Enterprise', 'badge' => 'Top Cybersecurity Company 2025'],
            ] as $r)
                <div class="col-md-4">
                    <article class="cl-about-review h-100 d-flex flex-column" data-reveal>
                        <div class="cl-about-review-stars mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <span class="cl-about-review-score">{{ $r['rating'] }}</span>
                        </div>
                        <p class="cl-about-review-quote">&ldquo;{{ $r['quote'] }}&rdquo;</p>
                        <div class="mt-auto">
                            <div class="cl-about-review-name">{{ $r['name'] }}</div>
                            <span class="cl-about-review-tag">{!! $r['badge'] !!}</span>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-about-review {
        min-height: 300px;
        padding: clamp(1.35rem, 2.6vw, 2rem);
        border: 1px solid rgba(255, 255, 255, .12);
        border-radius: 8px;
        background: rgba(10, 17, 27, .78);
        color: var(--text);
    }
    .cl-about-review-stars {
        display: flex;
        align-items: center;
        gap: .18rem;
        color: var(--warm-soft);
        font-size: .92rem;
    }
    .cl-about-review-score {
        margin-left: .45rem;
        color: var(--white);
        font-family: 'IBM Plex Mono', monospace;
        font-weight: 700;
    }
    .cl-about-review-quote {
        color: var(--white);
        font-style: italic;
        line-height: 1.7;
        margin-bottom: 1.4rem;
    }
    .cl-about-review-name {
        color: var(--white);
        font-weight: 700;
        line-height: 1.45;
    }
    .cl-about-review-tag {
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
