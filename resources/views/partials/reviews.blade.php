
@php
    $reviewUrl = Route::has('public.clients') ? route('public.clients') : (Route::has('clients') ? route('clients') : '#');
    $reviews = content_items('shared_reviews_reviews');
@endphp

<section class="page-section cl-proof-reviews" id="reviews">
    <div class="container">
        <p class="section-eyebrow cl-proof-kicker text-center mb-2" data-reveal>{{ content('shared_reviews', 'paragraph') }}</p>
        <h2 class="page-section-heading cl-proof-title text-center mb-3" data-reveal>
            {{ content('shared_reviews', 'heading') }} <span>{{ content('shared_reviews', 'label') }}</span>
        </h2>
        <p class="cl-proof-copy text-center text-muted mb-0" data-reveal>
            {{ content('shared_reviews', 'paragraph_2') }}
        </p>

        <div class="row g-4 cl-proof-grid">
            @foreach ($reviews as $review)
                <div class="col-md-4">
                    <article class="cl-proof-card h-100" data-reveal>
                        <div class="cl-proof-badge cl-proof-badge-{{ $review['sourceKey'] }}" aria-hidden="true">
                            <img src="{{ asset($review['logo']) }}" alt="" loading="lazy" decoding="async">
                        </div>
                        <h3 class="cl-proof-award">{{ $review['award'] }}</h3>
                        <div class="cl-proof-rating" aria-label="{{ $review['rating'] }} out of 5 stars">
                            <i class="{{ content('shared_reviews', 'icon') }}"></i><i class="{{ content('shared_reviews', 'icon_2') }}"></i><i class="{{ content('shared_reviews', 'icon_3') }}"></i><i class="{{ content('shared_reviews', 'icon_4') }}"></i><i class="{{ content('shared_reviews', 'icon_5') }}"></i>
                            <span>{{ $review['rating'] }}</span>
                        </div>
                        <p class="cl-proof-quote">{{ content('shared_reviews', 'paragraph_3') }}{{ $review['quote'] }}{{ content('shared_reviews', 'paragraph_4') }}</p>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-proof-reviews .cl-proof-badge img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
</style>
@endpush
