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
        border-radius: 16px;
        overflow: hidden;
        background: linear-gradient(160deg, #0b1430, #0a1126);
        box-shadow: 0 30px 80px rgba(5, 20, 60, 0.4);
    }
    .cl-vben {
        padding: 1.85rem;
        border-right: 1px solid var(--line-soft);
        border-bottom: 1px solid var(--line-soft);
    }
    .cl-vben:nth-child(3n) { border-right: 0; }
    .cl-vben:nth-last-child(-n+3) { border-bottom: 0; }
    .cl-vben i { color: var(--warm-soft); font-size: 1.4rem; margin-bottom: .9rem; display: block; }
    .cl-vben h5 { font-family: 'Chakra Petch', sans-serif; color: var(--white); font-size: 1.05rem; margin-bottom: .5rem; }
    .cl-vben p { color: var(--muted); font-size: .9rem; line-height: 1.55; margin: 0; }

    @media (max-width: 767.98px) {
        .cl-vben-panel { grid-template-columns: 1fr; }
        .cl-vben { border-right: 0; }
        .cl-vben:last-child { border-bottom: 0; }
    }
</style>
@endpush
