{{-- VAPT › Service Calculator — Pricing (left) + Analysis Days (right) + scope table --}}
@php
    $scopeTable = [
        ['Web Applications', '5 applications', '4 to 6', '6 to 8', '8 to 10'],
        ['APIs', '5 APIs', '3 to 5', '5 to 7', '7 to 9'],
        ['Mobile Applications', '5 apps', '5 to 7', '7 to 9', '9 to 12'],
        ['Network Assets / IPs', '5 IPs', '1 to 2', '2 to 3', '3 to 4'],
        ['Cloud Assets', '5 assets', '3 to 5', '5 to 7', '7 to 10'],
    ];
@endphp

<section class="page-section cl-vapt-calc-section" id="calculator">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <p class="section-eyebrow mb-2" data-reveal>Service Calculator</p>
                <h2 class="cl-vapt-section-title mb-3" data-reveal>Estimate Your <span>VAPT Scope</span></h2>
                <p class="text-muted" data-reveal>
                    VAPT effort depends on asset count, application complexity, user roles, testing depth,
                    and environment type. Share your scope details to get an initial estimate from Cyberlog.
                </p>
                <p class="text-muted small mb-0" data-reveal>
                    <i class="fas fa-circle-info text-primary me-1"></i> Indicative only. Final effort is confirmed after scoping.
                </p>
            </div>

            <div class="col-lg-7" data-reveal>
                <div class="cl-vapt-calc">
                    <div class="cl-vapt-calc-row">
                        <div class="cl-vapt-calc-head"><span>Web apps / portals</span><strong id="vaptCalcAppsVal">2</strong></div>
                        <input class="cl-vapt-range" id="vaptCalcApps" type="range" min="1" max="20" value="2">
                    </div>
                    <div class="cl-vapt-calc-row">
                        <div class="cl-vapt-calc-head"><span>APIs / mobile flows</span><strong id="vaptCalcApisVal">2</strong></div>
                        <input class="cl-vapt-range" id="vaptCalcApis" type="range" min="0" max="20" value="2">
                    </div>
                    <div class="cl-vapt-calc-row">
                        <div class="cl-vapt-calc-head"><span>Network assets / IPs</span><strong id="vaptCalcIpsVal">25</strong></div>
                        <input class="cl-vapt-range" id="vaptCalcIps" type="range" min="1" max="250" value="25">
                    </div>
                    <div class="cl-vapt-calc-row">
                        <div class="cl-vapt-calc-head mb-2"><span>Testing approach</span></div>
                        <div class="cl-vapt-toggle" id="vaptCalcApproach">
                            <button type="button" data-mult="1">Black</button>
                            <button type="button" class="active" data-mult="1.25">Grey</button>
                            <button type="button" data-mult="1.55">White</button>
                        </div>
                    </div>

                    <div class="cl-vapt-calc-out">
                        {{-- Pricing on the LEFT --}}
                        <div class="cl-vapt-price">
                            <div class="cl-vapt-price-fig"><span id="vaptCalcPrice">$0</span></div>
                            <div class="cl-vapt-out-lbl">estimated cost</div>
                        </div>
                        {{-- Analysis Days on the RIGHT --}}
                        <div class="cl-vapt-effort">
                            <div class="cl-vapt-effort-fig"><span id="vaptCalcDays">0</span></div>
                            <div class="cl-vapt-out-lbl">analyst days</div>
                        </div>
                    </div>
                    <div class="cl-vapt-break" id="vaptCalcBreak"></div>
                    <a class="btn btn-alert text-white fw-bold w-100 mt-3" href="{{ route('contact') }}">Get Custom Quote</a>
                </div>
            </div>
        </div>

        {{-- Scope reference table --}}
        <div class="cl-vapt-scope-wrap mt-5" data-reveal>
            <div class="table-responsive">
                <table class="table align-middle cl-vapt-scope mb-0">
                    <thead>
                        <tr>
                            <th class="text-start">Category</th>
                            <th>Scope Count</th>
                            <th>Black Box</th>
                            <th>Grey Box</th>
                            <th>White Box</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($scopeTable as $r)
                            <tr>
                                <td class="text-start fw-semibold">{{ $r[0] }}</td>
                                <td>{{ $r[1] }}</td>
                                <td>{{ $r[2] }} analyst days</td>
                                <td>{{ $r[3] }} analyst days</td>
                                <td>{{ $r[4] }} analyst days</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-vapt-calc-section {
        background:
            radial-gradient(720px 380px at 86% 12%, rgba(228, 31, 61, .11), transparent 62%),
            linear-gradient(180deg, rgba(5, 12, 23, .96), rgba(7, 17, 31, 1));
    }
    .cl-vapt-section-title { font-family: 'Chakra Petch', sans-serif; font-size: clamp(2rem, 4vw, 3.25rem); line-height: 1; }
    .cl-vapt-section-title span { color: var(--warm-soft); }
    .cl-vapt-calc {
        border: 1.5px solid transparent; border-radius: 10px; padding: 1.8rem;
        background: linear-gradient(160deg, #0b1430, #070f1d) padding-box,
                    linear-gradient(120deg, var(--red-soft), var(--blue-bright)) border-box;
        box-shadow: 0 30px 80px rgba(0, 0, 0, .48);
    }
    .cl-vapt-calc-row { margin-bottom: 1.45rem; }
    .cl-vapt-calc-head { display: flex; justify-content: space-between; gap: 1rem; color: var(--white); margin-bottom: .6rem; }
    .cl-vapt-calc-head span { font-weight: 600; }
    .cl-vapt-calc-head strong { color: var(--warm-soft); font-family: 'Chakra Petch', sans-serif; font-size: 1.2rem; }
    .cl-vapt-range { -webkit-appearance: none; appearance: none; width: 100%; height: 7px; border-radius: 999px; background: linear-gradient(90deg, var(--red-soft), var(--surface)); outline: none; }
    .cl-vapt-range::-webkit-slider-thumb { -webkit-appearance: none; width: 21px; height: 21px; border-radius: 50%; background: #fff; border: 3px solid var(--red-soft); box-shadow: 0 0 16px rgba(228, 31, 61, .62); cursor: pointer; }
    .cl-vapt-range::-moz-range-thumb { width: 21px; height: 21px; border-radius: 50%; background: #fff; border: 3px solid var(--red-soft); box-shadow: 0 0 16px rgba(228, 31, 61, .62); cursor: pointer; }
    .cl-vapt-toggle { display: inline-flex; flex-wrap: wrap; gap: 4px; padding: 4px; border: 1px solid var(--line); border-radius: 999px; background: rgba(16, 31, 58, .62); }
    .cl-vapt-toggle button { border: 0; border-radius: 999px; padding: .5rem 1.1rem; color: var(--muted); background: transparent; font-family: 'IBM Plex Mono', monospace; font-size: .82rem; cursor: pointer; }
    .cl-vapt-toggle button.active { color: #fff; background: var(--red); box-shadow: 0 0 16px rgba(228, 31, 61, .42); }

    /* Output: Pricing (left) | Analysis Days (right) */
    .cl-vapt-calc-out { display: flex; align-items: stretch; justify-content: space-between; gap: 1rem; margin-top: .25rem; padding-top: 1.35rem; border-top: 1px solid var(--line); }
    .cl-vapt-price, .cl-vapt-effort { flex: 1; }
    .cl-vapt-effort { text-align: right; }
    .cl-vapt-price-fig, .cl-vapt-effort-fig { font-family: 'Chakra Petch', sans-serif; font-size: 2.4rem; font-weight: 700; line-height: 1; }
    .cl-vapt-price-fig span { background: var(--grad); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; color: transparent; }
    .cl-vapt-effort-fig span { color: var(--warm-soft); }
    .cl-vapt-out-lbl { margin-top: .35rem; color: var(--muted); font-family: 'IBM Plex Mono', monospace; font-size: .72rem; letter-spacing: .06em; text-transform: uppercase; }
    .cl-vapt-break { margin-top: .75rem; color: var(--muted); font-family: 'IBM Plex Mono', monospace; font-size: .72rem; }

    .cl-vapt-scope-wrap { overflow: hidden; border: 1px solid var(--line); border-radius: 8px; background: rgba(16, 31, 58, .72); box-shadow: 0 28px 76px rgba(0, 0, 0, .42); }
    .cl-vapt-scope { min-width: 760px; --bs-table-bg: transparent; color: var(--text); }
    .cl-vapt-scope thead th { padding: 1rem; color: var(--white); background: linear-gradient(120deg, rgba(228, 31, 61, .88), rgba(18, 58, 120, .82)); border-color: rgba(255,255,255,.1); font-family: 'Chakra Petch', sans-serif; font-size: .92rem; }
    .cl-vapt-scope td { padding: .9rem 1rem; border-color: var(--line); }
    .cl-vapt-scope tbody tr:hover td { background: rgba(255, 72, 101, .08); }
</style>
@endpush

@push('scripts')
<script>
(function () {
    var apps = document.getElementById('vaptCalcApps');
    if (!apps) return;
    var apis = document.getElementById('vaptCalcApis');
    var ips = document.getElementById('vaptCalcIps');
    var appsVal = document.getElementById('vaptCalcAppsVal');
    var apisVal = document.getElementById('vaptCalcApisVal');
    var ipsVal = document.getElementById('vaptCalcIpsVal');
    var days = document.getElementById('vaptCalcDays');
    var price = document.getElementById('vaptCalcPrice');
    var breakdown = document.getElementById('vaptCalcBreak');
    var approach = document.getElementById('vaptCalcApproach');
    var mult = 1.25;
    var DAY_RATE = 850; // indicative $ per analyst day

    function compute() {
        var appCount = +apps.value, apiCount = +apis.value, ipCount = +ips.value;
        var raw = (appCount * 3.5) + (apiCount * 2.2) + Math.ceil(ipCount / 12) + 3;
        var total = Math.max(5, Math.ceil(raw * mult));
        appsVal.textContent = appCount;
        apisVal.textContent = apiCount;
        ipsVal.textContent = ipCount;
        days.textContent = total;
        price.textContent = '$' + (total * DAY_RATE).toLocaleString('en-US');
        breakdown.textContent = appCount + ' apps + ' + apiCount + ' API/mobile flows + ' + ipCount + ' IPs x ' + mult + ' approach multiplier';
    }
    [apps, apis, ips].forEach(function (i) { i.addEventListener('input', compute); });
    approach.querySelectorAll('button').forEach(function (b) {
        b.addEventListener('click', function () {
            approach.querySelectorAll('button').forEach(function (x) { x.classList.remove('active'); });
            b.classList.add('active');
            mult = +b.getAttribute('data-mult');
            compute();
        });
    });
    compute();
})();
</script>
@endpush
