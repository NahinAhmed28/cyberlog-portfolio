{{-- Client website screenshot shuffle. No client logos in the cards, per feedback. --}}
@php
    $screens = [
        [
            'cat' => 'Government Organization',
            'name' => 'Dhaka Stock Exchange (DSE)',
            'shot' => 'dse.png',
            'url' => 'https://www.dsebd.org/',
            'desc' => "Cyberlog delivered SOC support for Dhaka Stock Exchange, Bangladesh's most critical capital market infrastructure and one of the country's highest-value financial technology environments.",
            'stats' => [['24/7', 'SOC Monitoring'], ['99.99%', 'Uptime For Capital Market Cyber Defense']],
            'accent' => '#0a57db',
        ],
        [
            'cat' => 'Financial Institute',
            'name' => 'Bangladesh Finance',
            'shot' => 'bdfinance.png',
            'url' => 'https://bd.finance/',
            'desc' => 'Cyberlog conducted VAPT for Bangladesh Finance to identify, validate, and prioritize exploitable security risks across its digital environment.',
            'stats' => [['360°', 'Security Risk Review'], ['10+', 'High-Priority Risks Validated']],
            'accent' => '#f01843',
        ],
        [
            'cat' => 'Government Organization',
            'name' => 'Bangladesh Investment Development Authority (BIDA)',
            'shot' => 'bida.png',
            'url' => 'https://bida.gov.bd/',
            'desc' => 'Cyberlog conducted cybersecurity capacity building for the IT team of Bangladesh Investment Development Authority and supported the organization with a cybersecurity assessment to improve technical readiness, risk visibility, and institutional cyber resilience.',
            'stats' => [['250%+', "Increase In Employees' Cybersecurity Skills"], ['12', 'Security Areas Reviewed']],
            'accent' => '#1f9f72',
        ],
        [
            'cat' => 'Advertisement Industry',
            'name' => 'Adcomm Limited',
            'shot' => 'adcomm.png',
            'url' => 'https://adcomm.com.bd/',
            'desc' => 'Cyberlog supported Adcomm Limited with ISO 27001 implementation and employee cybersecurity capacity building to strengthen compliance readiness and workforce security awareness.',
            'stats' => [['93', 'ISO Controls Mapped'], ['200+', 'Employees Trained']],
            'accent' => '#ff8a00',
        ],
    ];
@endphp

