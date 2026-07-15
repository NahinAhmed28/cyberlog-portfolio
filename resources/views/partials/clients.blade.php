{{-- Reusable "Trusted Clients" section using the restored sliding logo marquee. --}}
@php
    // Feedback-folder logos, ordered left-to-right by the supplied reference image.
    $clients = [
        ['name' => 'Government of Bangladesh', 'sector' => 'Government Organization', 'url' => '#', 'logo' => 'images/clients/feedback/1. png-clipart-national-emblem-of-bangladesh-logo-organization-business-business-emblem-text.png'],
        ['name' => 'Bangladesh Finance', 'sector' => 'Financial Institute', 'url' => '#', 'logo' => 'images/clients/feedback/ChatGPT Image Jul 10, 2026, 04_39_30 PM.png'],
        ['name' => 'Dhaka Stock Exchange', 'sector' => 'Capital Market', 'url' => '#', 'logo' => 'images/clients/feedback/03-dhaka-stock-exchange.png'],
        ['name' => 'Bangladesh Petroleum Institute', 'sector' => 'Government Institute', 'url' => '#', 'logo' => 'images/clients/feedback/ChatGPT Image Jul 9, 2026, 04_37_03 PM.png'],
        ['name' => 'National Academy for Planning and Development', 'sector' => 'Government Organization', 'url' => '#', 'logo' => 'images/clients/feedback/ChatGPT Image Jul 9, 2026, 04_28_28 PM.png'],
        ['name' => 'Aspire to Innovate (a2i)', 'sector' => 'Digital Government', 'url' => '#', 'logo' => 'images/clients/feedback/6._a2i-logo-png_seeklogo-258213-removebg-preview.png'],
        ['name' => 'Cabinet Division', 'sector' => 'Government Organization', 'url' => '#', 'logo' => 'images/clients/feedback/ChatGPT Image Jul 9, 2026, 04_08_11 PM.png'],
        ['name' => 'ICT Division', 'sector' => 'Government Organization', 'url' => '#', 'logo' => 'images/clients/feedback/8._ict-division-future-is-here-logo-png_seeklogo-369049-removebg-preview.png'],
        ['name' => 'United Nations Development Programme', 'sector' => 'Development Organization', 'url' => '#', 'logo' => 'images/clients/feedback/9. UNDP.png'],
        ['name' => 'Akij Venture', 'sector' => 'Enterprise', 'url' => '#', 'logo' => 'images/clients/feedback/ChatGPT Image Jul 9, 2026, 04_55_04 PM.png'],
        ['name' => 'Aamar Taka', 'sector' => 'Financial Technology', 'url' => '#', 'logo' => 'images/clients/feedback/ChatGPT Image Jul 10, 2026, 04_51_52 PM.png'],
        ['name' => 'Adcomm Limited', 'sector' => 'Advertisement Industry', 'url' => '#', 'logo' => 'images/clients/feedback/12. Adcomm_51_1409.png'],
        ['name' => 'Nazimgarh', 'sector' => 'Hospitality', 'url' => '#', 'logo' => 'images/clients/feedback/ChatGPT Image Jul 10, 2026, 05_10_31 PM.png'],
        ['name' => 'Vibe Gaming', 'sector' => 'Gaming', 'url' => '#', 'logo' => 'images/clients/feedback/14. Vibe Gaminglogo-website-1.png'],
        ['name' => 'LegalX', 'sector' => 'Legal Technology', 'url' => '#', 'logo' => 'images/clients/feedback/ChatGPT Image Jul 9, 2026, 04_00_38 PM.png'],
        ['name' => 'Purbachal Apparel Limited', 'sector' => 'Manufacturing', 'url' => '#', 'logo' => 'images/clients/feedback/16. Purbachal.png'],
    ];
    $clientAnimation = $clientAnimation ?? 'marquee';
@endphp

