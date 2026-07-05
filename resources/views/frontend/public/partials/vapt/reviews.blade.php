@php
    $reviews = [
        ['rating' => '4.8', 'quote' => 'Cyberlog helped us identify real security risks, not just scanner results. Their report was clear, practical, and easy for our technical team to act on.', 'name' => 'Head of IT, Enterprise Organization', 'badge' => 'VAPT Assessment'],
        ['rating' => '4.9', 'quote' => 'The team validated each finding properly and explained the business impact. Their remediation guidance helped us fix issues faster.', 'name' => 'Technology Lead, Financial Sector', 'badge' => 'Remediation Support'],
        ['rating' => '5.0', 'quote' => "Cyberlog's retesting process gave us confidence that the reported vulnerabilities were actually closed after remediation.", 'name' => 'Security Manager, Regulated Organization', 'badge' => 'Retesting & Validation'],
    ];
@endphp

<section class="page-section cl-vapt-reviews" id="reviews">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>CLIENT FEEDBACK</p>
        <h2 class="page-section-heading text-center text-secondary mb-2" data-reveal>
            Our Clients Say It Best
        </h2>

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
