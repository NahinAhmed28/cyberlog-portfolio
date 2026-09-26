
<section class="page-section cl-vapt-calc-section" id="calculator">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <p class="section-eyebrow mb-2" data-reveal>{{ content('vapt_calculator', 'paragraph') }}</p>
                <h2 class="cl-vapt-section-title mb-3" data-reveal>{{ content('vapt_calculator', 'heading') }} <span>{{ content('vapt_calculator', 'label') }}</span></h2>
                <p class="text-muted" data-reveal>
                    {{ content('vapt_calculator', 'paragraph_2') }}
                </p>
            </div>

            <div class="col-lg-7" data-reveal>
                <div class="cl-vapt-calc">
                    <div class="cl-vapt-calc-row">
                        <div class="cl-vapt-calc-head"><span>{{ content('vapt_calculator', 'label_2') }}</span><strong id="vaptCalcAppsVal">{{ content('vapt_calculator', 'label_3') }}</strong></div>
                        <input class="cl-vapt-range" id="vaptCalcApps" type="range" min="{{ content('vapt_calculator', 'input_min') }}" max="{{ content('vapt_calculator', 'input_max') }}" value="{{ content('vapt_calculator', 'initial_value') }}">
                    </div>
                    <div class="cl-vapt-calc-row">
                        <div class="cl-vapt-calc-head"><span>{{ content('vapt_calculator', 'label_4') }}</span><strong id="vaptCalcApisVal">{{ content('vapt_calculator', 'label_5') }}</strong></div>
                        <input class="cl-vapt-range" id="vaptCalcApis" type="range" min="{{ content('vapt_calculator', 'input_min_2') }}" max="{{ content('vapt_calculator', 'input_max_2') }}" value="{{ content('vapt_calculator', 'initial_value_2') }}">
                    </div>
                    <div class="cl-vapt-calc-row">
                        <div class="cl-vapt-calc-head"><span>{{ content('vapt_calculator', 'label_6') }}</span><strong id="vaptCalcMobileVal">{{ content('vapt_calculator', 'label_7') }}</strong></div>
                        <input class="cl-vapt-range" id="vaptCalcMobile" type="range" min="{{ content('vapt_calculator', 'input_min_3') }}" max="{{ content('vapt_calculator', 'input_max_3') }}" value="{{ content('vapt_calculator', 'initial_value_3') }}">
                    </div>
                    <div class="cl-vapt-calc-row">
                        <div class="cl-vapt-calc-head"><span>{{ content('vapt_calculator', 'label_8') }}</span><strong id="vaptCalcIpsVal">{{ content('vapt_calculator', 'label_9') }}</strong></div>
                        <input class="cl-vapt-range" id="vaptCalcIps" type="range" min="{{ content('vapt_calculator', 'input_min_4') }}" max="{{ content('vapt_calculator', 'input_max_4') }}" value="{{ content('vapt_calculator', 'initial_value_4') }}">
                    </div>
                    <div class="cl-vapt-calc-row">
                        <div class="cl-vapt-calc-head mb-2"><span>{{ content('vapt_calculator', 'label_10') }}</span></div>
                        <div class="cl-vapt-toggle" id="vaptCalcApproach">
                            <button type="button" data-mult="{{ content('vapt_calculator', 'button_data_mult') }}">{{ content('vapt_calculator', 'button_label') }}</button>
                            <button type="button" class="active" data-mult="{{ content('vapt_calculator', 'button_data_mult_2') }}">{{ content('vapt_calculator', 'button_label_2') }}</button>
                            <button type="button" data-mult="{{ content('vapt_calculator', 'button_data_mult_3') }}">{{ content('vapt_calculator', 'button_label_3') }}</button>
                        </div>
                    </div>

                    <div class="cl-vapt-calc-out">
                        
                        <div class="cl-vapt-price">
                            <div class="cl-vapt-price-fig">{{ content('vapt_calculator', 'div_text') }} <span id="vaptCalcPrice">{{ content('vapt_calculator', 'label_11') }}</span></div>
                            <div class="cl-vapt-out-lbl">{{ content('vapt_calculator', 'div_text_2') }}</div>
                        </div>
                        
                        <div class="cl-vapt-effort">
                            <div class="cl-vapt-effort-fig"><span id="vaptCalcDays">{{ content('vapt_calculator', 'label_12') }}</span></div>
                            <div class="cl-vapt-out-lbl">{{ content('vapt_calculator', 'div_text_3') }}</div>
                        </div>
                    </div>
                    <div class="cl-vapt-break" id="vaptCalcBreak"></div>
                    <a class="btn btn-alert text-white fw-bold w-100 mt-3" href="{{ content('vapt_calculator', 'link_url') }}">{{ content('vapt_calculator', 'link_label') }}</a>
                </div>
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
    .cl-vapt-price-fig { color: var(--warm-soft); }
    .cl-vapt-price-fig span { display: inline-block; background: var(--grad); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; color: transparent; filter: blur(10px); user-select: none; pointer-events: none; }
    .cl-vapt-effort-fig span { color: var(--warm-soft); }
    .cl-vapt-out-lbl { margin-top: .35rem; color: var(--muted); font-family: 'IBM Plex Mono', monospace; font-size: .72rem; letter-spacing: .06em; text-transform: uppercase; }
    .cl-vapt-break { margin-top: .75rem; color: var(--muted); font-family: 'IBM Plex Mono', monospace; font-size: .72rem; }

