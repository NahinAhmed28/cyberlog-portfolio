{{-- vCISO › Section 2 — Buguard-style product layout: 9 expandable modules ("+"),
     each with headline (highlighted), body, and 3 capability bullets. --}}
@php
    $modules = [
        // 'team' mirrors the hero diagram: blue = Defensive (Blue Team), red = Offensive & Assessment (Red Team).
        // 'console' rows visualize the module's own bullets as dashboard telemetry (chrome, not marketing copy).
        [
            'name' => 'VAPT',
            'icon' => 'fa-bug',
            'team' => 'red',
            'headline' => 'Get <span class="cl-vm-hl">Continuous and Validated</span> Vulnerability Insight for Your Business',
            'body' => "vCISO's VAPT module continuously scans your assets and validates exploitable weaknesses, combining automated discovery with manual testing for accurate, real-world findings.",
            'points' => ['Continuous vulnerability scanning', 'Manual exploitation validation', 'OWASP & CVSS-based risk scoring'],
            'console' => [
                ['SCAN', 'continuous asset discovery', 'RUNNING', 'blue'],
                ['VALIDATE', 'manual exploit check', 'CONFIRMED', 'warm'],
                ['RISK', 'OWASP · CVSS scoring', '9.1 CRITICAL', 'red'],
            ],
        ],
        [
            'name' => 'SOC',
            'icon' => 'fa-desktop',
            'team' => 'blue',
            'headline' => 'Stay Protected with <span class="cl-vm-hl">Real-Time</span> Threat Monitoring',
            'body' => 'Our SOC module delivers centralized visibility into your environment, correlating logs and alerts so threats are caught the moment they emerge.',
            'points' => ['Centralized log correlation', 'Real-time alerting', 'Proactive threat hunting'],
            'console' => [
                ['LOGS', 'centralized correlation', '24/7', 'blue'],
                ['ALERTS', 'real-time triage', 'LIVE', 'red'],
                ['HUNT', 'proactive threat sweep', 'ACTIVE', 'warm'],
            ],
        ],
        [
            'name' => 'Incident Response',
            'icon' => 'fa-bolt',
            'team' => 'blue',
            'headline' => 'Respond <span class="cl-vm-hl">Faster</span> When It Matters Most',
            'body' => 'When an incident hits, vCISO guides your team through rapid containment and investigation, minimizing impact and downtime.',
            'points' => ['Rapid threat containment', 'Guided investigation workflows', 'Post-incident reporting'],
            'console' => [
                ['CONTAIN', 'isolate affected systems', 'RAPID', 'red'],
                ['INVESTIGATE', 'guided workflow', 'STEP 3/6', 'warm'],
                ['REPORT', 'post-incident summary', 'READY', 'blue'],
            ],
        ],
        [
            'name' => 'Firewall Management',
            'icon' => 'fa-shield-virus',
            'team' => 'blue',
            'headline' => '<span class="cl-vm-hl">Centralized Control</span> Over Your Network Defenses',
            'body' => 'Manage and monitor your firewall policies from a single dashboard, with real-time visibility into rule changes and unauthorized access attempts.',
            'points' => ['Real-time rule monitoring', 'Policy configuration & updates', 'Unauthorized access alerts'],
            'console' => [
                ['RULES', 'real-time monitoring', 'SYNCED', 'blue'],
                ['POLICY', 'configuration & updates', 'v2.4', 'warm'],
                ['ACCESS', 'unauthorized attempt', 'BLOCKED', 'red'],
            ],
        ],
        [
            'name' => 'Risk Assessment',
            'icon' => 'fa-triangle-exclamation',
            'team' => 'red',
            'headline' => 'Know Your Risk <span class="cl-vm-hl">Before It Becomes a Breach</span>',
            'body' => "vCISO continuously evaluates your organization's risk exposure, scoring assets by impact so your team always knows where to focus first.",
            'points' => ['Asset-based risk scoring', 'Business impact analysis', 'Prioritized remediation roadmap'],
            'console' => [
                ['ASSETS', 'impact-based scoring', 'SCORED', 'blue'],
                ['IMPACT', 'business analysis', '3 HIGH', 'red'],
                ['ROADMAP', 'prioritized remediation', 'QUEUED', 'warm'],
            ],
        ],
        [
            'name' => 'Backup',
            'icon' => 'fa-database',
            'team' => 'blue',
            'headline' => 'Keep Your Business Running, <span class="cl-vm-hl">No Matter What</span>',
            'body' => 'Automated backups and fast recovery options ensure your critical data and operations are protected against disruption.',
            'points' => ['Automated backup scheduling', 'Secure off-site storage', 'Fast disaster recovery'],
            'console' => [
                ['SCHEDULE', 'automated backups', 'NIGHTLY', 'blue'],
                ['STORAGE', 'secure off-site', 'ENCRYPTED', 'warm'],
                ['RECOVERY', 'disaster restore', 'TESTED', 'blue'],
            ],
        ],
        [
            'name' => 'Data Encryption',
            'icon' => 'fa-lock',
            'team' => 'blue',
            'headline' => 'Protect Sensitive Data at <span class="cl-vm-hl">Every Layer</span>',
            'body' => 'Track encryption status across your critical assets in real time, ensuring sensitive data stays protected at rest and in transit.',
            'points' => ['End-to-end encryption status', 'Key management visibility', 'Compliance-ready reporting'],
            'console' => [
                ['STATUS', 'end-to-end coverage', 'ENCRYPTED', 'blue'],
                ['KEYS', 'management visibility', 'ROTATED', 'warm'],
                ['COMPLIANCE', 'audit reporting', 'READY', 'blue'],
            ],
        ],
        [
            'name' => 'Capacity Building (Training)',
            'icon' => 'fa-graduation-cap',
            'team' => 'red',
            'headline' => 'Build a <span class="cl-vm-hl">Security-Aware</span> Workforce',
            'body' => "Track your team's training progress and phishing readiness directly from the dashboard, turning awareness into a measurable metric.",
            'points' => ['Role-based training modules', 'Phishing simulation campaigns', 'Awareness progress tracking'],
            'console' => [
                ['TRAINING', 'role-based modules', '78%', 'blue'],
                ['PHISHING SIM', 'campaign launched', 'SENT', 'red'],
                ['AWARENESS', 'progress tracking', 'RISING', 'warm'],
            ],
        ],
        [
            'name' => 'Threat Intelligence',
            'icon' => 'fa-satellite-dish',
            'team' => 'red',
            'headline' => 'Stay Ahead with <span class="cl-vm-hl">Real-Time</span> Threat Visibility',
            'body' => 'vCISO continuously monitors emerging threats and exposed assets across your digital footprint, giving your team early warning before risks become incidents.',
            'points' => ['Leaked credential monitoring', 'Phishing campaign detection', 'Industry-specific threat insights'],
            'console' => [
                ['CREDENTIALS', 'leak monitoring', '0 NEW', 'blue'],
                ['PHISHING', 'campaign detection', 'FLAGGED', 'red'],
                ['INSIGHTS', 'industry-specific feed', 'WEEKLY', 'warm'],
            ],
        ],
    ];
