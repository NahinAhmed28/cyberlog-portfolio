{{-- Home > Security Solutions — "Explore Our Security Solutions" (12 service cards).
     Content per client correction doc. Common CTA: Learn More. --}}
@php
    $u = fn ($pub, $legacy) => Route::has($pub) ? route($pub) : (Route::has($legacy) ? route($legacy) : '#');

    $solutions = [
        [
            'route' => ['public.soc', 'soc'], 'icon' => 'fa-desktop',
            'title' => 'Security Operations Center Implementation', 'kicker' => 'Threat Detection',
            'desc' => 'Implement centralized log collection, SIEM monitoring, alert rules, threat detection, incident triage, and response support.',
            'features' => ['SOC', 'SIEM', 'Incident Monitoring'],
        ],
        [
            'route' => ['public.defense-services', 'defense-services'], 'icon' => 'fa-satellite-dish',
            'title' => 'Threat Intelligence', 'kicker' => 'Early Warning',
            'desc' => 'Monitor emerging threats, leaked credentials, phishing campaigns, exposed assets, and attacker activity with actionable intelligence.',
            'features' => ['Threat Monitoring', 'Leaked Credentials', 'Risk Insights'],
        ],
        [
            'route' => ['public.vapt', 'vapt'], 'icon' => 'fa-bug',
            'title' => 'Vulnerability Assessment &amp; Penetration Testing', 'kicker' => 'Real World Security Testing',
            'desc' => 'Identify, validate, and prioritize vulnerabilities across applications, networks, APIs, mobile platforms, cloud, and infrastructure.',
            'features' => ['VAPT', 'Web Testing', 'Network Testing'],
        ],
        [
            'route' => ['public.vapt', 'vapt'], 'icon' => 'fa-user-secret',
            'title' => 'Red Team Assessment', 'kicker' => 'Attack Simulation',
            'desc' => 'Simulate real-world attack scenarios to test people, processes, technology, detection capability, and response readiness.',
            'features' => ['Attack Simulation', 'Defense Testing', 'Security Readiness'],
        ],
        [
            'route' => ['public.vapt', 'vapt'], 'icon' => 'fa-mobile-screen-button',
            'title' => 'Web, API &amp; Mobile Application Security Testing', 'kicker' => 'Application Security',
            'desc' => 'Test web, API, Android, and iOS applications for authentication, authorization, session, input validation, and data exposure risks.',
            'features' => ['OWASP Top 10', 'API Security', 'Mobile Security'],
        ],
        [
            'route' => ['public.next-gen-firewall', 'public.next-gen-firewall'], 'icon' => 'fa-network-wired',
            'title' => 'Network Security Assessment', 'kicker' => 'Infrastructure Security',
            'desc' => 'Assess internal and external networks, exposed services, firewalls, servers, wireless networks, segmentation, and access controls.',
            'features' => ['Firewall Review', 'Network Exposure', 'Segmentation'],
        ],
        [
            'route' => ['public.vapt', 'vapt'], 'icon' => 'fa-code',
            'title' => 'Source Code Security Audit', 'kicker' => 'Secure Code Review',
            'desc' => 'Review source code, dependencies, and application security weaknesses using secure coding practices, SAST, and DAST approaches.',
            'features' => ['SAST', 'DAST', 'Secure Coding'],
        ],
        [
            'route' => ['public.digital-forensics', 'public.digital-forensics'], 'icon' => 'fa-fingerprint',
            'title' => 'Digital Forensics &amp; Incident Response', 'kicker' => 'Investigation Support',
            'desc' => 'Investigate cyber incidents, analyze evidence, support containment, and provide practical recommendations for recovery and prevention.',
            'features' => ['Forensics', 'Incident Response', 'Evidence Analysis'],
        ],
        [
            'route' => ['public.backup-recovery', 'public.backup-recovery'], 'icon' => 'fa-database',
            'title' => 'Secure Backup &amp; Recovery Solutions', 'kicker' => 'Operational Resilience',
            'desc' => 'Strengthen backup strategy, recovery readiness, and data protection to help critical systems survive disruption and cyber incidents.',
            'features' => ['Secure Backup', 'Recovery Planning', 'Data Protection'],
        ],
        [
            'route' => ['public.it-audit', 'it-audit'], 'icon' => 'fa-clipboard-check',
            'title' => 'IT Security Audit &amp; ISO 27001', 'kicker' => 'Compliance Readiness',
            'desc' => 'Review IT controls, identify security gaps, assess governance, and support ISO/IEC 27001 implementation and audit readiness.',
            'features' => ['IT Audit', 'ISO 27001', 'Control Review'],
        ],
        [
            'route' => ['public.vciso', 'vciso'], 'icon' => 'fa-comments',
            'title' => 'Cybersecurity Consultancy', 'kicker' => 'Security Advisory',
            'desc' => 'Provide expert guidance on security strategy, policy improvement, risk-based decisions, and long-term cybersecurity roadmap development.',
            'features' => ['Security Roadmap', 'Risk Advisory', 'Policy Support'],
        ],
        [
            'route' => ['public.capacity-building', 'capacity-building'], 'icon' => 'fa-graduation-cap',
            'title' => 'Awareness &amp; Security Training', 'kicker' => 'Human Defense',
            'desc' => 'Deliver role-based training on cyber hygiene, phishing, social engineering, secure practices, and organizational security awareness.',
            'features' => ['Awareness Training', 'Phishing Readiness', 'Staff Training'],
        ],
    ];
