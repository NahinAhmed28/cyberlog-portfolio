{{-- Client website screenshot shuffle. No client logos in the cards, per feedback. --}}
@php
    $screens = [
        [
            'cat' => 'Financial Market Infrastructure',
            'name' => 'Dhaka Stock Exchange (DSE)',
            'shot' => 'dse.png',
            'url' => 'https://www.dsebd.org/',
            'desc' => "Cyberlog delivered SOC support for Dhaka Stock Exchange, Bangladesh's critical capital market infrastructure and one of the country's highest-value financial technology environments.",
            'stats' => [['24/7', 'SOC Monitoring'], ['99.99%', 'Capital Market Cyber Defense Uptime']],
            'accent' => 'var(--blue-bright)',
        ],
        [
            'cat' => 'Financial Institute',
            'name' => 'Bangladesh Finance',
            'shot' => 'bdfinance.png',
            'url' => 'https://bd.finance/',
            'desc' => 'Cyberlog conducted VAPT for Bangladesh Finance to identify, validate, and prioritize exploitable security risks across its digital environment.',
            'stats' => [['360', 'Security Risk Review'], ['10+', 'High-Priority Risks Validated']],
            'accent' => 'var(--red-soft)',
        ],
        [
            'cat' => 'Government Organization',
            'name' => 'Bangladesh Investment Development Authority (BIDA)',
            'shot' => 'bida.png',
            'url' => 'https://bida.gov.bd/',
            'desc' => 'Cyberlog conducted cybersecurity capacity building for the BIDA IT team and supported a cybersecurity assessment to improve readiness, visibility, and resilience.',
            'stats' => [['250%+', "Employee Skill Increase"], ['12', 'Security Areas Reviewed']],
            'accent' => 'var(--blue-bright)',
        ],
        [
            'cat' => 'Advertisement Industry',
            'name' => 'Adcomm Limited',
            'shot' => 'adcomm.png',
            'url' => 'https://adcommad.com/',
            'desc' => 'Cyberlog supported Adcomm Limited with ISO 27001 implementation and employee cybersecurity capacity building to strengthen compliance readiness and workforce awareness.',
            'stats' => [['93', 'ISO Controls Mapped'], ['200+', 'Employees Trained']],
            'accent' => 'var(--red-soft)',
        ],
    ];
@endphp

