{{-- VAPT › Hero — heading + particle picture (box removed per feedback) --}}
<header class="cl-hero cl-vapt-hero" id="page-top">
    <canvas class="cl-vapt-net" data-net aria-hidden="true"></canvas>

    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <p class="section-eyebrow mb-3" data-reveal data-hero>Vulnerability Assessment &amp; Penetration Testing</p>
                <h1 class="cl-vapt-h mb-3" data-reveal data-hero>
                    Find and Fix Security Risks <span>Before Attackers Do</span>
                </h1>
                <p class="lead text-muted mb-4 mx-auto" style="max-width: 740px;" data-reveal data-hero>
                    Cyberlog identifies, validates, and prioritizes exploitable weaknesses across web
                    applications, APIs, mobile apps, networks, cloud, and infrastructure.
                </p>

                <div class="d-flex flex-wrap gap-2 justify-content-center mb-4" data-reveal data-hero>
                    <span class="cl-vapt-chip"><i class="fas fa-cube"></i>Black Box</span>
                    <span class="cl-vapt-chip"><i class="fas fa-adjust"></i>Grey Box</span>
                    <span class="cl-vapt-chip"><i class="fas fa-code"></i>White Box</span>
                    <span class="cl-vapt-chip"><i class="fas fa-rotate"></i>Retesting</span>
                </div>

                <div class="d-flex flex-wrap gap-3 justify-content-center" data-reveal data-hero>
                    <a class="btn btn-alert btn-xl text-white fw-bold" href="{{ route('contact') }}">Scope a VAPT</a>
                    <a class="btn btn-outline-light btn-xl" href="#calculator"><i class="fas fa-calculator me-1"></i> Estimate Scope</a>
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
        padding-top: 9rem;
        padding-bottom: 5rem;
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
    .cl-vapt-chip {
        display: inline-flex; align-items: center; gap: .5rem;
        font-family: 'IBM Plex Mono', monospace; font-size: .8rem; color: var(--white);
        background: rgba(16, 31, 58, .66); border: 1px solid var(--line);
        border-left: 3px solid var(--red-soft); border-radius: var(--r); padding: .55rem .9rem;
    }
    .cl-vapt-chip i { color: var(--warm-soft); }
</style>
@endpush