@endphp

<section class="page-section cl-solutions-section" id="solutions">
    <div class="container">
        <div class="cl-solutions-head">
            <div>
                <p class="section-eyebrow mb-2" data-reveal>Security Solutions</p>
                <h2 class="page-section-heading text-secondary mb-0" data-reveal>Explore Our <span class="cl-title-accent">Security Solutions</span></h2>
            </div>
            <p class="cl-solutions-copy text-muted mb-0" data-reveal>
                Cyberlog helps organizations monitor threats, validate security risks, strengthen defenses, improve compliance, and build long-term cyber resilience.
            </p>
        </div>

        <div class="cl-solutions-grid">
            @foreach ($solutions as $solution)
                <a class="cl-solution-tile" href="{{ $u($solution['route'][0], $solution['route'][1]) }}" data-reveal>
                    <div class="cl-solution-top">
                        <span class="cl-solution-mark"><i class="fas {{ $solution['icon'] }}"></i></span>
                        <span class="cl-solution-kicker">{{ $solution['kicker'] }}</span>
                    </div>
                    <h3 class="cl-solution-title">{!! $solution['title'] !!}</h3>
                    <p class="cl-solution-desc">{{ $solution['desc'] }}</p>
                    <div class="cl-solution-features">
                        @foreach ($solution['features'] as $feature)
                            <span>{{ $feature }}</span>
                        @endforeach
                    </div>
                    <span class="cl-solution-link">Learn More <i class="fas fa-arrow-right"></i></span>
                </a>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-solutions-section { background: linear-gradient(180deg, rgba(11, 24, 48, 0.64), rgba(7, 17, 31, 0.2)); }
    .cl-solutions-head {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(280px, 420px);
        gap: 2rem;
        align-items: end;
        margin-bottom: 2rem;
    }
    .cl-solutions-copy { font-size: .98rem; line-height: 1.7; }

    .cl-solutions-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 1rem;
    }
    .cl-solution-tile {
        min-height: 300px;
        display: flex;
        flex-direction: column;
        padding: 1.35rem;
        border: 1px solid var(--line);
        border-radius: 8px;
        background:
            linear-gradient(160deg, rgba(16, 31, 58, 0.96), rgba(11, 24, 48, 0.94)) padding-box,
            linear-gradient(130deg, rgba(109, 156, 255, 0.45), rgba(228, 31, 61, 0.2)) border-box;
        color: var(--text);
        text-decoration: none;
        overflow: hidden;
        position: relative;
        transition: transform .24s var(--ease), border-color .24s var(--ease), box-shadow .24s var(--ease);
    }
    .cl-solution-tile::before {
        content: "";
        position: absolute;
        inset: 0 0 auto;
        height: 3px;
        background: linear-gradient(90deg, var(--blue-bright), var(--red-soft));
        transform: scaleX(.28);
        transform-origin: left;
        transition: transform .28s var(--ease);
    }
    .cl-solution-tile:hover {
        transform: translateY(-5px);
        border-color: rgba(109, 156, 255, 0.52);
        box-shadow: 0 1rem 2.2rem rgba(0, 0, 0, 0.34);
        color: var(--text);
    }
    .cl-solution-tile:hover::before { transform: scaleX(1); }

    .cl-solution-top { display: flex; align-items: center; justify-content: space-between; gap: 1rem; margin-bottom: 1.2rem; }
    .cl-solution-mark {
        width: 46px; height: 46px;
        display: grid; place-items: center;
        border-radius: 8px;
        background: var(--blue-dim);
        color: var(--blue-bright);
        border: 1px solid rgba(109, 156, 255, 0.22);
        font-size: 1.08rem;
    }
    .cl-solution-kicker {
        font-family: 'IBM Plex Mono', monospace;
        font-size: .66rem;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--warm-soft);
        text-align: right;
    }
    .cl-solution-title {
        font-family: 'Chakra Petch', sans-serif;
        color: var(--white);
        font-size: 1.18rem;
        line-height: 1.2;
        margin-bottom: .7rem;
    }
    .cl-solution-desc { color: var(--muted); font-size: .9rem; line-height: 1.55; margin-bottom: 1.1rem; }
    .cl-solution-features { display: flex; flex-wrap: wrap; gap: .45rem; margin-top: auto; margin-bottom: 1.1rem; }
    .cl-solution-features span {
        font-size: .72rem;
        color: var(--text);
        border: 1px solid var(--line);
        border-radius: 999px;
        padding: .28rem .62rem;
        background: rgba(255, 255, 255, 0.035);
    }
    .cl-solution-link {
        display: inline-flex;
        align-items: center;
        gap: .45rem;
        color: var(--blue-bright);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .82rem;
        font-weight: 600;
    }
    .cl-solution-link i { transition: transform .2s var(--ease); }
    .cl-solution-tile:hover .cl-solution-link i { transform: translateX(4px); }

    @media (max-width: 991.98px) {
        .cl-solutions-head { grid-template-columns: 1fr; align-items: start; }
        .cl-solutions-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }
    @media (max-width: 575.98px) {
        .cl-solutions-grid { grid-template-columns: 1fr; }
        .cl-solution-tile { min-height: 0; }
    }
</style>
@endpush
