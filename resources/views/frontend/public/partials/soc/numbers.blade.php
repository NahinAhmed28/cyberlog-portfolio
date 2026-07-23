{{-- SOC › Managed Services by the Numbers — compact, theme-aware stats strip --}}
<section class="page-section cl-soc-numbers">
    <div class="container">
        <div class="text-center mb-4" data-reveal>
            <h2 class="section-title">UnderDefense SOC: <small class="muted">Managed Services by the Numbers</small></h2>
        </div>

        <div class="row g-4 align-items-stretch" data-reveal>
            <div class="col-6 col-md-3">
                <div class="stat-card text-center">
                    <div class="stat-value">#4</div>
                    <div class="stat-label">In the Global SOC battle, out of 184 Splunk's BOSS of the SOC participants</div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="stat-card text-center">
                    <div class="stat-value">830%</div>
                    <div class="stat-label">Return on investment over 3 years vs. building an in-house SOC</div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="stat-card text-center">
                    <div class="stat-value">2 min</div>
                    <div class="stat-label">Time to detect and enrich threat details enabling manual analyst triage</div>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="stat-card text-center">
                    <div class="stat-value">98%</div>
                    <div class="stat-label">Accurate detection rate — filters noise so your team only sees real threats</div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 text-center">
                <p class="small text-muted mb-0">Stat descriptions reflect typical results from Cyberlog managed SOC engagements; individual outcomes may vary.</p>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-soc-numbers { padding: 2.25rem 0; background: linear-gradient(180deg, rgba(5,11,22,1) 0%, rgba(10,18,32,1) 100%); color: var(--white); }
    .cl-soc-numbers .section-title { font-family: 'Chakra Petch', sans-serif; font-weight:700; color: var(--white); }
    .cl-soc-numbers .muted { color: var(--muted); font-weight:500; font-size: .95rem; }
    .stat-card { background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01)); border: 1px solid rgba(255,255,255,0.04); padding: 1.25rem; border-radius: 10px; height:100%; display:flex; flex-direction:column; justify-content:center; }
    .stat-value { font-family: 'Chakra Petch', sans-serif; font-size: clamp(1.6rem, 3.8vw, 2.6rem); color: var(--blue-bright); font-weight:800; margin-bottom: .45rem; }
    .stat-label { color: var(--muted); font-family: 'IBM Plex Mono', monospace; font-size: .85rem; line-height:1.3; }

    /* Accent variations for visual rhythm */
    .cl-soc-numbers .col-md-3:nth-child(1) .stat-value { color: var(--accent); }
    .cl-soc-numbers .col-md-3:nth-child(2) .stat-value { color: var(--blue-bright); }
    .cl-soc-numbers .col-md-3:nth-child(3) .stat-value { color: var(--warm-soft); }
    .cl-soc-numbers .col-md-3:nth-child(4) .stat-value { color: var(--green-soft, #7ef3a3); }

    @media (max-width: 767.98px) {
        .stat-value { font-size: 1.35rem; }
        .stat-label { font-size: .78rem; }
    }
</style>
@endpush
