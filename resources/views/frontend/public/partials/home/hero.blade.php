{{-- Home hero — "dynamic design" (ref: riskledger.com)
     Interactive particle-network background + floating parallax service chips.
     Self-contained: markup + scoped CSS (@push styles) + JS (@push scripts). --}}

<section class="cl-hero cl-home-hero" id="page-top">

    <canvas class="cl-vapt-net cl-home-vapt-net" data-net aria-hidden="true"></canvas>

    <div class="container text-center">

        <h1 class="cl-hero-heading mb-4" data-reveal data-hero>
            Smarter Intelligence.<br class="d-sm-none">
            <span class="accent">Stronger Security.</span>
        </h1>

        {{-- TODO: copy — hero CTA button(s) not specified in the brief --}}

        <p class="fs-5 cl-hero-proof mb-0" data-reveal data-hero>
            Join our <span class="cl-copy-white">Cyber Defense eco-system</span><br class="d-sm-none"> with
            <span class="cl-glow-word">hundreds</span> of other organizations!
        </p>

        {{-- Floating service chips - clear of the copy, arranged above/below on desktop. --}}
         <!--- CCclear of the copy, arranged above/below on desktop. >
        <div class="cl-drift">
            <div class="cl-drift-chip"><span class="cl-drift-reveal" data-reveal data-hero><span class="cl-chip"><i class="fas fa-bug"></i>Penetration Testing</span></span></div>
            <div class="cl-drift-chip"><span class="cl-drift-reveal" data-reveal data-hero><span class="cl-chip"><i class="fas fa-desktop"></i>Security Operations Center (SOC)</span></span></div>
            <div class="cl-drift-chip"><span class="cl-drift-reveal" data-reveal data-hero><span class="cl-chip"><i class="fas fa-clipboard-check"></i>Security Audit &amp; Training</span></span></div>
            <div class="cl-drift-chip"><span class="cl-drift-reveal" data-reveal data-hero><span class="cl-chip"><i class="fas fa-robot"></i>AI Automation</span></span></div>
        </div>

    </div>
</section>

