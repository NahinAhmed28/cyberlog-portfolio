{{-- VAPT › Benefits — borderless panel (same pattern as SOC), content per feedback --}}
@php
    $benefits = [
        ['fa-bug', 'Real-World Risk Validation', 'We validate vulnerabilities manually to confirm real exploitability and business impact.'],
        ['fa-filter-circle-xmark', 'Reduced False Positives', 'Findings are verified and prioritized before they reach your technical team.'],
        ['fa-screwdriver-wrench', 'Clear Remediation Guidance', 'Reports include practical fix recommendations for developers, IT teams, and management.'],
        ['fa-rotate', 'Retesting After Fixes', 'We retest resolved findings to confirm that security gaps are properly closed.'],
        ['fa-scale-balanced', 'Standards-Aligned Reporting', 'Findings are mapped with CVSS, OWASP Top 10, and recognized security practices.'],
        ['fa-chart-line', 'Improved Security Posture', 'Each assessment helps reduce risk across applications, networks, cloud, and infrastructure.'],
    ];
@endphp

<section class="page-section cl-vapt-benefits" id="benefits">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>Why Cyberlog VAPT</p>
        <h2 class="page-section-heading text-center text-secondary mb-5" data-reveal>Benefits</h2>

        <div class="cl-vben-panel" data-reveal>
            @foreach ($benefits as $b)
                <div class="cl-vben">
                    <i class="fas {{ $b[0] }}"></i>
                    <h5>{{ $b[1] }}</h5>
                    <p>{{ $b[2] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-vapt-benefits {
        background:
            radial-gradient(780px 430px at 10% 10%, rgba(109, 156, 255, .08), transparent 62%),
            linear-gradient(180deg, rgba(7, 17, 31, .98), rgba(11, 24, 48, .92));
    }
    .cl-vben-panel {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        border-radius: 0;
        overflow: visible;
        background: transparent;
        box-shadow: none;
    }
    .cl-vben {
        position: relative;
        padding: 1.85rem;
        border: 0;
        border-radius: 8px;
        background: transparent;
        box-shadow: none;
        transition: transform .22s var(--ease);
    }
    .cl-vben:hover { transform: translateY(-3px); }
    .cl-vben i {
        width: 42px;
        height: 42px;
        display: grid;
        place-items: center;
        margin-bottom: 1rem;
        border: 1px solid rgba(255, 191, 27, .24);
        border-radius: 10px;
        color: #fff3c4;
        background: rgba(255, 191, 27, .08);
        font-size: 1.18rem;
        box-shadow: 0 0 18px rgba(255, 191, 27, .12);
    }
    .cl-vben h5 {
        font-family: 'Chakra Petch', sans-serif;
        color: #ffffff;
        font-size: 1.05rem;
        margin-bottom: .55rem;
        text-shadow: 0 0 14px rgba(255, 255, 255, .16);
    }
    .cl-vben p {
        color: rgba(247, 251, 255, .88);
        font-size: .92rem;
        line-height: 1.6;
        margin: 0;
    }

    @media (max-width: 767.98px) {
        .cl-vben-panel { grid-template-columns: 1fr; }
    }
</style>
@endpush
