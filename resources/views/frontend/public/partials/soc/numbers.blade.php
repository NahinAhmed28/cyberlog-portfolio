
<section class="page-section cl-soc-proof cl-soc-numbers">
    <div class="container">
        <div class="cl-soc-proof-heading text-center" data-reveal>
            <p class="section-eyebrow text-center mb-2"><span></span>{{ content('soc_numbers', 'paragraph') }}<span></span></p>
            <h2 class="page-section-heading text-white mb-2">{{ content('soc_numbers', 'heading') }}</h2>
            <p class="cl-soc-numbers-subtitle mb-0">{{ content('soc_numbers', 'paragraph_2') }}</p>
        </div>

        <div class="row g-3 g-lg-4 align-items-stretch cl-stat-grid" data-reveal>
            @foreach (content_items('soc_numbers_cards') as $contentRow)
<div class="col-12 col-md-3">
                <div class="stat-card text-center">
                    <div class="stat-index">{{ $contentRow['div_text'] }}</div>
                    <div class="stat-value">{{ $contentRow['div_text_2'] }}</div>
                    <div class="stat-label">{{ $contentRow['div_text_3'] }}</div>
                </div>
            </div>
@endforeach
        </div>

    </div>
</section>

@push('styles')
<style>
    .cl-soc-numbers {
        padding-top: 2.25rem;
        border-top: 1px solid rgba(109, 156, 255, .1);
        background:
            radial-gradient(620px 300px at 50% 100%, rgba(47, 107, 255, .14), transparent 70%),
            linear-gradient(180deg, #081326 0%, #050b16 100%);
    }
    .cl-soc-numbers-subtitle {
        color: #9fb5d6;
        font-family: 'Chakra Petch', sans-serif;
        font-size: clamp(1rem, 2vw, 1.35rem);
        font-weight: 600;
        letter-spacing: .04em;
    }
    .stat-card {
        position: relative;
        height: 100%;
        min-height: 205px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
        border: 1px solid rgba(109, 156, 255, .2);
        border-radius: 14px;
        padding: 1.4rem 1.15rem;
        background: linear-gradient(145deg, rgba(14, 31, 61, .9), rgba(6, 16, 35, .94));
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .05), 0 18px 45px rgba(0, 0, 0, .24);
        transition: transform .25s ease, border-color .25s ease, box-shadow .25s ease;
    }
    .stat-card::after {
        content: "";
        position: absolute;
        right: -35px;
        bottom: -55px;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background: rgba(47, 107, 255, .12);
        filter: blur(4px);
    }
    .stat-card:hover {
        transform: translateY(-5px);
        border-color: rgba(109, 156, 255, .48);
        box-shadow: 0 24px 55px rgba(0, 0, 0, .32), 0 0 26px rgba(47, 107, 255, .1);
    }
    .stat-index {
        position: absolute;
        top: .8rem;
        right: .9rem;
        color: rgba(109, 156, 255, .36);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .68rem;
        letter-spacing: .12em;
    }
    .stat-value {
        position: relative;
        z-index: 1;
        width: max-content;
        margin: 0 auto .85rem;
        color: #6d9cff;
        font-family: 'Chakra Petch', sans-serif;
        font-size: clamp(2rem, 3.8vw, 3.2rem);
        font-weight: 800;
        line-height: 1;
        text-shadow: 0 0 26px rgba(109, 156, 255, .32);
    }
    .stat-value::after {
        content: "";
        display: block;
        width: 100%;
        height: 2px;
        margin-top: .5rem;
        background: linear-gradient(90deg, transparent, #ffbf1b, transparent);
    }
    .stat-label {
        position: relative;
        z-index: 1;
        color: #c1cee2;
        font-size: .82rem;
        line-height: 1.5;
    }

    @media (max-width: 767.98px) {
        .cl-soc-numbers { padding-top: 1.5rem; }
        .stat-card { min-height: 170px; }
        .stat-value { font-size: 2rem; }
    }
</style>
@endpush