</style>
@endpush

@push('scripts')
<script>
(function () {
    var apps = document.getElementById('vaptCalcApps');
    if (!apps) return;
    var apis = document.getElementById('vaptCalcApis');
    var mobile = document.getElementById('vaptCalcMobile');
    var ips = document.getElementById('vaptCalcIps');
    var appsVal = document.getElementById('vaptCalcAppsVal');
    var apisVal = document.getElementById('vaptCalcApisVal');
    var mobileVal = document.getElementById('vaptCalcMobileVal');
    var ipsVal = document.getElementById('vaptCalcIpsVal');
    var days = document.getElementById('vaptCalcDays');
    var price = document.getElementById('vaptCalcPrice');
    var breakdown = document.getElementById('vaptCalcBreak');
    var approach = document.getElementById('vaptCalcApproach');
    var mult = +(approach.querySelector('button.active')?.dataset.mult || 1);
    var DAY_RATE_BDT = {{ content('vapt_calculator', 'day_rate') }}; // indicative BDT per analyst day

    function compute() {
        var appCount = +apps.value, apiCount = +apis.value, mobileCount = +mobile.value, ipCount = +ips.value;
        var hasScope = appCount + apiCount + mobileCount + ipCount > 0;
        var raw = (appCount * {{ content('vapt_calculator', 'web_app_days') }}) + (apiCount * {{ content('vapt_calculator', 'api_days') }}) + (mobileCount * {{ content('vapt_calculator', 'mobile_app_days') }}) + Math.ceil(ipCount / Math.max(1, {{ content('vapt_calculator', 'ips_per_day') }}));
        var total = hasScope ? Math.max(1, Math.ceil(raw * mult)) : 0;
        appsVal.textContent = appCount;
        apisVal.textContent = apiCount;
        mobileVal.textContent = mobileCount;
        ipsVal.textContent = ipCount;
        days.textContent = total;
        price.textContent = (total * DAY_RATE_BDT).toLocaleString('en-US');
        breakdown.textContent = {{ Illuminate\Support\Js::from(content('vapt_calculator', 'breakdown_template')) }}.replaceAll('{apps}', appCount).replaceAll('{apis}', apiCount).replaceAll('{mobile}', mobileCount).replaceAll('{ips}', ipCount).replaceAll('{multiplier}', mult);
    }
    [apps, apis, mobile, ips].forEach(function (i) { i.addEventListener('input', compute); });
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
