{{-- SOC › Reviews — client feedback cards matching the VAPT card design per feedback --}}
@php
    $reviews = [
        ['rating' => '4.8', 'quote' => 'Cyberlog helped us bring our logs, alerts, and monitoring into one clear SOC workflow. Our team now has better visibility across critical systems.', 'name' => 'Head of IT, Enterprise Organization', 'badge' => 'Security Visibility'],
        ['rating' => '4.9', 'quote' => 'The SOC team improved our alert triage process and helped us focus on real threats instead of wasting time on unnecessary alerts.', 'name' => 'IT Operations Lead, Financial Sector', 'badge' => 'Alert Triage'],
        ['rating' => '5.0', 'quote' => "Cyberlog's incident response support gave us practical guidance during suspicious activity. Their reporting was clear, actionable, and useful for management.", 'name' => 'Security Manager, Regulated Organization', 'badge' => 'Incident Response'],
    ];
@endphp

<section class="page-section bg-light" id="reviews">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>CLIENT FEEDBACK</p>
        <h2 class="page-section-heading text-center text-secondary mb-2" data-reveal>What Clients Value About Cyberlog SOC</h2>
        <p class="text-center text-muted mb-5" data-reveal>Cyberlog SOC helps organizations improve visibility, reduce alert noise, and respond to security incidents with confidence.</p>

        <div class="row g-4">
            @foreach ($reviews as $review)
                <div class="col-md-4">
                    <article class="cl-fb-card h-100 d-flex flex-column" data-reveal>
                        <div class="cl-fb-rating mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <span>{{ $review['rating'] }}</span>
                        </div>
                        <p class="cl-fb-quote">&ldquo;{{ $review['quote'] }}&rdquo;</p>
                        <div class="mt-auto">
                            <div class="cl-fb-name">{{ $review['name'] }}</div>
                            <span class="cl-fb-tag">{{ $review['badge'] }}</span>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-fb-card {
        min-height: 310px;
        padding: clamp(1.35rem, 2.6vw, 2rem);
        border: 1px solid rgba(255, 255, 255, .12);
        border-radius: 8px;
        background: rgba(10, 17, 27, .78);
        color: var(--text);
    }
    .cl-fb-rating {
        display: flex;
        align-items: center;
        gap: .18rem;
        color: var(--warm-soft);
        font-size: .9rem;
    }
    .cl-fb-rating span {
        margin-left: .45rem;
        color: var(--white);
        font-family: 'IBM Plex Mono', monospace;
        font-weight: 700;
    }
    .cl-fb-quote {
        color: var(--white);
        font-style: italic;
        line-height: 1.7;
        margin-bottom: 1.4rem;
    }
    .cl-fb-name {
        color: var(--white);
        font-weight: 700;
        line-height: 1.45;
    }
    .cl-fb-tag {
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