<section class="page-section cl-client-screens" id="client-websites">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Client Websites</p>
        <h2 class="page-section-heading text-center text-secondary mb-0"><span class="cl-trusted">Trusted by</span> <span class="cl-title-accent">Government &amp; Enterprise.</span></h2>

        <div class="cl-deck-wrap">
            <div class="cl-deck" id="clDeck">
                @foreach ($screens as $screen)
                    <article class="cl-deck-card" tabindex="0" style="--cat: {{ $screen['accent'] }}">
                        <div class="cl-deck-grid">
                            <div class="cl-deck-content">
                                <span class="cl-deck-cat">{{ $screen['cat'] }}</span>
                                <h3 class="cl-deck-name">{{ $screen['name'] }}</h3>
                                <p class="cl-deck-desc">{{ $screen['desc'] }}</p>
                                <div class="cl-deck-stats">
                                    @foreach ($screen['stats'] as $s)
                                        <div class="cl-deck-stat">
                                            <div class="cl-deck-num">{{ $s[0] }}</div>
                                            <div class="cl-deck-lbl">{{ $s[1] }}</div>
                                        </div>
                                    @endforeach
                                </div>
                                <a class="cl-deck-btn" href="{{ $screen['url'] }}" target="_blank" rel="noopener">
                                    View Details <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="cl-deck-preview">
                                <div class="cl-browser">
                                    <div class="cl-browser-bar"><span></span><span></span><span></span></div>
                                    <a class="cl-browser-body" href="{{ $screen['url'] }}" target="_blank" rel="noopener" aria-label="{{ $screen['name'] }} website">
                                        <img src="{{ asset('assets/img/clients/shots/' . $screen['shot']) }}"
                                             alt="{{ $screen['name'] }} homepage screenshot"
                                             loading="eager"
                                             decoding="async"
                                             fetchpriority="{{ $loop->first ? 'high' : 'auto' }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="cl-deck-nav">
                <button class="cl-deck-arrow cl-deck-prev" type="button" aria-label="Previous client"><i class="fas fa-chevron-left"></i></button>
                <div class="cl-deck-dots">
                    @foreach ($screens as $screen)
                        <button class="cl-deck-dot" type="button" aria-label="Show {{ $screen['name'] }}"></button>
                    @endforeach
                </div>
                <button class="cl-deck-arrow cl-deck-next" type="button" aria-label="Next client"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-client-screens {
        color: #06101f;
        min-height: 0;
        display: block;
        padding-top: clamp(2rem, 4vh, 3rem) !important;
        padding-bottom: clamp(1.5rem, 3vh, 2.4rem) !important;
        background:
            radial-gradient(980px 460px at 12% 12%, rgba(109, 156, 255, .18), transparent 62%),
            radial-gradient(720px 360px at 88% 82%, rgba(10, 87, 219, .12), transparent 64%),
            linear-gradient(180deg, #f8fbff 0%, #eef4ff 100%) !important;
        overflow: hidden;
    }
    .cl-client-screens .container {
        min-height: 0;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        padding-top: clamp(1rem, 2vh, 1.5rem);
    }
    .cl-client-screens .page-section-heading {
        position: relative;
        z-index: 4;
        color: #f8fbff !important;
        font-size: clamp(1.75rem, 3vw, 2.65rem);
        line-height: 1.02;
        text-shadow: none;
        margin-bottom: 0.8rem;
    }
    .cl-client-screens .page-section-heading .cl-trusted { color: #f8fbff !important; }
    .cl-client-screens .cl-title-accent {
        color: var(--warm-soft) !important;
    }
    .cl-deck-wrap { width: 100%; max-width: min(100%, 1120px); margin: clamp(1.9rem, 4.4vh, 2.7rem) auto 0; }
    .cl-deck { position: relative; height: clamp(378px, 53vh, 470px); padding-top: 74px; }

    .cl-deck-card {
        position: absolute; left: 0; right: 0; top: 74px;
        color: #06101f;
        background:
            linear-gradient(145deg, rgba(133, 170, 249, .98), rgba(104, 145, 238, .98));
        border: 1px solid rgba(45, 88, 169, .18); border-radius: 8px;
        padding: clamp(.95rem, 1.5vw, 1.25rem);
        overflow: hidden;
        box-shadow: 0 34px 76px rgba(12, 43, 104, 0.26);
        transition: transform .45s var(--ease), opacity .45s var(--ease), border-color .25s var(--ease);
        transform-origin: center top;
        will-change: transform, opacity;
        cursor: pointer;
    }
    .cl-deck-card::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background:
            linear-gradient(90deg, rgba(255, 255, 255, .18), transparent 38%),
            radial-gradient(520px 240px at 82% 16%, rgba(255, 255, 255, .26), transparent 68%);
    }
    .cl-deck-card.is-front { cursor: default; }
    .cl-deck-card:hover { border-color: var(--cat, #0a57db); }
    .cl-deck-card:nth-child(1) { transform: translateY(0) scale(1); z-index: 60; opacity: 1; }
    .cl-deck-card:nth-child(2) { transform: translateY(-30px) scale(.968); z-index: 50; opacity: .8; }
    .cl-deck-card:nth-child(3) { transform: translateY(-60px) scale(.936); z-index: 40; opacity: .6; }
    .cl-deck-card:nth-child(4) { transform: translateY(-90px) scale(.904); z-index: 30; opacity: .45; }

    .cl-deck-grid {
        position: relative;
        z-index: 1;
        display: grid;
        grid-template-columns: minmax(390px, 1.12fr) minmax(340px, .88fr);
        gap: clamp(1rem, 2.2vw, 1.75rem);
        align-items: center;
    }
    .cl-deck-cat {
        display: block;
        font-family: 'IBM Plex Sans', sans-serif;
        font-size: clamp(.86rem, 1.2vw, 1rem);
        letter-spacing: 0;
        text-transform: none;
        color: #06101f;
    }
    .cl-deck-name {
        font-family: 'Chakra Petch', sans-serif;
        font-size: clamp(1.28rem, 2vw, 1.85rem);
        font-weight: 700;
        color: #020817;
        margin: .65rem 0 .6rem;
        line-height: 1.06;
    }
    .cl-deck-desc {
        color: #102958;
        font-size: clamp(.78rem, .94vw, .88rem);
        line-height: 1.36;
        max-width: 46rem;
        margin-bottom: 0;
    }
    .cl-deck-stats { display: flex; flex-wrap: wrap; gap: .75rem clamp(1.35rem, 2.5vw, 2.2rem); margin: clamp(.75rem, 1.7vh, 1.05rem) 0; }
    .cl-deck-num {
        font-family: 'Chakra Petch', sans-serif; font-weight: 700; font-size: clamp(1.75rem, 2.9vw, 2.7rem); line-height: .92;
        background: none; -webkit-background-clip: initial; background-clip: initial;
        -webkit-text-fill-color: currentColor; color: #020817;
    }
    .cl-deck-lbl { color: #0d244e; font-size: clamp(.72rem, .86vw, .82rem); margin-top: .32rem; max-width: 230px; line-height: 1.25; }
    .cl-deck-btn {
        display: inline-flex; align-items: center; gap: .5rem;
        background: #020817; color: #fff; text-decoration: none;
        border: 1px solid #020817; border-radius: 999px; padding: .62rem 1rem; font-size: .82rem;
        font-weight: 700;
        transition: all .2s var(--ease);
    }
    .cl-deck-btn:hover { background: #0a57db; border-color: #0a57db; color: #fff; }
    .cl-deck-btn i { transition: transform .2s var(--ease); }
    .cl-deck-btn:hover i { transform: translateX(4px); }

    .cl-browser { border-radius: 8px; overflow: hidden; border: 1px solid rgba(255, 255, 255, .42); background: #f8fbff; box-shadow: 0 24px 52px rgba(8, 35, 91, 0.28); }
    .cl-browser-bar { display: none; align-items: center; gap: 6px; padding: .55rem .7rem; background: rgba(255, 255, 255, 0.04); border-bottom: 1px solid var(--line); }
    .cl-browser-bar span { width: 9px; height: 9px; border-radius: 50%; background: var(--muted); opacity: .5; }
    .cl-browser-body {
        display: block;
        aspect-ratio: 16 / 8.4;
        max-height: clamp(220px, 32vh, 245px);
        position: relative;
        overflow: hidden;
        background: #f8fbff;
    }
    .cl-browser-body img {
        width: 100%; height: 100%;
        object-fit: cover; object-position: top center;
        display: block;
        transition: transform .35s var(--ease);
    }
    .cl-deck-card.is-front .cl-browser-body img,
    .cl-deck-card:hover .cl-browser-body img {
        transform: scale(1.045);
    }

    .cl-deck-nav {
        position: relative;
        z-index: 80;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1.25rem;
        min-height: 46px;
        margin-top: clamp(.65rem, 1.6vh, 1rem);
    }
    .cl-deck-dots { display: flex; gap: .5rem; }
    .cl-deck-dot { width: 9px; height: 9px; padding: 0; border: 0; border-radius: 50%; background: rgba(6, 16, 31, .24); cursor: pointer; transition: all .25s var(--ease); }
    .cl-deck-dot.active { background: #0a57db; width: 26px; border-radius: 6px; }
    .cl-deck-arrow { width: 42px; height: 42px; border-radius: 50%; background: #fff; border: 1px solid rgba(10, 87, 219, .2); color: #06101f; cursor: pointer; display: grid; place-items: center; transition: all .2s var(--ease); box-shadow: 0 10px 24px rgba(12, 43, 104, .12); }
    .cl-deck-arrow:hover { background: #0a57db; border-color: #0a57db; color: #fff; }

    @media (max-width: 991.98px) {
        .cl-client-screens {
            min-height: 0;
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
        }
        .cl-client-screens .container {
            min-height: 0;
            display: block;
        }
        .cl-deck-grid { grid-template-columns: 1fr; }
        .cl-deck-name { max-width: 100%; }
        .cl-deck { height: auto; min-height: 0; padding-top: 0; }
        .cl-deck-card { position: relative; transform: none !important; opacity: 1 !important; margin-bottom: 1.25rem; top: auto; }
        .cl-deck-nav { display: none; }
    }
    @media (max-width: 767.98px) {
        .cl-deck-stats { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }
    @media (max-width: 575.98px) {
        .cl-deck-card { padding: 1.1rem; }
        .cl-deck-stats { grid-template-columns: 1fr; }
    }
</style>
@endpush

@push('scripts')
<script>
(function () {
    var deck = document.getElementById('clDeck');
    if (!deck) return;
    var cards = [].slice.call(deck.querySelectorAll('.cl-deck-card'));
    var wrap = deck.closest('.cl-deck-wrap');
    var dots = [].slice.call(wrap.querySelectorAll('.cl-deck-dot'));
    var order = cards.map(function (_, i) { return i; });
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var autoTimer = null;

    function layout() {
        order.forEach(function (ci, pos) {
            var card = cards[ci];
            card.style.transform = 'translateY(' + (-30 * pos) + 'px) scale(' + (1 - 0.032 * pos) + ')';
            card.style.zIndex = String(60 - pos * 10);
            card.style.opacity = pos === 0 ? '1' : String(Math.max(0.28, 0.8 - 0.14 * (pos - 1)));
            card.classList.toggle('is-front', pos === 0);
        });
        dots.forEach(function (d, i) { d.classList.toggle('active', i === order[0]); });
    }
    function bringFront(ci) {
        var p = order.indexOf(ci);
        if (p <= 0) return;
        order.splice(p, 1);
        order.unshift(ci);
        layout();
    }
    function next() { order.push(order.shift()); layout(); }
    function prev() { order.unshift(order.pop()); layout(); }
    function restartAuto() {
        stopAuto();
        startAuto();
    }
    function startAuto() {
        if (reduce || autoTimer || window.innerWidth < 992) return;
        autoTimer = window.setInterval(next, 3200);
    }
    function stopAuto() {
        if (!autoTimer) return;
        window.clearInterval(autoTimer);
        autoTimer = null;
    }

    cards.forEach(function (card, i) {
        card.addEventListener('click', function (event) {
            if (window.innerWidth < 992) return;
            if (!card.classList.contains('is-front')) {
                event.preventDefault();
                bringFront(i);
            }
            restartAuto();
        });
    });
    dots.forEach(function (d, i) { d.addEventListener('click', function () { bringFront(i); restartAuto(); }); });
    var nb = wrap.querySelector('.cl-deck-next'), pb = wrap.querySelector('.cl-deck-prev');
    if (nb) nb.addEventListener('click', function () { next(); restartAuto(); });
    if (pb) pb.addEventListener('click', function () { prev(); restartAuto(); });

    wrap.addEventListener('mouseenter', stopAuto);
    wrap.addEventListener('mouseleave', startAuto);
    wrap.addEventListener('focusin', stopAuto);
    wrap.addEventListener('focusout', startAuto);
    document.addEventListener('visibilitychange', function () {
        if (document.hidden) stopAuto(); else startAuto();
    });
    window.addEventListener('resize', restartAuto);

    layout();
    startAuto();
})();
</script>
@endpush