@push('styles')
<style>
    .cl-home-hero {
        position: relative;
        min-height: 92vh;
        display: flex;
        align-items: center;
        overflow: hidden;
        isolation: isolate;
        padding: 6.4rem 0 3.4rem;
        background:
            radial-gradient(860px 520px at 80% 8%, rgba(228, 31, 61, 0.15), transparent 62%),
            radial-gradient(760px 480px at 4% 94%, rgba(109, 156, 255, 0.1), transparent 66%),
            linear-gradient(180deg, rgba(7, 17, 31, 0.98), rgba(5, 12, 23, 0.98));
        color: #ffffff;
    }
    .cl-home-hero::before,
    .cl-home-hero::after {
        content: "";
        position: absolute;
        inset: 0;
        display: none;
    }
    .cl-home-vapt-net {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        display: block;
        opacity: 1;
        pointer-events: none;
    }
    .cl-home-hero .container {
        position: relative;
        z-index: 2;
        min-height: min(720px, calc(100vh - 8.5rem));
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding-top: clamp(1rem, 3vh, 2.5rem);
        padding-bottom: clamp(1rem, 3vh, 2.5rem);
    }
    .cl-home-hero .cl-hero-heading {
        position: relative;
        z-index: 2;
        max-width: 980px;
        margin-inline: auto;
        margin-bottom: 1.35rem !important;
        font-size: clamp(2.25rem, 5.15vw, 4.45rem);
        line-height: 1.12;
        color: #ffffff;
        text-shadow: 0 0 24px rgba(255, 255, 255, 0.28), 0 8px 28px rgba(3, 10, 24, 0.72);
    }
    .cl-home-hero .cl-hero-heading .accent {
        background: none;
        -webkit-text-fill-color: #ffffff;
        color: #ffffff;
        filter: drop-shadow(0 0 18px rgba(255, 255, 255, 0.46)) drop-shadow(0 0 26px rgba(109, 156, 255, 0.36));
        animation: none;
    }
    .cl-home-hero .lead,
    .cl-home-hero .fs-5 {
        color: #f7fbff !important;
        text-shadow: 0 2px 18px rgba(3, 10, 24, 0.66), 0 0 16px rgba(255, 255, 255, 0.12);
    }
    .cl-hero-copy,
    .cl-hero-proof {
        position: relative;
        z-index: 2;
        font-weight: 500;
    }
    .cl-hero-copy {
        max-width: 720px;
        margin-inline: auto;
        margin-bottom: 1.45rem !important;
    }
    .cl-hero-proof {
        margin-top: .1rem;
    }
    .cl-copy-white,
    .cl-copy-blue,
    .cl-copy-ice,
    .cl-copy-alert {
        font-weight: 700;
    }
    .cl-copy-white {
        color: #ffffff;
        text-shadow: 0 0 16px rgba(255, 255, 255, 0.34), 0 2px 16px rgba(3, 10, 24, 0.7);
    }
    .cl-copy-blue {
        color: #9fc5ff;
        text-shadow: 0 0 18px rgba(109, 156, 255, 0.56), 0 2px 16px rgba(3, 10, 24, 0.72);
    }
    .cl-copy-ice {
        color: #dbeaff;
        text-shadow: 0 0 14px rgba(190, 220, 255, 0.32), 0 2px 16px rgba(3, 10, 24, 0.7);
    }
    .cl-copy-alert {
        color: #ff8fa1;
        text-shadow: 0 0 16px rgba(255, 72, 101, 0.45), 0 2px 16px rgba(3, 10, 24, 0.72);
    }
    .cl-home-hero [data-reveal][data-hero] {
        opacity: 1;
        transform: none;
    }

    @keyframes clHeroMeshDrift {
        to { background-position: 0 0, 72px 72px, 72px 72px; }
    }

    .cl-glow-word {
        color: #ffffff;
        font-weight: 700;
        text-shadow: 0 0 16px rgba(255, 255, 255, 0.72), 0 0 28px rgba(109, 156, 255, 0.58);
    }

    /* Chips - one centered floating row below the hero text on smaller screens */
    .cl-drift {
        position: relative;
        margin-top: clamp(2.1rem, 4vw, 3.2rem);
        display: flex;
        flex-wrap: nowrap;
        gap: clamp(.65rem, 1.4vw, 1rem);
        justify-content: center;
        align-items: center;
        max-width: min(100%, 1120px);
        margin-left: auto;
        margin-right: auto;
        overflow: visible;
    }
    .cl-drift-chip { flex: 0 0 auto; will-change: transform; }
    .cl-drift-reveal { display: inline-block; }
    .cl-chip {
        display: inline-flex;
        align-items: center;
        gap: .5rem;
        font-family: 'IBM Plex Mono', monospace;
        font-size: .82rem;
        color: var(--white);
        background: rgba(8, 22, 46, 0.78);
        -webkit-backdrop-filter: blur(3px);
        backdrop-filter: blur(3px);
        border: 1px solid rgba(220, 238, 255, 0.32);
        border-left: 3px solid var(--chip, var(--blue-bright));
        border-radius: var(--r);
        padding: .6rem 1rem;
        white-space: nowrap;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.28);
    }
    .cl-chip i { color: var(--chip, #ffffff); filter: drop-shadow(0 0 8px var(--chip, rgba(109, 156, 255, 0.65))); }

    /* Colorful chips - one accent each (blue / red / blue / violet) */
    .cl-drift-chip:nth-child(1) { --chip: var(--blue-bright); }
    .cl-drift-chip:nth-child(2) { --chip: var(--red-soft); }
    .cl-drift-chip:nth-child(3) { --chip: var(--blue-bright); }
    .cl-drift-chip:nth-child(4) { --chip: #9d8bff; }
    .cl-drift-chip:nth-child(1) .cl-chip { background: rgba(21, 44, 92, 0.8); box-shadow: 0 10px 30px rgba(0, 0, 0, 0.28), 0 0 24px rgba(47, 107, 255, 0.22); }
    .cl-drift-chip:nth-child(2) .cl-chip { background: rgba(74, 18, 34, 0.74); box-shadow: 0 10px 30px rgba(0, 0, 0, 0.28), 0 0 24px rgba(228, 31, 61, 0.2); }
    .cl-drift-chip:nth-child(3) .cl-chip { background: rgba(18, 44, 88, 0.78); box-shadow: 0 10px 30px rgba(0, 0, 0, 0.28), 0 0 24px rgba(47, 107, 255, 0.24); }
    .cl-drift-chip:nth-child(4) .cl-chip { background: rgba(43, 32, 96, 0.74); box-shadow: 0 10px 30px rgba(0, 0, 0, 0.28), 0 0 24px rgba(111, 91, 255, 0.24); }
    .cl-drift-chip .cl-chip { animation: clDrift 7s ease-in-out infinite; }
    .cl-drift-chip:nth-child(2) .cl-chip { animation-delay: 1.2s; }
    .cl-drift-chip:nth-child(3) .cl-chip { animation-delay: 2.4s; }
    .cl-drift-chip:nth-child(4) .cl-chip { animation-delay: 3.6s; }
    @keyframes clDrift { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-14px); } }

    /* Desktop - reference-style floating chips:
       staggered diagonally in the band ABOVE the heading and the band BELOW the
       copy, pulled inboard from the edges. Never beside the text, never stacked. */
    @media (min-width: 1200px) {
        .cl-drift {
            position: absolute;
            inset: 0;
            display: block;
            margin: 0;
            max-width: none;
            pointer-events: none;
            z-index: 1;
        }
        .cl-drift-chip { position: absolute; will-change: transform; }
        .cl-drift-chip:nth-child(1) { top: max(16%, 112px); left: clamp(2rem, 17vw, 15rem); }
        .cl-drift-chip:nth-child(2) { top: max(12%, 96px); right: clamp(2rem, 17vw, 15rem); }
        .cl-drift-chip:nth-child(3) { bottom: 12%; left: clamp(2rem, 18vw, 16rem); }
        .cl-drift-chip:nth-child(4) { bottom: 19%; right: clamp(2rem, 18vw, 16rem); }
    }

    @media (prefers-reduced-motion: reduce) {
        .cl-home-hero::after { animation: none !important; }
        .cl-drift-chip .cl-chip { animation: none !important; }
    }
    @media (max-width: 575.98px) {
        .cl-home-hero {
            min-height: auto;
            padding: 5.7rem 0 3.25rem;
        }
        .cl-home-hero .container {
            width: 100%;
            max-width: 100%;
            min-width: 0;
            overflow: hidden;
        }
        .cl-home-hero .cl-hero-heading {
            font-size: 1.8rem;
            line-height: 1.08;
            max-width: 100%;
        }
        .cl-home-hero .lead,
        .cl-home-hero .fs-5 {
            font-size: .96rem !important;
            line-height: 1.55;
            max-width: 20.25rem;
            margin-left: auto;
            margin-right: auto;
        }
        .cl-drift {
            justify-content: flex-start;
            overflow-x: auto;
            overflow-y: hidden;
            padding: 0 .75rem .35rem;
            margin-inline: -.75rem;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
        }
        .cl-drift::-webkit-scrollbar { display: none; }
        .cl-chip {
            justify-content: flex-start;
            text-align: left;
            white-space: nowrap;
            line-height: 1.35;
        }
    }
</style>
@endpush

@push('scripts')
<script>
(function () {
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* ---- Animated neural network canvas ---- */
    var c = document.getElementById('clHeroCanvas');
    if (c && c.getContext) {
        var ctx = c.getContext('2d', { alpha: true });
        var w = 0, h = 0, dpr = 1, nodes = [], links = [], signals = [];
        var mouse = { x: -9999, y: -9999, active: false };
        var raf = null, resizeTimer = null, lastTime = 0;
        var TAU = Math.PI * 2;

        function resize() {
            dpr = Math.min(window.devicePixelRatio || 1, 2);
            w = Math.max(1, c.offsetWidth);
            h = Math.max(1, c.offsetHeight);
            c.width = Math.floor(w * dpr);
            c.height = Math.floor(h * dpr);
            ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
        }
        function rand(min, max) {
            return min + Math.random() * (max - min);
        }
        function seed() {
            resize();
            var count = Math.max(30, Math.min(76, Math.floor(w * h / 19000)));
            nodes = [];
            for (var i = 0; i < count; i++) {
                var hub = Math.random() > 0.84;
                nodes.push({
                    x: Math.random() * w,
                    y: Math.random() * h,
                    vx: rand(-0.08, 0.08),
                    vy: rand(-0.07, 0.07),
                    r: hub ? rand(2.4, 4.2) : rand(1.1, 2.2),
                    hub: hub,
                    phase: Math.random() * TAU,
                    energy: rand(0.35, 1)
                });
            }

            var anchors = [
                { x: w * .12, y: h * .22 },
                { x: w * .86, y: h * .18 },
                { x: w * .18, y: h * .76 },
                { x: w * .78, y: h * .72 }
            ];
            for (var a = 0; a < anchors.length; a++) {
                nodes.push({
                    x: anchors[a].x + rand(-22, 22),
                    y: anchors[a].y + rand(-18, 18),
                    vx: rand(-0.04, 0.04),
                    vy: rand(-0.04, 0.04),
                    r: rand(3.2, 5.2),
                    hub: true,
                    phase: Math.random() * TAU,
                    energy: rand(0.75, 1)
                });
            }

            buildLinks();
            seedSignals();
        }
        function buildLinks() {
            links = [];
            var seen = {};
            var range = Math.max(112, Math.min(168, w / 8.1));
            var rangeSq = range * range;

            for (var i = 0; i < nodes.length; i++) {
                var near = [];
                for (var j = 0; j < nodes.length; j++) {
                    if (i === j) continue;
                    var dx = nodes[i].x - nodes[j].x;
                    var dy = nodes[i].y - nodes[j].y;
                    var d = dx * dx + dy * dy;
                    if (d < rangeSq) near.push({ index: j, dist: d });
                }

                near.sort(function (a, b) { return a.dist - b.dist; });
                var limit = nodes[i].hub ? 4 : 2;
                for (var k = 0; k < Math.min(limit, near.length); k++) {
                    var nIndex = near[k].index;
                    var first = Math.min(i, nIndex);
                    var second = Math.max(i, nIndex);
                    var key = first + '-' + second;
                    if (seen[key]) continue;
                    seen[key] = true;

                    links.push({
                        a: first,
                        b: second,
                        dist: Math.sqrt(near[k].dist),
                        curve: rand(-42, 42),
                        phase: Math.random() * TAU,
                        warm: Math.random() > 0.68
                    });
                }
            }
        }
        function seedSignals() {
            signals = [];
            var amount = Math.min(14, Math.max(6, Math.floor(links.length / 8)));
            for (var i = 0; i < amount; i++) {
                signals.push(makeSignal(Math.random()));
            }
        }
        function makeSignal(progress) {
            return {
                link: links.length ? Math.floor(Math.random() * links.length) : 0,
                t: progress || 0,
                speed: rand(0.0009, 0.0026),
                size: rand(1.2, 2.6),
                warm: Math.random() > 0.48
            };
        }
        function updateNodes(delta) {
            if (reduce) return;
            for (var i = 0; i < nodes.length; i++) {
                var n = nodes[i];
                n.x += n.vx * delta;
                n.y += n.vy * delta;

                if (n.x < -20) n.x = w + 20;
                if (n.x > w + 20) n.x = -20;
                if (n.y < -20) n.y = h + 20;
                if (n.y > h + 20) n.y = -20;
            }
        }
        function pointOnLink(link, t) {
            var a = nodes[link.a];
            var b = nodes[link.b];
            var mx = (a.x + b.x) / 2;
            var my = (a.y + b.y) / 2;
            var dx = b.x - a.x;
            var dy = b.y - a.y;
            var dist = Math.max(1, Math.sqrt(dx * dx + dy * dy));
            var cx = mx + (-dy / dist) * link.curve;
            var cy = my + (dx / dist) * link.curve;
            var inv = 1 - t;

            return {
                x: inv * inv * a.x + 2 * inv * t * cx + t * t * b.x,
                y: inv * inv * a.y + 2 * inv * t * cy + t * t * b.y,
                cx: cx,
                cy: cy
            };
        }
        function drawAmbientGlow(time) {
            var glow = ctx.createRadialGradient(w * .5, h * .46, 0, w * .5, h * .46, Math.max(w, h) * .55);
            glow.addColorStop(0, 'rgba(255,255,255,0.07)');
            glow.addColorStop(.34, 'rgba(150,190,255,0.1)');
            glow.addColorStop(1, 'rgba(7,17,31,0)');
            ctx.fillStyle = glow;
            ctx.fillRect(0, 0, w, h);

            if (mouse.active) {
                var mg = ctx.createRadialGradient(mouse.x, mouse.y, 0, mouse.x, mouse.y, 210);
                mg.addColorStop(0, 'rgba(255,255,255,0.13)');
                mg.addColorStop(.42, 'rgba(126,178,255,0.08)');
                mg.addColorStop(1, 'rgba(7,17,31,0)');
                ctx.fillStyle = mg;
                ctx.fillRect(0, 0, w, h);
            }
        }
        function drawLinks(time) {
            ctx.save();
            ctx.lineCap = 'round';
            for (var i = 0; i < links.length; i++) {
                var link = links[i];
                var a = nodes[link.a];
                var b = nodes[link.b];
                var p = pointOnLink(link, .5);
                var pulse = (Math.sin(time * 0.001 + link.phase) + 1) / 2;
                var alpha = (link.warm ? .12 : .16) + pulse * .05;

                ctx.beginPath();
                ctx.moveTo(a.x, a.y);
                ctx.quadraticCurveTo(p.cx, p.cy, b.x, b.y);
                ctx.strokeStyle = link.warm
                    ? 'rgba(255,255,255,' + alpha + ')'
                    : 'rgba(220,235,255,' + alpha + ')';
                ctx.lineWidth = link.warm ? 1.05 : .95;
                ctx.stroke();

                if (a.hub || b.hub) {
                    ctx.beginPath();
                    ctx.moveTo(a.x, a.y);
                    ctx.quadraticCurveTo(p.cx, p.cy, b.x, b.y);
                    ctx.strokeStyle = 'rgba(255,255,255,' + (.045 + pulse * .03) + ')';
                    ctx.lineWidth = 1.95;
                    ctx.stroke();
                }
            }
            ctx.restore();
        }
        function drawMouseLinks() {
            if (!mouse.active) return;
            ctx.save();
            ctx.lineCap = 'round';
            for (var i = 0; i < nodes.length; i++) {
                var n = nodes[i];
                var dx = n.x - mouse.x;
                var dy = n.y - mouse.y;
                var d = dx * dx + dy * dy;
                if (d > 22000) continue;

                var alpha = 0.34 * (1 - d / 22000);
                ctx.beginPath();
                ctx.moveTo(n.x, n.y);
                ctx.quadraticCurveTo((n.x + mouse.x) / 2 + dy * .08, (n.y + mouse.y) / 2 - dx * .08, mouse.x, mouse.y);
                ctx.strokeStyle = 'rgba(255,255,255,' + alpha + ')';
                ctx.lineWidth = 1.05;
                ctx.stroke();
            }
            ctx.restore();
        }
        function drawSignals(delta) {
            if (!links.length) return;
            ctx.save();
            for (var i = 0; i < signals.length; i++) {
                var s = signals[i];
                if (!reduce) s.t += s.speed * delta;
                if (s.t > 1) {
                    signals[i] = makeSignal(s.t - 1);
                    s = signals[i];
                }

                var link = links[s.link % links.length];
                var p = pointOnLink(link, s.t);
                var back = pointOnLink(link, Math.max(0, s.t - .055));
                var color = s.warm ? '255,255,255' : '200,225,255';

                ctx.beginPath();
                ctx.moveTo(back.x, back.y);
                ctx.lineTo(p.x, p.y);
                ctx.strokeStyle = 'rgba(' + color + ',0.62)';
                ctx.lineWidth = s.size + .18;
                ctx.shadowBlur = 12;
                ctx.shadowColor = 'rgba(' + color + ',0.72)';
                ctx.stroke();

                ctx.beginPath();
                ctx.arc(p.x, p.y, s.size * 1.12, 0, TAU);
                ctx.fillStyle = 'rgba(255,255,255,0.76)';
                ctx.fill();
                ctx.shadowBlur = 0;
            }
            ctx.restore();
        }
        function drawNodes(time) {
            for (var i = 0; i < nodes.length; i++) {
                var n = nodes[i];
                var breathe = (Math.sin(time * 0.002 + n.phase) + 1) / 2;
                var r = n.r + breathe * (n.hub ? .9 : .45);
                var glowRadius = n.hub ? r * 7 : r * 4.4;
                var grad = ctx.createRadialGradient(n.x, n.y, 0, n.x, n.y, glowRadius);

                if (n.hub) {
                    grad.addColorStop(0, 'rgba(255,255,255,0.82)');
                    grad.addColorStop(.3, 'rgba(126,178,255,0.28)');
                    grad.addColorStop(1, 'rgba(126,178,255,0)');
                } else {
                    grad.addColorStop(0, 'rgba(255,255,255,0.68)');
                    grad.addColorStop(.34, 'rgba(172,205,255,0.2)');
                    grad.addColorStop(1, 'rgba(172,205,255,0)');
                }

                ctx.beginPath();
                ctx.arc(n.x, n.y, glowRadius, 0, TAU);
                ctx.fillStyle = grad;
                ctx.fill();

                ctx.beginPath();
                ctx.arc(n.x, n.y, r, 0, TAU);
                ctx.fillStyle = n.hub ? 'rgba(255,255,255,0.88)' : 'rgba(221,237,255,0.74)';
                ctx.fill();
            }
        }
        function render(time) {
            var delta = lastTime ? Math.min(34, time - lastTime) : 16;
            lastTime = time;

            ctx.clearRect(0, 0, w, h);
            updateNodes(delta);
            drawAmbientGlow(time);
            drawLinks(time);
            drawMouseLinks();
            drawSignals(delta);
            drawNodes(time);

            if (!reduce) raf = requestAnimationFrame(render);
        }

        seed();
        render(0);
        // On resize only reseed for the new size — never restart the render loop.
        // Restarting stacked extra requestAnimationFrame loops, which made the
        // animation run progressively faster over time.
        window.addEventListener('resize', function () {
            window.clearTimeout(resizeTimer);
            resizeTimer = window.setTimeout(seed, 120);
        });

        var hero = document.getElementById('page-top');
        if (hero) {
            hero.addEventListener('pointermove', function (e) {
                var r = c.getBoundingClientRect();
                mouse.x = e.clientX - r.left;
                mouse.y = e.clientY - r.top;
                mouse.active = true;
                if (reduce) render(0);
            });
            hero.addEventListener('pointerleave', function () {
                mouse.x = mouse.y = -9999;
                mouse.active = false;
                if (reduce) render(0);
            });
        }
    }

    /* ---- Chip parallax (desktop only) ---- */
    if (!reduce) {
        var hero2 = document.getElementById('page-top');
        var chips = [].slice.call(document.querySelectorAll('.cl-drift-chip'));
        if (hero2 && chips.length) {
            hero2.addEventListener('mousemove', function (e) {
                if (window.innerWidth < 1200) return;
                var r = hero2.getBoundingClientRect();
                var tx = (e.clientX - r.left - r.width / 2) / r.width;
                var ty = (e.clientY - r.top - r.height / 2) / r.height;
                requestAnimationFrame(function () {
                    for (var i = 0; i < chips.length; i++) {
                        var depth = (i + 1) * 9;
                        chips[i].style.transform = 'translate(' + (tx * depth) + 'px,' + (ty * depth) + 'px)';
                    }
                });
            });
        }
    }
})();
</script>
@endpush
