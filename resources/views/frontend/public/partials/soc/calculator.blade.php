
<section class="page-section bg-light" id="calculator">
    <div class="container">
        <div class="row g-5 align-items-center">

            <div class="col-lg-5">
                <p class="section-eyebrow mb-2" data-reveal>{{ content('soc_calculator', 'paragraph') }}</p>
                <h2 class="cl-soc-h2 mb-3" data-reveal>{{ content('soc_calculator', 'heading') }} <span class="grad-text">{{ content('soc_calculator', 'label') }}</span></h2>
                <p class="text-muted" data-reveal>
                    {{ content('soc_calculator', 'paragraph_2') }}
                </p>
            </div>

            <div class="col-lg-7" data-reveal>
                <div class="cl-calc">
                    <div class="cl-calc-row">
                        <div class="cl-calc-head"><span>{{ content('soc_calculator', 'label_2') }}</span><span class="cl-calc-val" id="calcEpVal">{{ content('soc_calculator', 'label_3') }}</span></div>
                        <input type="range" id="calcEp" min="{{ content('soc_calculator', 'input_min') }}" max="{{ content('soc_calculator', 'input_max') }}" step="{{ content('soc_calculator', 'input_step') }}" value="{{ content('soc_calculator', 'initial_value') }}" class="cl-range">
                    </div>

                    <div class="cl-calc-row">
                        <div class="cl-calc-head"><span>{{ content('soc_calculator', 'label_4') }} <small class="text-muted">{{ content('soc_calculator', 'small_text') }}</small></span><span class="cl-calc-val" id="calcLogVal">{{ content('soc_calculator', 'label_5') }}</span></div>
                        <input type="range" id="calcLog" min="{{ content('soc_calculator', 'input_min_2') }}" max="{{ content('soc_calculator', 'input_max_2') }}" step="{{ content('soc_calculator', 'input_step_2') }}" value="{{ content('soc_calculator', 'initial_value_2') }}" class="cl-range">
                    </div>

                    <div class="cl-calc-row">
                        <div class="cl-calc-head mb-2"><span>{{ content('soc_calculator', 'label_6') }}</span></div>
                        <div class="cl-calc-toggle" id="calcCov">
                            <button type="button" class="active" data-mult="{{ content('soc_calculator', 'button_data_mult') }}">{{ content('soc_calculator', 'button_label') }}</button>
                            <button type="button" data-mult="{{ content('soc_calculator', 'button_data_mult_2') }}">{{ content('soc_calculator', 'button_label_2') }}</button>
                        </div>
                    </div>

                    <div class="cl-calc-out">
                        <div>
                            <div class="cl-calc-cost">{{ content('soc_calculator', 'div_text') }}<span id="calcCost">{{ content('soc_calculator', 'label_7') }}</span><small>{{ content('soc_calculator', 'small_text_2') }}</small></div>
                        </div>
                        <a class="btn btn-primary text-white fw-bold" href="{{ content('soc_calculator', 'destination') }}">{{ content('soc_calculator', 'link_label') }}</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-soc-h2 { font-family: 'Chakra Petch', sans-serif; font-weight: 700; color: var(--white); font-size: clamp(1.8rem, 3.4vw, 2.6rem); line-height: 1.1; }

    .cl-calc {
        background: linear-gradient(160deg, #0b1430, #0a1126) padding-box,
                    linear-gradient(120deg, var(--blue), #6f5bff) border-box;
        border: 1.5px solid transparent; border-radius: 16px; padding: 1.85rem;
        box-shadow: 0 30px 80px rgba(5, 20, 60, 0.5);
    }
    .cl-calc-row { margin-bottom: 1.5rem; }
    .cl-calc-head { display: flex; justify-content: space-between; align-items: center; color: var(--white); font-weight: 500; margin-bottom: .6rem; }
    .cl-calc-val { font-family: 'Chakra Petch', sans-serif; font-weight: 700; color: var(--blue-bright); font-size: 1.15rem; }

    .cl-range { -webkit-appearance: none; appearance: none; width: 100%; height: 6px; border-radius: 50rem; background: linear-gradient(90deg, var(--blue), var(--surface)); outline: none; }
    .cl-range::-webkit-slider-thumb { -webkit-appearance: none; width: 20px; height: 20px; border-radius: 50%; background: #fff; border: 3px solid var(--blue); cursor: pointer; box-shadow: 0 0 14px rgba(47, 107, 255, 0.7); transition: transform .15s var(--ease); }
    .cl-range::-webkit-slider-thumb:hover { transform: scale(1.15); }
    .cl-range::-moz-range-thumb { width: 20px; height: 20px; border-radius: 50%; background: #fff; border: 3px solid var(--blue); cursor: pointer; box-shadow: 0 0 14px rgba(47, 107, 255, 0.7); }

    .cl-calc-toggle { display: inline-flex; background: rgba(15, 27, 52, 0.6); border: 1px solid var(--line); border-radius: 50rem; padding: 4px; }
    .cl-calc-toggle button { border: 0; background: transparent; color: var(--muted); font-family: 'IBM Plex Mono', monospace; font-size: .82rem; padding: .5rem 1.1rem; border-radius: 50rem; cursor: pointer; transition: all .2s var(--ease); }
    .cl-calc-toggle button.active { background: var(--blue); color: #fff; box-shadow: 0 0 16px rgba(47, 107, 255, 0.5); }

    .cl-calc-out { display: flex; flex-wrap: wrap; gap: 1rem; align-items: center; justify-content: space-between; border-top: 1px solid var(--line); padding-top: 1.5rem; margin-top: .5rem; }
    .cl-calc-cost { font-family: 'Chakra Petch', sans-serif; font-weight: 700; font-size: 2.6rem; line-height: 1; }
    .cl-calc-cost span { color: var(--blue-bright); -webkit-text-fill-color: var(--blue-bright); filter: none; user-select: text; text-shadow: 0 0 18px rgba(109, 156, 255, .38); }
    .cl-calc-cost span#calcCost { display: inline-block; filter: blur(6px); user-select: none; pointer-events: none; }
    .cl-calc-cost small { font-family: 'IBM Plex Mono', monospace; font-size: .9rem; color: var(--muted); -webkit-text-fill-color: var(--muted); margin-left: .35rem; }
</style>
@endpush

@push('scripts')
<script>
(function () {
    var ep = document.getElementById('calcEp');
    if (!ep) return;
    var log = document.getElementById('calcLog');
    var cov = document.getElementById('calcCov');
    var epVal = document.getElementById('calcEpVal');
    var logVal = document.getElementById('calcLogVal');
    var costEl = document.getElementById('calcCost');
    var mult = +(cov.querySelector('button.active')?.dataset.mult || 1);

    var BASE = {{ content('soc_calculator', 'base_cost') }}, PER_EP = {{ content('soc_calculator', 'per_endpoint') }}, PER_GB = {{ content('soc_calculator', 'per_gb') }}, ROUNDING = Math.max(1, {{ content('soc_calculator', 'rounding_increment') }});

    function compute() {
        var e = +ep.value, l = +log.value;
        var epCost = e * PER_EP, logCost = l * PER_GB;
        var total = Math.round(((BASE + epCost + logCost) * mult) / ROUNDING) * ROUNDING;
        epVal.textContent = e.toLocaleString('en-US');
        logVal.textContent = l;
        costEl.textContent = Math.round(total).toLocaleString('en-US');
    }
    ep.addEventListener('input', compute);
    log.addEventListener('input', compute);
    cov.querySelectorAll('button').forEach(function (b) {
        b.addEventListener('click', function () {
            cov.querySelectorAll('button').forEach(function (x) { x.classList.remove('active'); });
            b.classList.add('active');
            mult = +b.getAttribute('data-mult');
            compute();
        });
    });
    compute();
})();
</script>
@endpush
