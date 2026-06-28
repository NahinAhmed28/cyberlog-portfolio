{{-- VAPT › Matrix — Basic VAPT vs Cyberlog VAPT (content per feedback) --}}
@php
    $rows = [
        ['Testing Coverage', 'Limited asset testing', 'Web, API, mobile, network, cloud, and infrastructure testing'],
        ['Testing Method', 'Mostly automated scanning', 'Manual testing with automated validation'],
        ['Risk Validation', 'Lists vulnerabilities', 'Validates real exploitability and business impact'],
        ['Standards Alignment', 'Generic severity rating', 'CVSS, OWASP Top 10, and MITRE ATT&CK aligned'],
        ['Reporting', 'Technical findings only', 'Executive summary, technical details, proof of concept, and remediation'],
        ['Remediation Support', 'Limited guidance', 'Clear fix recommendations with priority'],
        ['Retesting', 'Not always included', 'Retesting support to confirm closure'],
        ['Outcome', 'Vulnerability list', 'Actionable risk reduction plan'],
    ];
@endphp

<section class="page-section cl-vapt-matrix-section" id="matrix">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>Why Cyberlog VAPT</p>
        <h2 class="page-section-heading text-center text-secondary mb-5" data-reveal>Basic VAPT vs Cyberlog VAPT</h2>

        <div class="cl-vapt-matrix-wrap" data-reveal>
            <div class="table-responsive">
                <table class="table align-middle cl-vapt-matrix mb-0">
                    <thead>
                        <tr>
                            <th class="text-start">Area</th>
                            <th>Basic VAPT</th>
                            <th>Cyberlog VAPT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                            <tr>
                                <td class="text-start fw-semibold">{{ $row[0] }}</td>
                                <td class="cl-vapt-basic">{{ $row[1] }}</td>
                                <td class="cl-vapt-us"><i class="fas fa-circle-check me-2"></i>{{ $row[2] }}</td>
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
    .cl-vapt-matrix-section {
        background:
            radial-gradient(720px 380px at 12% 8%, rgba(109, 156, 255, .08), transparent 62%),
            linear-gradient(180deg, rgba(7, 17, 31, .98), rgba(5, 12, 23, .98));
    }
    .cl-vapt-matrix-wrap {
        overflow: hidden;
        border-radius: 10px;
        background: linear-gradient(160deg, #0b1430, #0a1126) padding-box,
                    linear-gradient(120deg, var(--red-soft), var(--blue-bright)) border-box;
        border: 1.5px solid transparent;
        box-shadow: 0 28px 76px rgba(5, 20, 60, 0.5);
    }
    .cl-vapt-matrix { min-width: 720px; --bs-table-bg: transparent; color: var(--text); }
    .cl-vapt-matrix thead th {
        padding: 1rem 1.25rem; color: var(--white);
        background: rgba(16, 31, 58, .7); border-color: var(--line);
        font-family: 'Chakra Petch', sans-serif; font-size: .95rem;
    }
    .cl-vapt-matrix thead th:last-child { color: var(--warm-soft); }
    .cl-vapt-matrix td { padding: 1rem 1.25rem; border-color: var(--line); vertical-align: top; }
    .cl-vapt-basic { color: var(--muted); }
    .cl-vapt-us { color: var(--white); background: rgba(228, 31, 61, .08); }
    .cl-vapt-us .fa-circle-check { color: var(--warm-soft); }
</style>
@endpush
