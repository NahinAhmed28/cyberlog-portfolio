<header class="cl-sg-hero cl-sg-{{ $theme }}" id="page-top">
    <div class="container">
        <div class="cl-sg-hero-grid">
            <div>
                <p class="section-eyebrow mb-3">{{ $eyebrow }}</p>
                @php
                    $titleWords = preg_split('/\s+/', trim($title), 2);
                @endphp
                <h1 class="cl-sg-title">
                    <span>{{ $titleWords[0] }}</span>{{ isset($titleWords[1]) ? ' ' . $titleWords[1] : '' }}
                </h1>
                <p class="cl-sg-summary">{{ $summary }}</p>
                @if (! empty($switchHref) && ! empty($switchLabel))
                    <a class="btn btn-outline-light btn-xl" href="{{ $switchHref }}">{{ $switchLabel }}</a>
                @endif
            </div>
            <div class="cl-sg-signal {{ ! empty($heroImage) ? 'has-image' : '' }}">
                @if (! empty($heroImage))
                    <img
                        class="cl-sg-hero-img"
                        src="{{ asset($heroImage) }}"
                        alt="{{ $heroImageAlt ?? $title }}"
                        loading="eager"
                        decoding="async">
                @else
                    <i class="fas {{ $heroIcon }}" aria-hidden="true"></i>
                @endif
            </div>
        </div>
    </div>
</header>