@endphp

<section class="page-section cl-vciso-product" id="vciso-platform">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>vCISO Modules</p>
        {{-- TODO: copy — section heading not provided in the checklist --}}
        <h2 class="page-section-heading text-center text-secondary mb-5" data-reveal>
            One Platform, <span class="cl-title-accent">Every Security Module</span>
        </h2>

        <div class="cl-vm-card" data-reveal>
            <div class="accordion" id="vmAccordion">
                @foreach ($modules as $i => $m)
                    <div class="cl-vm-item">
                        <button class="cl-vm-toggle {{ $i === 0 ? '' : 'collapsed' }}" type="button"
                                data-vm-target="#vm{{ $i }}"
                                aria-expanded="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="vm{{ $i }}">
                            <i class="fas fa-plus cl-vm-plus" aria-hidden="true"></i>
                            <span>{{ $m['name'] }}</span>
                        </button>

                        <div id="vm{{ $i }}" class="collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#vmAccordion">
                            <div class="cl-vm-panel">
                                <div class="row g-4 g-lg-5 align-items-center">
                                    <div class="col-lg-7">
                                        <h3 class="cl-vm-headline">{!! $m['headline'] !!}</h3>
                                        <p class="cl-vm-body">{{ $m['body'] }}</p>
                                        <ul class="cl-vm-points list-unstyled mb-0">
                                            @foreach ($m['points'] as $p)
                                                <li><i class="fas fa-circle-check"></i>{{ $p }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="cl-vm-visual cl-vm-team-{{ $m['team'] }}" aria-hidden="true">
                                            <div class="cl-vm-visual-top">
                                                <span></span><span></span><span></span>
                                                <strong>vCISO // {{ strtoupper($m['name']) }}</strong>
                                                <i class="fas {{ $m['icon'] }} cl-vm-top-icon"></i>
                                            </div>
                                            <div class="cl-vmc">
                                                @foreach ($m['console'] as $row)
                                                    <div class="cl-vmc-row">
                                                        <b>{{ $row[0] }}</b>
                                                        <span>{{ $row[1] }}</span>
                                                        <em class="cl-vmc-chip {{ $row[3] }}">{{ $row[2] }}</em>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="cl-vm-visual-status">
                                                <span class="cl-vm-dot"></span> MODULE ACTIVE
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    /* Section blends with the page background (no stark panel). */
    .cl-vciso-product {
        position: relative;
        overflow: hidden;
        background:
            radial-gradient(780px 420px at 12% 12%, rgba(109, 156, 255, 0.08), transparent 62%),
            radial-gradient(740px 420px at 92% 92%, rgba(228, 31, 61, 0.11), transparent 62%),
            linear-gradient(180deg, rgba(5, 12, 23, 0.96), rgba(7, 17, 31, 1));
    }
    .cl-vm-card {
        border: 1px solid var(--line-soft);
        border-radius: 14px;
        overflow: hidden;
        background: linear-gradient(160deg, rgba(11, 20, 48, 0.5), rgba(7, 15, 29, 0.55));
    }

    .cl-vm-item { border-bottom: 1px solid var(--line-soft); }
    .cl-vm-item:last-child { border-bottom: 0; }

    .cl-vm-toggle {
        display: flex;
        align-items: center;
        gap: .9rem;
        width: 100%;
        padding: 1.15rem 1.4rem;
        border: 0;
        background: transparent;
        color: var(--white);
        font-family: 'Chakra Petch', sans-serif;
        font-weight: 700;
        font-size: 1.08rem;
        text-align: left;
        cursor: pointer;
        transition: background .2s var(--ease), color .2s var(--ease);
    }
    .cl-vm-toggle:hover { background: rgba(47, 107, 255, 0.06); }
    .cl-vm-toggle[aria-expanded="true"] { color: var(--warm-soft); background: rgba(16, 31, 58, 0.5); }

    .cl-vm-plus {
        flex: 0 0 auto;
        font-size: .8rem;
        color: var(--red-soft);
        transition: transform .25s var(--ease);
    }
    .cl-vm-toggle[aria-expanded="true"] .cl-vm-plus { transform: rotate(45deg); }

    .cl-vm-panel { padding: .5rem 1.4rem 1.9rem; }

    .cl-vm-headline {
        font-family: 'Chakra Petch', sans-serif;
        font-size: clamp(1.35rem, 2.6vw, 2rem);
        line-height: 1.15;
        color: var(--white);
        margin-bottom: .9rem;
    }
    .cl-vm-hl { color: var(--blue-bright); text-shadow: 0 0 22px rgba(47, 107, 255, 0.35); }

    .cl-vm-body { color: var(--muted); margin-bottom: 1.1rem; max-width: 640px; }

    .cl-vm-points li {
        display: flex;
        align-items: flex-start;
        gap: .65rem;
        color: var(--text);
        margin-bottom: .55rem;
    }
    .cl-vm-points li:last-child { margin-bottom: 0; }
    .cl-vm-points i { color: var(--warm-soft); margin-top: .26rem; flex: 0 0 auto; }

    /* Module visual — mini console (blends, no invented copy) */
    .cl-vm-visual {
        border: 1px solid var(--line);
        border-radius: 10px;
        overflow: hidden;
        background: rgba(5, 12, 23, 0.85);
        box-shadow: 0 24px 60px rgba(0, 0, 0, 0.4);
    }
    .cl-vm-visual-top {
        display: flex;
        align-items: center;
        gap: .4rem;
        padding: .7rem .9rem;
        border-bottom: 1px solid var(--line);
        background: rgba(255, 255, 255, 0.03);
    }
    .cl-vm-visual-top span { width: 8px; height: 8px; border-radius: 50%; background: var(--red-soft); opacity: .75; }
    .cl-vm-visual-top span:nth-child(2) { background: var(--warm-soft); }
    .cl-vm-visual-top span:nth-child(3) { background: var(--blue-bright); }
    .cl-vm-visual-top strong {
        margin-left: .5rem;
        color: var(--muted);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .68rem;
        letter-spacing: .1em;
    }
    .cl-vm-visual-top strong {
        flex: 1;
        min-width: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .cl-vm-top-icon { flex: 0 0 auto; font-size: .9rem; }
    .cl-vm-team-blue .cl-vm-top-icon { color: var(--blue-bright); filter: drop-shadow(0 0 10px rgba(47, 107, 255, 0.5)); }
    .cl-vm-team-red .cl-vm-top-icon { color: var(--red-soft); filter: drop-shadow(0 0 10px rgba(228, 31, 61, 0.5)); }

    /* Module telemetry rows — each console reads like that module's dashboard */
    .cl-vmc { display: grid; gap: .55rem; padding: .95rem; }
    .cl-vmc-row {
        display: flex;
        align-items: center;
        gap: .7rem;
        padding: .62rem .78rem;
        border: 1px solid var(--line-soft);
        border-radius: 6px;
        background: rgba(16, 31, 58, 0.5);
    }
    .cl-vmc-row b {
        flex: 0 0 auto;
        color: var(--white);
        font-family: 'IBM Plex Mono', monospace;
        font-weight: 600;
        font-size: .64rem;
        letter-spacing: .1em;
    }
    .cl-vmc-row span {
        flex: 1;
        min-width: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: var(--muted);
        font-size: .78rem;
    }
    .cl-vmc-chip {
        flex: 0 0 auto;
        font-style: normal;
        font-family: 'IBM Plex Mono', monospace;
        font-size: .6rem;
        letter-spacing: .08em;
        padding: .22rem .5rem;
        border-radius: 4px;
        border: 1px solid;
    }
    .cl-vmc-chip.blue { color: var(--blue-bright); border-color: rgba(47, 107, 255, 0.45); background: rgba(47, 107, 255, 0.12); }
    .cl-vmc-chip.red { color: var(--red-soft); border-color: rgba(228, 31, 61, 0.45); background: rgba(228, 31, 61, 0.12); }
    .cl-vmc-chip.warm { color: var(--warm-soft); border-color: rgba(255, 191, 27, 0.4); background: rgba(255, 138, 0, 0.1); }

    /* Rows tick in when a module opens */
    .collapse .cl-vmc-row { opacity: 0; transform: translateY(8px); }
    .collapse.show .cl-vmc-row { animation: clVmcIn .45s var(--ease) both; }
    .collapse.show .cl-vmc-row:nth-child(2) { animation-delay: .14s; }
    .collapse.show .cl-vmc-row:nth-child(3) { animation-delay: .28s; }
    @keyframes clVmcIn { to { opacity: 1; transform: none; } }

    .cl-vm-visual-status {
        padding: .65rem .9rem;
        border-top: 1px solid var(--line);
        color: var(--muted);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .68rem;
        letter-spacing: .12em;
    }
    .cl-vm-dot {
        display: inline-block;
        width: 8px;
        height: 8px;
        margin-right: .35rem;
        border-radius: 50%;
        background: var(--blue-bright);
        box-shadow: 0 0 10px rgba(47, 107, 255, 0.7);
        animation: clVmPulse 1.8s ease-in-out infinite;
    }
    .cl-vm-team-red .cl-vm-dot {
        background: var(--red-soft);
        box-shadow: 0 0 10px rgba(228, 31, 61, 0.7);
    }
    @keyframes clVmPulse { 50% { opacity: .35; } }

    @media (max-width: 991.98px) {
        .cl-vm-panel { padding: .25rem 1.1rem 1.5rem; }
        .cl-vm-toggle { padding: 1rem 1.1rem; }
    }
    @media (prefers-reduced-motion: reduce) {
        .cl-vm-dot { animation: none !important; }
        .collapse .cl-vmc-row { opacity: 1 !important; transform: none !important; animation: none !important; }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var accordion = document.getElementById('vmAccordion');
        if (!accordion || !window.bootstrap) return;

        function setToggleState(panel, expanded) {
            var toggle = accordion.querySelector('.cl-vm-toggle[aria-controls="' + panel.id + '"]');
            if (!toggle) return;
            toggle.classList.toggle('collapsed', !expanded);
            toggle.setAttribute('aria-expanded', expanded ? 'true' : 'false');
        }

        accordion.querySelectorAll('.collapse').forEach(function (panel) {
            panel.addEventListener('shown.bs.collapse', function () { setToggleState(panel, true); });
            panel.addEventListener('hidden.bs.collapse', function () { setToggleState(panel, false); });
        });

        accordion.addEventListener('click', function (event) {
            var toggle = event.target.closest('.cl-vm-toggle');
            if (!toggle || !accordion.contains(toggle)) return;

            event.preventDefault();
            event.stopPropagation();

            var targetSelector = toggle.getAttribute('data-vm-target');
            var panel = targetSelector ? accordion.querySelector(targetSelector) : null;
            if (!panel) return;

            var targetCollapse = window.bootstrap.Collapse.getOrCreateInstance(panel, { toggle: false });
            if (panel.classList.contains('show')) {
                targetCollapse.hide();
                return;
            }

            accordion.querySelectorAll('.collapse.show').forEach(function (openPanel) {
                if (openPanel === panel) return;
                window.bootstrap.Collapse.getOrCreateInstance(openPanel, { toggle: false }).hide();
            });
            targetCollapse.show();
        });
    });
</script>
@endpush
