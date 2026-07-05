{{-- VAPT > Hero - SOC-style layout with the slider box removed per feedback --}}
<header class="cl-hero cl-vapt-hero" id="page-top">
    <canvas class="cl-vapt-net" data-net aria-hidden="true"></canvas>

    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p class="section-eyebrow mb-3" data-reveal data-hero>Vulnerability Assessment &amp; Penetration Testing</p>
                <h1 class="cl-vapt-h mb-3" data-reveal data-hero>
                    Find and Fix Security Risks <span>Before Attackers Do</span>
                </h1>
                <p class="lead text-muted mb-0" data-reveal data-hero>
                    Cyberlog identifies, validates, and prioritizes exploitable weaknesses across web
                    applications, APIs, mobile apps, networks, cloud, and infrastructure.
                </p>
            </div>

            <div class="col-lg-6">
                <div class="cl-vapt-assessment" data-reveal data-hero>
                    <div class="cl-vapt-assessment-top">
                        <span></span>
                        <strong>VAPT // Active Assessment</strong>
                    </div>
                    <div class="cl-vapt-assessment-main">
                        <div class="cl-vapt-radar" aria-hidden="true">
                            <i class="fas fa-bug"></i>
                        </div>
                        <div>
                            <h2>Attack path validation</h2>
                            <p>External exposure, authentication bypass, privilege escalation, and data-access impact.</p>
                        </div>
                    </div>
                    <div class="cl-vapt-steps" aria-label="VAPT assessment steps">
                        @foreach (['Recon', 'Scan', 'Exploit', 'Report', 'Retest'] as $index => $step)
                            <div><span>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>{{ $step }}</div>
                        @endforeach
                    </div>
                    <div class="cl-vapt-logs">
                        <p><span>[VALIDATED]</span> SQL injection impact confirmed</p>
                        <p><span>[MAPPED]</span> OWASP access control weakness</p>
                        <p><span>[QUEUED]</span> remediation evidence review</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@push('styles')
<style>
    .cl-vapt-hero {
        position: relative;
        overflow: hidden;
        padding-top: 9.5rem;
        padding-bottom: 5.5rem;
        background:
            radial-gradient(860px 520px at 80% 8%, rgba(228, 31, 61, 0.15), transparent 62%),
            radial-gradient(760px 480px at 4% 94%, rgba(109, 156, 255, 0.1), transparent 66%),
            linear-gradient(180deg, rgba(7, 17, 31, 0.98), rgba(5, 12, 23, 0.98));
    }
    .cl-vapt-net { position: absolute; inset: 0; width: 100%; height: 100%; z-index: 0; }
    .cl-vapt-hero .container { position: relative; z-index: 2; }
    .cl-vapt-h {
        font-family: 'Chakra Petch', sans-serif;
        font-weight: 700;
        font-size: clamp(2.25rem, 5vw, 4rem);
        color: var(--white);
        line-height: 1.02;
    }
    .cl-vapt-h span { display: inline-block; color: var(--warm-soft); text-shadow: 0 0 26px rgba(255, 138, 0, .28); }
    .cl-vapt-assessment {
        border: 1.5px solid transparent;
        border-radius: 10px;
        overflow: hidden;
        background:
            linear-gradient(160deg, rgba(9, 18, 38, .94), rgba(7, 15, 29, .96)) padding-box,
            linear-gradient(130deg, var(--red-soft), rgba(109, 156, 255, .72)) border-box;
    }
    .cl-vapt-assessment-top {
        display: flex;
        align-items: center;
        gap: .55rem;
        padding: .8rem 1rem;
        border-bottom: 1px solid var(--line);
        color: var(--muted);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .75rem;
        text-transform: uppercase;
        letter-spacing: .06em;
    }
    .cl-vapt-assessment-top span {
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background: var(--red-soft);
        box-shadow: 0 0 14px rgba(255, 72, 101, .65);
    }
    .cl-vapt-assessment-main {
        display: grid;
        grid-template-columns: 130px minmax(0, 1fr);
        gap: 1.5rem;
        align-items: center;
        padding: clamp(1.4rem, 3vw, 2.2rem);
        min-height: 210px;
    }
    .cl-vapt-radar {
        position: relative;
        width: 120px;
        aspect-ratio: 1;
        display: grid;
        place-items: center;
        border-radius: 50%;
        background:
            repeating-radial-gradient(circle, rgba(255, 72, 101, .2) 0 1px, transparent 1px 18px),
            radial-gradient(circle, rgba(255, 72, 101, .22), rgba(16, 31, 58, .12) 58%, transparent 62%);
    }
    .cl-vapt-radar::after {
        content: "";
        position: absolute;
        inset: 18px;
        border-radius: 50%;
        border: 1px solid rgba(255, 191, 27, .28);
    }
    .cl-vapt-radar i { color: var(--white); filter: drop-shadow(0 0 14px rgba(255, 72, 101, .75)); }
    .cl-vapt-assessment h2 {
        font-family: 'Chakra Petch', sans-serif;
        color: var(--white);
        font-size: clamp(1.25rem, 2.2vw, 1.65rem);
        margin-bottom: .55rem;
    }
    .cl-vapt-assessment p { color: var(--muted); line-height: 1.6; margin: 0; }
    .cl-vapt-steps {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        border-top: 1px solid var(--line);
        border-bottom: 1px solid var(--line);
    }
    .cl-vapt-steps div {
        min-height: 72px;
        padding: .7rem .75rem;
        border-right: 1px solid var(--line);
        background: rgba(16, 31, 58, .46);
        color: var(--white);
        font-family: 'IBM Plex Mono', monospace;
        font-size: .75rem;
        font-weight: 700;
    }
    .cl-vapt-steps div:last-child { border-right: 0; }
    .cl-vapt-steps span {
        display: block;
        color: var(--red-soft);
        font-size: .68rem;
        margin-bottom: .35rem;
    }
    .cl-vapt-logs {
        padding: .85rem 1rem 1rem;
        font-family: 'IBM Plex Mono', monospace;
        font-size: .74rem;
    }
    .cl-vapt-logs p { margin: .18rem 0; color: var(--muted); }
    .cl-vapt-logs span { color: var(--warm-soft); }

    @media (max-width: 767.98px) {
        .cl-vapt-assessment-main { grid-template-columns: 1fr; }
        .cl-vapt-steps { grid-template-columns: 1fr; }
        .cl-vapt-steps div { border-right: 0; border-bottom: 1px solid var(--line); min-height: auto; }
        .cl-vapt-steps div:last-child { border-bottom: 0; }
    }
</style>
@endpush