<section class="page-section cl-sg-section">
    <div class="container">
        @foreach ($services as $service)
            <article class="cl-sg-row {{ $loop->even ? 'is-even' : '' }}">
                <div class="cl-sg-copy">
                    <span class="cl-sg-kicker">{{ $service['kicker'] }}</span>
                    @php
                        $serviceTitleWords = preg_split('/\s+/', trim($service['title']), 2);
                    @endphp
                    <h2><span>{{ $serviceTitleWords[0] }}</span>{{ isset($serviceTitleWords[1]) ? ' ' . $serviceTitleWords[1] : '' }}</h2>
                    <p>{{ $service['desc'] }}</p>

                    <div class="cl-sg-detail">
                        <strong>{{ $service['lead'] }}</strong>
                        <ul>
                            @foreach ($service['points'] as $point)
                                <li><i class="fas fa-circle-plus"></i>{{ $point }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="cl-sg-tags">
                        @foreach ($service['tags'] as $tag)
                            <span>{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>

                <div class="cl-sg-visual {{ ! empty($service['image']) ? 'has-image' : '' }}" aria-label="{{ $service['title'] }}">
                    @if (! empty($service['image']))
                        <img
                            class="cl-sg-visual-img"
                            src="{{ asset($service['image']) }}"
                            alt="{{ $service['imageAlt'] ?? $service['title'] }}"
                            loading="lazy"
                            decoding="async">
                    @else
                        <i class="fas {{ $service['icon'] }}"></i>
                    @endif
                    <span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                </div>
            </article>
        @endforeach
    </div>
</section>

@include('partials.talk-to-expert', [
    'title' => $ctaTitle,
    'text' => $ctaText,
])

@push('styles')
<style>
    .cl-sg-hero {
        position: relative;
        overflow: hidden;
        padding: 9rem 0 5rem;
        background:
            radial-gradient(760px 420px at 80% 10%, var(--sg-glow), transparent 62%),
            radial-gradient(620px 360px at 10% 90%, rgba(109, 156, 255, .1), transparent 64%),
            linear-gradient(180deg, rgba(7, 17, 31, .98), rgba(5, 12, 23, .98));
    }
    .cl-sg-offensive {
        --sg-accent: var(--red-soft);
        --sg-soft: rgba(228, 31, 61, .16);
        --sg-glow: rgba(228, 31, 61, .2);
    }
    .cl-sg-defensive {
        --sg-accent: var(--blue-bright);
        --sg-soft: rgba(47, 107, 255, .16);
        --sg-glow: rgba(47, 107, 255, .2);
    }
    .cl-sg-hero-grid {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(320px, 560px);
        gap: clamp(2rem, 5vw, 4rem);
        align-items: center;
    }
    .cl-sg-title {
        max-width: 850px;
        margin: 0 0 1.2rem;
        font-size: clamp(2.45rem, 6vw, 5.25rem);
        line-height: .92;
        text-transform: uppercase;
        color: var(--white) !important;
    }
    .cl-sg-title span,
    .cl-sg-copy h2 span {
        color: var(--warm-soft) !important;
    }
    .cl-sg-summary {
        max-width: 710px;
        color: var(--muted);
        font-size: 1.06rem;
        line-height: 1.72;
        margin-bottom: 1.8rem;
    }
    .cl-sg-signal {
        position: relative;
        min-width: 0;
        min-height: 340px;
        display: grid;
        place-items: center;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, .12);
        border-radius: 8px;
        background:
            repeating-conic-gradient(from 0deg at 50% 50%, var(--sg-soft) 0deg 4deg, transparent 4deg 14deg),
            radial-gradient(circle at 50% 50%, var(--sg-soft), rgba(7, 17, 31, .96) 68%);
        box-shadow: 0 28px 76px rgba(0, 0, 0, .38);
    }
    .cl-sg-signal.has-image {
        width: 100%;
        min-height: 0;
        aspect-ratio: 16 / 10;
        background: #050c17;
        border-color: rgba(255, 255, 255, .14);
    }
    .cl-sg-signal.has-image::after {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background:
            linear-gradient(180deg, rgba(5, 12, 23, 0), rgba(5, 12, 23, .24)),
            radial-gradient(circle at 82% 16%, var(--sg-soft), transparent 34%);
        box-shadow: inset 0 0 42px rgba(255, 255, 255, .04);
    }
    .cl-sg-hero-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: scale(1.02);
    }
    .cl-sg-signal i {
        color: var(--sg-accent);
        font-size: clamp(4.5rem, 9vw, 7rem);
        filter: drop-shadow(0 0 28px var(--sg-glow));
    }

    .cl-sg-section {
        background:
            linear-gradient(rgba(130, 165, 220, .05) 1px, transparent 1px),
            linear-gradient(90deg, rgba(130, 165, 220, .04) 1px, transparent 1px),
            #050c17;
        background-size: 48px 48px, 48px 48px, auto;
    }
    .cl-sg-row {
        display: grid;
        grid-template-columns: minmax(0, 1.02fr) minmax(320px, .98fr);
        gap: clamp(1.6rem, 4vw, 3.5rem);
        align-items: center;
        padding: clamp(1.5rem, 3.6vw, 3rem) 0;
        border-bottom: 1px solid var(--line);
    }
    .cl-sg-row:last-child {
        border-bottom: 0;
    }
    .cl-sg-row.is-even .cl-sg-copy {
        order: 2;
    }
    .cl-sg-kicker {
        display: inline-block;
        margin-bottom: .7rem;
        color: var(--sg-accent);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .74rem;
        letter-spacing: .16em;
        text-transform: uppercase;
    }
    .cl-sg-copy h2 {
        margin-bottom: .85rem;
        color: var(--white) !important;
        font-size: clamp(1.55rem, 3vw, 2.45rem);
        line-height: 1.04;
    }
    .cl-sg-copy p {
        max-width: 660px;
        color: var(--muted);
        line-height: 1.65;
    }
    .cl-sg-detail {
        margin-top: 1.25rem;
        padding: 1.1rem 1.15rem;
        border: 1px solid var(--line);
        border-left: 3px solid var(--sg-accent);
        border-radius: 8px;
        background: rgba(16, 31, 58, .7);
    }
    .cl-sg-detail strong {
        display: block;
        margin-bottom: .75rem;
        color: var(--white);
    }
    .cl-sg-detail ul {
        display: grid;
        gap: .55rem;
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .cl-sg-detail li {
        display: flex;
        gap: .6rem;
        color: var(--text);
        line-height: 1.48;
    }
    .cl-sg-detail i {
        flex: 0 0 auto;
        margin-top: .25rem;
        color: var(--sg-accent);
    }
    .cl-sg-tags {
        display: flex;
        flex-wrap: wrap;
        gap: .5rem;
        margin-top: 1rem;
    }
    .cl-sg-tags span {
        color: var(--text);
        border: 1px solid var(--line);
        border-radius: 999px;
        padding: .32rem .7rem;
        background: rgba(255, 255, 255, .035);
        font-size: .78rem;
    }
    .cl-sg-visual {
        position: relative;
        min-height: 310px;
        aspect-ratio: 16 / 10;
        display: grid;
        place-items: center;
        overflow: hidden;
        border: 1px solid var(--line);
        border-radius: 8px;
        background:
            linear-gradient(135deg, rgba(255, 255, 255, .06), transparent 34%),
            repeating-linear-gradient(115deg, transparent 0 16px, var(--sg-soft) 16px 18px),
            radial-gradient(circle at 50% 50%, var(--sg-soft), rgba(7, 17, 31, .98) 66%);
        box-shadow: 0 24px 68px rgba(0, 0, 0, .34);
    }
    .cl-sg-visual.has-image {
        min-height: 300px;
        isolation: isolate;
        background: #050c17;
    }
    .cl-sg-visual.has-image::after {
        content: "";
        position: absolute;
        inset: 0;
        z-index: 1;
        pointer-events: none;
        background:
            linear-gradient(180deg, rgba(5, 12, 23, .02), rgba(5, 12, 23, .2)),
            radial-gradient(circle at 80% 18%, var(--sg-soft), transparent 34%);
    }
    .cl-sg-visual-img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* The generated artwork includes a pale outer mat; crop it inside the
           frame while keeping the image's proportions intact. */
        transform: scale(1.18);
        transition: transform .45s var(--ease);
    }
    .cl-sg-row:hover .cl-sg-visual-img {
        transform: scale(1.225);
    }
    .cl-sg-visual i {
        color: var(--sg-accent);
        font-size: clamp(3.3rem, 7vw, 5.5rem);
        filter: drop-shadow(0 0 22px var(--sg-glow));
    }
    .cl-sg-visual span {
        position: absolute;
        right: 1rem;
        bottom: .75rem;
        z-index: 2;
        color: rgba(255, 255, 255, .12);
        font-family: 'Chakra Petch', sans-serif;
        font-size: clamp(3rem, 7vw, 5.75rem);
        font-weight: 700;
        line-height: 1;
    }
    @media (max-width: 991.98px) {
        .cl-sg-hero {
            padding: 7rem 0 3.5rem;
        }
        .cl-sg-hero-grid,
        .cl-sg-row {
            grid-template-columns: 1fr;
        }
        .cl-sg-row.is-even .cl-sg-copy {
            order: 0;
        }
        .cl-sg-signal,
        .cl-sg-visual {
            min-height: 220px;
        }
        .cl-sg-signal.has-image {
            width: 100%;
            min-height: 0;
        }
        .cl-sg-visual.has-image {
            width: 100%;
            min-height: 0;
        }
    }
</style>
@endpush
