<section class="page-section cl-vapt-success" id="success-story">
    <div class="container">
        <div class="cl-vapt-success-card" data-reveal>
            <div class="cl-vapt-success-copy">
                <p class="section-eyebrow mb-2">{{ content('vapt_success', 'paragraph') }}</p>
                <h2>{{ content('vapt_success', 'heading') }}</h2>
                <p class="text-muted">
                    {{ content('vapt_success', 'paragraph_2') }}
                </p>
                <a class="btn btn-alert text-white fw-bold" href="{{ content('vapt_success', 'link_url') }}">{{ content('vapt_success', 'link_label') }}</a>
            </div>

            <div class="cl-vapt-success-panel">
                <div class="cl-vapt-success-top">
                    <span>{{ content('vapt_success', 'label') }}</span>
                    <strong>{{ content('vapt_success', 'label_2') }}</strong>
                </div>
                <div class="cl-vapt-success-stats">
                    @foreach (content_items('vapt_success_vapt_success_stats') as $contentRow)
<div>
                        <strong>{{ $contentRow['label'] }}</strong>
                        <span>{{ $contentRow['label_2'] }}</span>
                    </div>
@endforeach
                </div>
                <div class="cl-vapt-success-flow">
                    <b>{{ content('vapt_success', 'b_text') }}</b>
                    <b>{{ content('vapt_success', 'b_text_2') }}</b>
                    <b>{{ content('vapt_success', 'b_text_3') }}</b>
                    <b>{{ content('vapt_success', 'b_text_4') }}</b>
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-vapt-success {
        background:
            radial-gradient(760px 420px at 86% 12%, rgba(228, 31, 61, .12), transparent 62%),
            linear-gradient(180deg, rgba(5, 12, 23, .98), rgba(7, 17, 31, .98));
    }
    .cl-vapt-success-card {
        display: grid;
        grid-template-columns: minmax(0, .95fr) minmax(340px, 1.05fr);
        gap: 2rem;
        align-items: center;
        padding: clamp(1.25rem, 3.2vw, 2.4rem);
        border: 1px solid var(--line);
        border-radius: 8px;
        background:
            linear-gradient(135deg, rgba(16, 31, 58, .88), rgba(7, 17, 31, .96)),
            radial-gradient(560px 280px at 86% 22%, rgba(255, 72, 101, .14), transparent 64%);
        box-shadow: 0 32px 86px rgba(0, 0, 0, .44);
    }
    .cl-vapt-success-copy h2 {
        margin-bottom: 1rem;
        font-size: clamp(2rem, 4vw, 3.45rem);
        line-height: 1;
    }
    .cl-vapt-success-panel {
        overflow: hidden;
        border: 1px solid var(--line);
        border-radius: 8px;
        background: rgba(5, 12, 23, .78);
    }
    .cl-vapt-success-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        padding: 1rem;
        border-bottom: 1px solid var(--line);
    }
    .cl-vapt-success-top span {
        color: var(--warm-soft);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .72rem;
        letter-spacing: .1em;
        text-transform: uppercase;
    }
    .cl-vapt-success-top strong {
        color: var(--white);
        font-family: 'Chakra Petch', sans-serif;
    }
    .cl-vapt-success-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }
    .cl-vapt-success-stats div {
        min-height: 140px;
        padding: 1.2rem 1rem;
        border-right: 1px solid var(--line);
    }
    .cl-vapt-success-stats div:last-child { border-right: 0; }
    .cl-vapt-success-stats strong {
        display: block;
        color: var(--warm-soft);
        font-family: 'Chakra Petch', sans-serif;
        font-size: 2.35rem;
        line-height: 1;
    }
    .cl-vapt-success-stats span {
        display: block;
        margin-top: .7rem;
        color: var(--muted);
        font-size: .84rem;
        line-height: 1.4;
    }
    .cl-vapt-success-flow {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: .65rem;
        padding: 1rem;
        border-top: 1px solid var(--line);
    }
    .cl-vapt-success-flow b {
        color: var(--text);
        border: 1px solid rgba(255, 191, 27, .18);
        border-radius: 5px;
        padding: .55rem .35rem;
        text-align: center;
        font-family: 'IBM Plex Mono', monospace;
        font-size: .72rem;
        background: rgba(255, 72, 101, .08);
    }
    @media (max-width: 991.98px) {
        .cl-vapt-success-card { grid-template-columns: 1fr; }
    }
    @media (max-width: 575.98px) {
        .cl-vapt-success-stats,
        .cl-vapt-success-flow { grid-template-columns: 1fr; }
        .cl-vapt-success-stats div {
            min-height: 0;
            border-right: 0;
            border-bottom: 1px solid var(--line);
        }
        .cl-vapt-success-stats div:last-child { border-bottom: 0; }
    }
</style>
@endpush
