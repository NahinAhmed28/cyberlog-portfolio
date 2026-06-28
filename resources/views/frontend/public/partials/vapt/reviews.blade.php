@php
    $reviews = [
        ['rating' => '4.8', 'quote' => 'Cyberlog helped us identify real security risks, not just scanner results. Their report was clear, practical, and easy for our technical team to act on.', 'name' => 'Head of IT, Enterprise Organization', 'badge' => 'VAPT Assessment'],
        ['rating' => '4.9', 'quote' => 'The team validated each finding properly and explained the business impact. Their remediation guidance helped us fix issues faster.', 'name' => 'Technology Lead, Financial Sector', 'badge' => 'Remediation Support'],
        ['rating' => '5.0', 'quote' => "Cyberlog's retesting process gave us confidence that the reported vulnerabilities were actually closed after remediation.", 'name' => 'Security Manager, Regulated Organization', 'badge' => 'Retesting & Validation'],
    ];
@endphp

<section class="page-section cl-vapt-reviews" id="reviews">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>Client Feedback</p>
        <h2 class="page-section-heading text-center text-secondary mb-2" data-reveal>
            Our Clients <span class="cl-title-accent">Say It Best</span>
        </h2>
        <p class="text-center text-muted mb-5" data-reveal>
            Practical offensive testing, business-readable risk reporting, and remediation support.
        </p>

        <div class="row g-4">
            @foreach ($reviews as $review)
                <div class="col-md-4">
                    <div class="cl-review h-100 d-flex flex-column" data-reveal>
                        <div class="cl-stars mb-2">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <span class="ms-1 fw-bold text-white">{{ $review['rating'] }}</span>
                        </div>
                        <p class="fst-italic">&ldquo;{{ $review['quote'] }}&rdquo;</p>
                        <div class="mt-auto">
                            <div class="fw-bold text-secondary">{{ $review['name'] }}</div>
                            <span class="badge bg-light text-secondary border mt-2">{{ $review['badge'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-vapt-reviews {
        background:
            radial-gradient(740px 420px at 12% 18%, rgba(109, 156, 255, .08), transparent 62%),
            linear-gradient(180deg, rgba(7, 17, 31, .98), rgba(5, 12, 23, .98));
    }
</style>
@endpush
