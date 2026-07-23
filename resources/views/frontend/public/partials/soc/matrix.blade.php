{{-- SOC › Capability matrix (ref: underdefense.com) --}}
@php
    $caps = [
        ['24/7 Monitoring & Triage', 1, 1, 1],
        ['SIEM Management', 1, 1, 1],
        ['Compliance Reporting', 1, 1, 1],
        ['Threat Intelligence Feeds', 0, 1, 1],
        ['Managed Detection & Response (MDR)', 0, 1, 1],
        ['Proactive Threat Hunting', 0, 0, 1],
        ['Incident Response Retainer', 0, 0, 1],
        ['Dedicated SOC Analyst', 0, 0, 1],
    ];
    $tiers = ['Essential', 'Advanced', 'Enterprise'];
@endphp

<section class="page-section cl-soc-proof cl-soc-matrix-section" id="matrix">
    <div class="container">
        <div class="cl-soc-proof-heading text-center" data-reveal>
            <p class="cl-soc-kicker mb-2"><span></span>Managed SOC Coverage<span></span></p>
            <h2 class="page-section-heading text-white mb-2">What's Included in Each Tier</h2>
            <p class="cl-soc-proof-copy mb-0">Choose the level of monitoring, response, and analyst support your environment requires.</p>
        </div>

        <div class="cl-cmp-wrap" data-reveal>
            <div class="table-responsive">
                <table class="table align-middle text-center cl-compare cl-cmp mb-0">
                    <thead>
                        <tr>
                            <th class="text-start">Capability</th>
                            @foreach ($tiers as $t)<th>{{ $t }}</th>@endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($caps as $cap)
                            <tr>
                                <td class="text-start fw-semibold">{{ $cap[0] }}</td>
                                @for ($i = 1; $i <= 3; $i++)
                                    <td>
                                        @if ($cap[$i])
                                            <span class="cl-tier-check" aria-label="Included"><i class="fas fa-check"></i></span>
                                        @else
                                            <span class="cl-tier-minus" aria-label="Not included">—</span>
                                        @endif
                                    </td>
                                @endfor
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
    .cl-soc-proof {
        position: relative;
        overflow: hidden;
        color: #f8fbff;
        background:
            radial-gradient(700px 360px at 50% 0%, rgba(47, 107, 255, .18), transparent 68%),
            linear-gradient(180deg, #050b16 0%, #081326 100%);
    }
    .cl-soc-proof::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background:
            linear-gradient(rgba(109, 156, 255, .035) 1px, transparent 1px),
            linear-gradient(90deg, rgba(109, 156, 255, .03) 1px, transparent 1px);
        background-size: 38px 38px;
        mask-image: linear-gradient(to bottom, #000, transparent 88%);
    }
    .cl-soc-proof .container { position: relative; z-index: 1; }
    .cl-soc-proof-heading { max-width: 760px; margin: 0 auto 2.25rem; }
    .cl-soc-kicker {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: .7rem;
        color: #ff6b7f;
        font-family: 'IBM Plex Mono', monospace;
        font-size: .72rem;
        font-weight: 700;
        letter-spacing: .16em;
        text-transform: uppercase;
    }
    .cl-soc-kicker span {
        width: 28px;
        height: 1px;
        background: linear-gradient(90deg, transparent, #ff6b7f);
    }
    .cl-soc-kicker span:last-child { background: linear-gradient(90deg, #ff6b7f, transparent); }
    .cl-soc-proof-copy { color: rgba(225, 235, 250, .68); }
    .cl-soc-matrix-section { padding-bottom: 2.25rem; }
    .cl-soc-matrix-section .cl-cmp-wrap {
        overflow: hidden;
        border: 1px solid rgba(83, 132, 255, .52);
        border-radius: 16px;
        background: rgba(5, 14, 34, .86);
        box-shadow: 0 28px 80px rgba(0, 0, 0, .34), inset 0 1px 0 rgba(255, 255, 255, .05);
    }
    .cl-soc-matrix-section .cl-cmp {
        min-width: 680px;
        color: #dce7fa;
        --bs-table-bg: transparent;
        --bs-table-color: #dce7fa;
        --bs-table-border-color: rgba(109, 156, 255, .15);
    }
    .cl-soc-matrix-section .cl-cmp thead th {
        border: 0;
        padding: .85rem 1rem;
        background: linear-gradient(90deg, #235bf0, #3478ff);
        color: #fff;
        font-family: 'IBM Plex Mono', monospace;
        font-size: .7rem;
        font-weight: 700;
        letter-spacing: .08em;
        text-transform: uppercase;
    }
    .cl-soc-matrix-section .cl-cmp tbody td {
        border-color: rgba(109, 156, 255, .14);
        padding: .68rem 1rem;
        color: #dce7fa;
        font-size: .84rem;
    }
    .cl-soc-matrix-section .cl-cmp tbody tr:hover { background: rgba(47, 107, 255, .08); }
    .cl-tier-check {
        width: 19px;
        height: 19px;
        display: inline-grid;
        place-items: center;
        border-radius: 50%;
        background: #6d9cff;
        color: #071122;
        font-size: .58rem;
        box-shadow: 0 0 14px rgba(109, 156, 255, .5);
    }
    .cl-tier-minus { color: rgba(220, 231, 250, .35); font-weight: 700; }
    @media (max-width: 767.98px) {
        .cl-soc-matrix-section { padding-bottom: 1.5rem; }
        .cl-soc-matrix-section .cl-cmp-wrap { border-radius: 12px; }
        .cl-soc-matrix-section .table-responsive { scrollbar-color: #3478ff #081326; }
    }
</style>
@endpush
