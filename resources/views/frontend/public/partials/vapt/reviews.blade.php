@php
    $reviews = content_items('vapt_reviews_reviews');
@endphp

<section class="page-section cl-proof-reviews cl-vapt-proof-reviews" id="reviews">
    <div class="container">
        <p class="section-eyebrow cl-proof-kicker text-center mb-2" data-reveal>{{ content('vapt_reviews', 'paragraph') }}</p>
        <h2 class="page-section-heading cl-proof-title text-center mb-3" data-reveal>
            {{ content('vapt_reviews', 'heading') }} <span>{{ content('vapt_reviews', 'label') }}</span>
        </h2>
        <p class="cl-proof-copy text-muted text-center mb-0" data-reveal>
            {{ content('vapt_reviews', 'paragraph_2') }}
        </p>

        <div class="row g-4 cl-proof-grid">
            @foreach ($reviews as $review)
                <div class="col-md-4">
                    <article class="cl-proof-card h-100" data-reveal>
                        <div class="cl-proof-badge" aria-hidden="true">
                            <img src="{{ asset($review['logo']) }}" alt="" loading="lazy" decoding="async">
                        </div>
                        <h3 class="cl-proof-award">{{ $review['name'] }}</h3>
                        <div class="cl-proof-rating" aria-label="{{ $review['rating'] }} out of 5 stars">
                            <i class="{{ content('vapt_reviews', 'icon') }}"></i><i class="{{ content('vapt_reviews', 'icon_2') }}"></i><i class="{{ content('vapt_reviews', 'icon_3') }}"></i><i class="{{ content('vapt_reviews', 'icon_4') }}"></i><i class="{{ content('vapt_reviews', 'icon_5') }}"></i>
                            <span>{{ $review['rating'] }}</span>
                        </div>
                        <p class="cl-proof-quote">{{ content('vapt_reviews', 'paragraph_3') }}{{ $review['quote'] }}{{ content('vapt_reviews', 'paragraph_4') }}</p>
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
    .cl-vapt-proof-reviews .cl-proof-badge img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .cl-vapt-proof-reviews .cl-proof-award {
        max-width: 19rem;
        font-size: 1rem;
    }
</style>
@endpush