<section class="page-section bg-navy text-white" id="clients">
    <div class="container">

        <p class="section-eyebrow text-center mb-2">We're Working With</p>
        <h2 class="page-section-heading text-center text-uppercase text-white mb-4">
            Our <span class="cl-title-accent">Clients</span>
        </h2>

        @if ($clientAnimation === 'shuffle')
            <div class="cl-client-shuffle-wrap" data-reveal>
                <div class="cl-client-shuffle" data-client-shuffle>
                    @foreach ($clients as $c)
                        <article class="cl-client-shuffle-card" tabindex="0">
                            @php($href = $c['url'] ?? '#')
                            <a class="cl-client-shuffle-link"
                               href="{{ $href }}"
                               @if ($href !== '#') target="_blank" rel="noopener" @endif
                               aria-label="{{ $c['name'] }} website">
                                <span class="cl-client-shuffle-sector">{{ $c['sector'] }}</span>
                                <span class="cl-client-shuffle-logo">
                                    <img src="{{ asset($c['logo']) }}" alt="{{ $c['name'] }}" loading="eager" decoding="async">
                                </span>
                                <span class="cl-client-shuffle-name">{{ $c['name'] }}</span>
                            </a>
                        </article>
                    @endforeach
                </div>

                <div class="cl-client-shuffle-nav">
                    <button class="cl-client-shuffle-arrow cl-client-shuffle-prev" type="button" aria-label="Previous client"><i class="fas fa-chevron-left"></i></button>
                    <div class="cl-client-shuffle-dots">
                        @foreach ($clients as $c)
                            <button class="cl-client-shuffle-dot" type="button" aria-label="Show {{ $c['name'] }}"></button>
                        @endforeach
                    </div>
                    <button class="cl-client-shuffle-arrow cl-client-shuffle-next" type="button" aria-label="Next client"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        @else
            <div class="cl-marquee">
                <div class="cl-marquee-track">
                    @for ($set = 0; $set < 3; $set++)
                        <div class="cl-marquee-set" @if ($set > 0) aria-hidden="true" @endif>
                            @foreach ($clients as $c)
                                @php($href = $c['url'] ?? '#')
                                <a class="cl-client-logo"
                                   href="{{ $href }}"
                                   @if ($href !== '#') target="_blank" rel="noopener" @endif
                                   @if ($set === 0) aria-label="{{ $c['name'] }}" @else tabindex="-1" @endif>
                                    <img src="{{ asset($c['logo']) }}"
                                         alt="{{ $set === 0 ? $c['name'] : '' }}"
                                         loading="eager"
                                         decoding="async">
                                </a>
                            @endforeach
                        </div>
                    @endfor
                </div>
            </div>
        @endif

    </div>
</section>

