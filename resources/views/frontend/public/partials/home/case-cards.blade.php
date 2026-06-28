{{-- Home › Client case cards (ref: viserx.com)
     Layered "deck" cards, horizontal scroll/snap (and scroll on mobile).
     Each "Key Number" is split into big-number + label for the viserx stat style. --}}
@php
    $u = fn ($pub, $legacy) => Route::has($pub) ? route($pub) : (Route::has($legacy) ? route($legacy) : '#');

    // Local homepage screenshots (no client logos, per feedback) — fast static assets.
    $shot = function ($url) {
        $map = [
            'https://www.dsebd.org' => 'dse.png',
            'https://bd.finance'    => 'bdfinance.png',
            'https://bida.gov.bd'   => 'bida.png',
            'https://adcommad.com'  => 'adcomm.png',
        ];
        return asset('assets/img/clients/shots/' . ($map[$url] ?? 'dse.png'));
    };

    $cases = [
        [
            'cat'  => 'Government Organization',
            'name' => 'Dhaka Stock Exchange (DSE)',
            'url'  => 'https://www.dsebd.org',
            'desc' => "Cyberlog delivered SOC support for Dhaka Stock Exchange, Bangladesh's most critical capital market infrastructure and one of the country's highest-value financial technology environments.",
            'stats' => [['24/7', 'SOC Monitoring'], ['99.99%', 'uptime for Capital Market Cyber Defense']],
            'service' => 'soc',
            'accent' => 'var(--blue-bright)',
        ],
        [
            'cat'  => 'Financial Institute',
            'name' => 'Bangladesh Finance',
            'url'  => 'https://bd.finance',
            'desc' => 'Cyberlog conducted VAPT for Bangladesh Finance to identify, validate, and prioritize exploitable security risks across its digital environment.',
            'stats' => [['360°', 'Security Risk Review'], ['10+', 'High-Priority Risks Validated']],
            'service' => 'vapt',
            'accent' => 'var(--red-soft)',
        ],
        [
            'cat'  => 'Government Organization',
            'name' => 'Bangladesh Investment Development Authority (BIDA)',
            'url'  => 'https://bida.gov.bd',
            'desc' => 'Cyberlog conducted cybersecurity capacity building for the IT team of Bangladesh Investment Development Authority and supported the organization with a cybersecurity assessment to improve technical readiness, risk visibility, and institutional cyber resilience.',
            'stats' => [['250%+', "Increase in Employees' Cybersecurity Skills"], ['12', 'Security Areas Reviewed']],
            'service' => 'capacity-building',
            'accent' => 'var(--blue-bright)',
        ],
        [
            'cat'  => 'Advertisement Industry',
            'name' => 'Adcomm Limited',
            'url'  => 'https://adcommad.com',
            'desc' => 'Cyberlog supported Adcomm Limited with ISO 27001 implementation and employee cybersecurity capacity building to strengthen compliance readiness and workforce security awareness.',
            'stats' => [['93', 'ISO Controls Mapped'], ['200+', 'Employees Trained']],
            'service' => 'it-audit',
            'accent' => 'var(--red-soft)',
        ],
    ];
@endphp

<section class="page-section" id="case-studies">
    <div class="container">

        <p class="section-eyebrow text-center mb-2">Case Studies</p>
        {{-- TODO: copy — case studies heading / tagline (none provided in brief) --}}

        <div class="cl-cases-wrap">
            <button class="cl-cases-nav prev" type="button" aria-label="Previous"><i class="fas fa-chevron-left"></i></button>

            <div class="cl-cases" id="clCases">
                @foreach ($cases as $case)
                    <article class="cl-case" data-reveal style="--cat: {{ $case['accent'] }}">
                        <a class="cl-case-shot" href="{{ $case['url'] }}" target="_blank" rel="noopener" aria-label="{{ $case['name'] }} website">
                            <img src="{{ $shot($case['url']) }}" alt="{{ $case['name'] }} homepage" loading="lazy" referrerpolicy="no-referrer">
                        </a>
                        <span class="cl-case-cat">{{ $case['cat'] }}</span>
                        <h3 class="cl-case-name">{{ $case['name'] }}</h3>
                        <p class="cl-case-desc">{{ $case['desc'] }}</p>

                        <div class="cl-case-stats">
                            @foreach ($case['stats'] as $s)
                                <div class="cl-case-stat">
                                    <div class="cl-case-num">{{ $s[0] }}</div>
                                    <div class="cl-case-lbl">{{ $s[1] }}</div>
                                </div>
                            @endforeach
                        </div>

                        <a class="cl-case-btn" href="{{ $u('public.' . $case['service'], $case['service']) }}">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </article>
                @endforeach
            </div>

            <button class="cl-cases-nav next" type="button" aria-label="Next"><i class="fas fa-chevron-right"></i></button>
        </div>

    </div>
</section>