<section class="page-section cl-client-screens" id="client-websites">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Client Websites</p>
        <h2 class="page-section-heading text-center text-secondary mb-0">Security Work Across <span class="cl-title-accent">Live Digital Platforms</span></h2>

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
                                    Open Website <i class="fas fa-arrow-up-right-from-square"></i>
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
        background:
            radial-gradient(860px 420px at 14% 8%, rgba(109, 156, 255, .08), transparent 62%),
            radial-gradient(680px 360px at 88% 80%, rgba(255, 72, 101, .08), transparent 64%),
            rgba(5, 12, 23, .72);
    }
    .cl-deck-wrap { max-width: 1120px; margin: 2.4rem auto 0; }
    .cl-deck { position: relative; min-height: 520px; padding-top: 118px; }

    .cl-deck-card {
        position: absolute; left: 0; right: 0; top: 118px;
        background: linear-gradient(160deg, rgba(16, 31, 58, .98), rgba(7, 17, 31, .96));
        border: 1px solid var(--line); border-radius: 8px;
        padding: 1.75rem;
        box-shadow: 0 30px 70px rgba(0, 0, 0, 0.42);
        transition: transform .45s var(--ease), opacity .45s var(--ease), border-color .25s var(--ease);
        transform-origin: center top;
        will-change: transform, opacity;
        cursor: pointer;
    }
    .cl-deck-card.is-front { cursor: default; }
    .cl-deck-card:hover { border-color: var(--cat, var(--blue-bright)); }
    .cl-deck-card:nth-child(1) { transform: translateY(0) scale(1); z-index: 60; opacity: 1; }
    .cl-deck-card:nth-child(2) { transform: translateY(-34px) scale(.965); z-index: 50; opacity: .8; }
    .cl-deck-card:nth-child(3) { transform: translateY(-68px) scale(.93); z-index: 40; opacity: .6; }
    .cl-deck-card:nth-child(4) { transform: translateY(-102px) scale(.895); z-index: 30; opacity: .45; }

    .cl-deck-grid { display: grid; grid-template-columns: minmax(0, .9fr) minmax(420px, 1.1fr); gap: 1.75rem; align-items: center; }
    .cl-deck-cat { font-family: 'IBM Plex Mono', monospace; font-size: .7rem; letter-spacing: .14em; text-transform: uppercase; color: var(--cat, var(--blue-bright)); }
    .cl-deck-name { font-family: 'Chakra Petch', sans-serif; font-size: clamp(1.35rem, 2.4vw, 2rem); font-weight: 700; color: var(--white); margin: .45rem 0 .6rem; line-height: 1.12; }
    .cl-deck-desc { color: var(--muted); font-size: .94rem; line-height: 1.65; }
    .cl-deck-stats { display: flex; flex-wrap: wrap; gap: 1.5rem 2rem; margin: 1.35rem 0; }
    .cl-deck-num {
        font-family: 'Chakra Petch', sans-serif; font-weight: 700; font-size: 2.1rem; line-height: 1;
        background: var(--grad); -webkit-background-clip: text; background-clip: text;
        -webkit-text-fill-color: transparent; color: transparent;
    }
    .cl-deck-lbl { color: var(--muted); font-size: .72rem; margin-top: .35rem; max-width: 170px; line-height: 1.35; }
    .cl-deck-btn {
        display: inline-flex; align-items: center; gap: .5rem;
        background: var(--blue-deep); color: #fff; text-decoration: none;
        border: 1px solid var(--line); border-radius: 4px; padding: .58rem 1rem; font-size: .85rem;
        transition: all .2s var(--ease);
    }
    .cl-deck-btn:hover { background: var(--blue); border-color: var(--blue); color: #fff; }
    .cl-deck-btn i { transition: transform .2s var(--ease); }
    .cl-deck-btn:hover i { transform: translate(3px, -3px); }

    .cl-browser { border-radius: 8px; overflow: hidden; border: 1px solid var(--line); background: #050c17; box-shadow: 0 20px 50px rgba(0, 0, 0, 0.42); }
    .cl-browser-bar { display: flex; align-items: center; gap: 6px; padding: .55rem .7rem; background: rgba(255, 255, 255, 0.04); border-bottom: 1px solid var(--line); }
    .cl-browser-bar span { width: 9px; height: 9px; border-radius: 50%; background: var(--muted); opacity: .5; }
    .cl-browser-body {
        display: block;
        aspect-ratio: 16 / 10;
        position: relative;
        overflow: hidden;
        background: #050c17;
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

    .cl-deck-nav { display: flex; align-items: center; justify-content: center; gap: 1.25rem; margin-top: 2rem; }
    .cl-deck-dots { display: flex; gap: .5rem; }
    .cl-deck-dot { width: 9px; height: 9px; padding: 0; border: 0; border-radius: 50%; background: var(--line); cursor: pointer; transition: all .25s var(--ease); }
    .cl-deck-dot.active { background: var(--blue-bright); width: 26px; border-radius: 6px; }
    .cl-deck-arrow { width: 42px; height: 42px; border-radius: 50%; background: var(--surface); border: 1px solid var(--line); color: var(--white); cursor: pointer; display: grid; place-items: center; transition: all .2s var(--ease); }
    .cl-deck-arrow:hover { background: var(--blue); border-color: var(--blue); }

    @media (max-width: 991.98px) {
        .cl-deck-grid { grid-template-columns: 1fr; }
    }
    @media (max-width: 767.98px) {
        .cl-deck { min-height: 0; padding-top: 0; }
        .cl-deck-card { position: relative; transform: none !important; opacity: 1 !important; margin-bottom: 1.25rem; top: auto; }
        .cl-deck-nav { display: none; }
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
            card.style.transform = 'translateY(' + (-34 * pos) + 'px) scale(' + (1 - 0.035 * pos) + ')';
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
        if (reduce || autoTimer || window.innerWidth < 768) return;
        autoTimer = window.setInterval(next, 3200);
    }
    function stopAuto() {
        if (!autoTimer) return;
        window.clearInterval(autoTimer);
        autoTimer = null;
    }

    cards.forEach(function (card, i) {
        card.addEventListener('click', function (event) {
            if (window.innerWidth < 768) return;
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
