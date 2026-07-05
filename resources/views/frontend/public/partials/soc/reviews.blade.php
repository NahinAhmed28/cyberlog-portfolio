{{-- SOC › Reviews / testimonials (ref: underdefense.com) --}}
@php
    $reviews = [
        ['Cyberlog helped us bring our logs, alerts, and monitoring into one clear SOC workflow. Our team now has better visibility across critical systems.', 'Head of IT, Enterprise Organization', 'Security Visibility'],
        ['The SOC team improved our alert triage process and helped us focus on real threats instead of wasting time on unnecessary alerts.', 'IT Operations Lead, Financial Sector', 'Alert Triage'],
        ["Cyberlog's incident response support gave us practical guidance during suspicious activity. Their reporting was clear, actionable, and useful for management.", 'Security Manager, Regulated Organization', 'Incident Response'],
    ];
@endphp

<section class="page-section bg-light" id="reviews">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>CLIENT FEEDBACK</p>
        <h2 class="page-section-heading text-center text-secondary mb-2" data-reveal>What Clients Value About Cyberlog SOC</h2>
        <p class="text-center text-muted mb-5" data-reveal>Cyberlog SOC helps organizations improve visibility, reduce alert noise, and respond to security incidents with confidence.</p>

        <div class="row g-4">
            @foreach ($reviews as $r)
                <div class="col-md-4">
                    <article class="cl-soc-review h-100 d-flex flex-column" data-reveal>
                        <div class="cl-soc-review-stars mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                        <p class="cl-soc-review-quote">&ldquo;{{ $r[0] }}&rdquo;</p>
                        <div class="mt-auto">
                            <div class="cl-soc-review-name">{{ $r[1] }}</div>
                            <span class="cl-soc-review-tag">{!! $r[2] !!}</span>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-soc-review {
        min-height: 300px;
        padding: clamp(1.35rem, 2.6vw, 2rem);
        border: 1px solid rgba(255, 255, 255, .12);
        border-radius: 8px;
        background: rgba(10, 17, 27, .78);
        color: var(--text);
    }
    .cl-soc-review-stars {
        display: flex;
        gap: .18rem;
        color: var(--warm-soft);
        font-size: .92rem;
    }
    .cl-soc-review-quote {
        color: var(--white);
        font-style: italic;
        line-height: 1.7;
        margin-bottom: 1.4rem;
    }
    .cl-soc-review-name {
        color: var(--white);
        font-weight: 700;
        line-height: 1.45;
    }
    .cl-soc-review-tag {
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