@push('styles')
<style>
    .cl-cases-wrap { position: relative; }
    .cl-cases {
        display: flex; gap: 1.25rem;
        overflow-x: auto; scroll-snap-type: x mandatory; scroll-behavior: smooth;
        padding: 1.5rem .25rem 1.5rem;
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
    .cl-cases::-webkit-scrollbar { display: none; }

    .cl-case {
        scroll-snap-align: start;
        flex: 0 0 340px; max-width: 340px;
        display: flex; flex-direction: column;
        background: linear-gradient(165deg, var(--surface), var(--bg-alt));
        border: 1px solid var(--line);
        border-top: 3px solid var(--cat, var(--blue-bright));
        border-radius: 10px;
        padding: 1.75rem;
        /* layered "deck" shadow (viserx) */
        box-shadow: 0 18px 40px rgba(0, 0, 0, 0.38), 14px 14px 0 -6px rgba(255, 255, 255, 0.08);
        transition: transform .3s var(--ease), box-shadow .3s var(--ease), border-color .3s var(--ease);
    }
    .cl-case:hover { transform: translateY(-6px); border-color: var(--cat, var(--blue-bright)); }

    .cl-case-shot {
        display: block;
        margin-bottom: 1.1rem;
        border: 1px solid var(--line);
        border-radius: 8px;
        overflow: hidden;
        aspect-ratio: 16 / 10;
        background:
            radial-gradient(circle at 50% 45%, rgba(109, 156, 255, 0.12), transparent 60%),
            linear-gradient(160deg, #0e1838, #0a1126);
        position: relative;
    }
    .cl-case-shot::after {
        content: "Loading preview…";
        position: absolute; inset: 0;
        display: grid; place-items: center;
        font-family: 'IBM Plex Mono', monospace; font-size: .68rem; letter-spacing: .08em;
        color: var(--muted); z-index: 0;
    }
    .cl-case-shot img {
        position: relative; z-index: 1;
        width: 100%; height: 100%;
        object-fit: cover; object-position: top center;
        display: block;
        transition: transform .4s var(--ease);
    }
    .cl-case-shot:hover img { transform: scale(1.05); }

    .cl-case-cat {
        font-family: 'IBM Plex Mono', monospace;
        font-size: .68rem; letter-spacing: .14em; text-transform: uppercase;
        color: var(--cat, var(--blue-bright));
    }
    .cl-case-name { font-size: 1.2rem; line-height: 1.25; margin: .55rem 0 .75rem; color: var(--white); }
    .cl-case-desc { color: var(--muted); font-size: .88rem; flex-grow: 1; }

    .cl-case-stats { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin: 1.4rem 0; }
    .cl-case-num {
        font-family: 'Chakra Petch', sans-serif; font-weight: 700; font-size: 1.85rem; line-height: 1;
        background: var(--grad);
        -webkit-background-clip: text; background-clip: text;
        -webkit-text-fill-color: transparent; color: transparent;
    }
    .cl-case-lbl { color: var(--muted); font-size: .72rem; margin-top: .35rem; line-height: 1.3; }

    .cl-case-btn {
        align-self: flex-start; margin-top: auto;
        font-family: 'IBM Plex Mono', monospace; font-size: .8rem;
        color: var(--white); text-decoration: none;
        border: 1px solid var(--line); border-radius: var(--r);
        padding: .5rem .95rem; transition: all .2s var(--ease);
    }
    .cl-case-btn:hover { background: var(--cat, var(--blue-bright)); border-color: var(--cat, var(--blue-bright)); color: #06101f; }
    .cl-case-btn i { transition: transform .2s var(--ease); }
    .cl-case-btn:hover i { transform: translateX(4px); }

    .cl-cases-nav {
        position: absolute; top: 46%; transform: translateY(-50%); z-index: 3;
        width: 44px; height: 44px; border-radius: 50%;
        background: var(--surface); border: 1px solid var(--line); color: var(--white);
        display: none; place-items: center; cursor: pointer; transition: all .2s var(--ease);
    }
    .cl-cases-nav:hover { background: var(--blue); border-color: var(--blue); }
    .cl-cases-nav.prev { left: -14px; }
    .cl-cases-nav.next { right: -14px; }
    @media (min-width: 992px) { .cl-cases-nav { display: grid; } }
</style>
@endpush

@push('scripts')
<script>
(function () {
    var row = document.getElementById('clCases');
    if (!row) return;
    var wrap = row.closest('.cl-cases-wrap');
    var prev = wrap.querySelector('.cl-cases-nav.prev');
    var next = wrap.querySelector('.cl-cases-nav.next');
    var cards = [].slice.call(row.querySelectorAll('.cl-case'));
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var autoTimer = null;

    // One card's horizontal stride (width + gap); difference cancels offsetParent.
    function stride() {
        return cards.length > 1 ? Math.round(cards[1].offsetLeft - cards[0].offsetLeft) : row.clientWidth;
    }
    function step(dir) {
        var max = row.scrollWidth - row.clientWidth;
        if (dir > 0) {
            if (row.scrollLeft >= max - 4) row.scrollTo({ left: 0, behavior: 'smooth' });
            else row.scrollBy({ left: stride(), behavior: 'smooth' });
        } else {
            if (row.scrollLeft <= 4) row.scrollTo({ left: max, behavior: 'smooth' });
            else row.scrollBy({ left: -stride(), behavior: 'smooth' });
        }
    }
    function startAuto() {
        if (reduce || autoTimer || cards.length < 2 || row.scrollWidth <= row.clientWidth + 8) return;
        autoTimer = window.setInterval(function () { step(1); }, 2600);
    }
    function stopAuto() { if (autoTimer) { window.clearInterval(autoTimer); autoTimer = null; } }
    function restartAuto() { stopAuto(); startAuto(); }

    if (prev) prev.addEventListener('click', function () { step(-1); restartAuto(); });
    if (next) next.addEventListener('click', function () { step(1); restartAuto(); });
    wrap.addEventListener('mouseenter', stopAuto);
    wrap.addEventListener('mouseleave', startAuto);
    wrap.addEventListener('focusin', stopAuto);
    wrap.addEventListener('focusout', startAuto);
    row.addEventListener('pointerdown', stopAuto);
    window.addEventListener('resize', restartAuto);
    document.addEventListener('visibilitychange', function () {
        if (document.hidden) stopAuto(); else startAuto();
    });

    startAuto();
})();
</script>
@endpush