@if ($clientAnimation === 'shuffle')
    @push('styles')
    <style>
        .cl-client-shuffle-wrap {
            max-width: 860px;
            margin: 2.2rem auto 0;
        }
        .cl-client-shuffle {
            position: relative;
            min-height: 270px;
            padding-top: 82px;
        }
        .cl-client-shuffle-card {
            position: absolute;
            left: 0;
            right: 0;
            top: 82px;
            border: 1px solid var(--line);
            border-radius: 14px;
            background: linear-gradient(160deg, var(--surface), var(--bg-alt));
            box-shadow: 0 26px 62px rgba(0, 0, 0, 0.38);
            transition: transform .45s var(--ease), opacity .45s var(--ease), border-color .25s var(--ease);
            transform-origin: center top;
            will-change: transform, opacity;
            overflow: hidden;
            cursor: pointer;
        }
        .cl-client-shuffle-card.is-front {
            cursor: default;
        }
        .cl-client-shuffle-link {
            display: grid;
            grid-template-columns: minmax(180px, 270px) 1fr;
            gap: 1.25rem;
            align-items: center;
            min-height: 180px;
            padding: 1.5rem;
            color: var(--white);
            text-decoration: none;
        }
        .cl-client-shuffle-link:hover {
            color: var(--white);
        }
        .cl-client-shuffle-logo {
            display: grid;
            place-items: center;
            min-height: 130px;
            border: 1px solid var(--line-soft);
            border-radius: 10px;
            background:
                radial-gradient(circle at 50% 42%, rgba(109, 156, 255, 0.12), transparent 62%),
                rgba(255, 255, 255, 0.03);
        }
        .cl-client-shuffle-logo img {
            display: block;
            max-width: 78%;
            max-height: 86px;
            object-fit: contain;
            filter: grayscale(1) brightness(1.35);
            opacity: .82;
            transition: filter .3s var(--ease), opacity .3s var(--ease), transform .3s var(--ease);
        }
        .cl-client-shuffle-card.is-front .cl-client-shuffle-logo img,
        .cl-client-shuffle-card:hover .cl-client-shuffle-logo img {
            filter: none;
            opacity: 1;
            transform: scale(1.06);
        }
        .cl-client-shuffle-sector {
            grid-column: 2;
            grid-row: 1;
            align-self: end;
            font-family: 'IBM Plex Mono', monospace;
            font-size: .72rem;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--blue-bright);
        }
        .cl-client-shuffle-name {
            grid-column: 2;
            grid-row: 1;
            align-self: start;
            margin-top: 2rem;
            max-width: 440px;
            color: var(--white);
            font-family: 'Chakra Petch', sans-serif;
            font-size: clamp(1.3rem, 3vw, 2.1rem);
            font-weight: 700;
            line-height: 1.08;
        }
        .cl-client-shuffle-card:nth-child(1) { transform: translateY(0) scale(1); z-index: 60; opacity: 1; }
        .cl-client-shuffle-card:nth-child(2) { transform: translateY(-28px) scale(.965); z-index: 50; opacity: .8; }
        .cl-client-shuffle-card:nth-child(3) { transform: translateY(-56px) scale(.93); z-index: 40; opacity: .62; }
        .cl-client-shuffle-card:nth-child(4) { transform: translateY(-84px) scale(.895); z-index: 30; opacity: .46; }
        .cl-client-shuffle-card:nth-child(5) { transform: translateY(-108px) scale(.86); z-index: 20; opacity: .36; }
        .cl-client-shuffle-card:nth-child(6) { transform: translateY(-128px) scale(.835); z-index: 10; opacity: .28; }

        .cl-client-shuffle-nav {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.1rem;
            margin-top: 1.4rem;
        }
        .cl-client-shuffle-dots {
            display: flex;
            gap: .5rem;
        }
        .cl-client-shuffle-dot {
            width: 9px;
            height: 9px;
            padding: 0;
            border: 0;
            border-radius: 50%;
            background: var(--line);
            cursor: pointer;
            transition: all .25s var(--ease);
        }
        .cl-client-shuffle-dot.active {
            width: 26px;
            border-radius: 6px;
            background: var(--blue-bright);
        }
        .cl-client-shuffle-arrow {
            width: 42px;
            height: 42px;
            border: 1px solid var(--line);
            border-radius: 50%;
            display: grid;
            place-items: center;
            background: var(--surface);
            color: var(--white);
            cursor: pointer;
            transition: background .2s var(--ease), border-color .2s var(--ease), transform .2s var(--ease);
        }
        .cl-client-shuffle-arrow:hover {
            background: var(--blue);
            border-color: var(--blue);
            transform: translateY(-2px);
        }

        @media (max-width: 767.98px) {
            .cl-client-shuffle {
                min-height: 0;
                padding-top: 0;
            }
            .cl-client-shuffle-card {
                position: relative;
                top: auto;
                transform: none !important;
                opacity: 1 !important;
                margin-bottom: 1rem;
            }
            .cl-client-shuffle-link {
                grid-template-columns: 1fr;
                min-height: 0;
            }
            .cl-client-shuffle-sector,
            .cl-client-shuffle-name {
                grid-column: auto;
                grid-row: auto;
                align-self: auto;
                margin-top: 0;
            }
            .cl-client-shuffle-nav {
                display: none;
            }
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        (function () {
            document.querySelectorAll('[data-client-shuffle]').forEach(function (deck) {
                var cards = [].slice.call(deck.querySelectorAll('.cl-client-shuffle-card'));
                var wrap = deck.closest('.cl-client-shuffle-wrap');
                var dots = [].slice.call(wrap.querySelectorAll('.cl-client-shuffle-dot'));
                var order = cards.map(function (_, i) { return i; });
                var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                var autoTimer = null;

                function layout() {
                    order.forEach(function (ci, pos) {
                        var card = cards[ci];
                        card.style.transform = 'translateY(' + (-28 * pos) + 'px) scale(' + (1 - 0.035 * pos) + ')';
                        card.style.zIndex = String(60 - pos * 10);
                        card.style.opacity = pos === 0 ? '1' : String(Math.max(0.28, 0.8 - 0.14 * (pos - 1)));
                        card.classList.toggle('is-front', pos === 0);
                    });
                    dots.forEach(function (dot, i) {
                        dot.classList.toggle('active', i === order[0]);
                    });
                }

                function bringFront(ci) {
                    var pos = order.indexOf(ci);
                    if (pos <= 0) return;
                    order.splice(pos, 1);
                    order.unshift(ci);
                    layout();
                }

                function next() {
                    order.push(order.shift());
                    layout();
                }

                function prev() {
                    order.unshift(order.pop());
                    layout();
                }

                function startAuto() {
                    if (reduce || autoTimer || window.innerWidth < 768 || cards.length < 2) return;
                    autoTimer = window.setInterval(next, 3200);
                }

                function stopAuto() {
                    if (!autoTimer) return;
                    window.clearInterval(autoTimer);
                    autoTimer = null;
                }

                function restartAuto() {
                    stopAuto();
                    startAuto();
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

                dots.forEach(function (dot, i) {
                    dot.addEventListener('click', function () {
                        bringFront(i);
                        restartAuto();
                    });
                });

                var nextButton = wrap.querySelector('.cl-client-shuffle-next');
                var prevButton = wrap.querySelector('.cl-client-shuffle-prev');
                if (nextButton) nextButton.addEventListener('click', function () { next(); restartAuto(); });
                if (prevButton) prevButton.addEventListener('click', function () { prev(); restartAuto(); });

                wrap.addEventListener('mouseenter', stopAuto);
                wrap.addEventListener('mouseleave', startAuto);
                wrap.addEventListener('focusin', stopAuto);
                wrap.addEventListener('focusout', startAuto);
                window.addEventListener('resize', restartAuto);
                document.addEventListener('visibilitychange', function () {
                    if (document.hidden) stopAuto();
                    else startAuto();
                });

                layout();
                startAuto();
            });
        })();
    </script>
    @endpush
@endif
