<section class="cl-vapt-numbers" aria-label="VAPT delivery metrics">
    <div class="container">
        <div class="cl-vapt-number-grid" data-reveal>
            <div>
                <strong>160+</strong>
                <span>Tests annually</span>
            </div>
            <div>
                <strong>1,440+</strong>
                <span>Vulnerabilities detected per year</span>
            </div>
            <div>
                <strong>2–4</strong>
                <span>Weeks an average penetration test lasts</span>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-vapt-numbers {
        position: relative;
        overflow: hidden;
        padding: clamp(2.3rem, 5vw, 4rem) 0;
        background:
            radial-gradient(520px 180px at 50% 50%, rgba(255, 72, 101, .08), transparent 72%),
            #07111f;
    }
    .cl-vapt-number-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: clamp(1rem, 4vw, 4rem);
    }
    .cl-vapt-number-grid > div {
        position: relative;
        display: grid;
        justify-items: center;
        text-align: center;
    }
    .cl-vapt-number-grid > div + div::before {
        content: "";
        position: absolute;
        top: 10%;
        bottom: 10%;
        left: calc(clamp(1rem, 4vw, 4rem) / -2);
        width: 1px;
        background: linear-gradient(transparent, rgba(109, 156, 255, .24), transparent);
    }
    .cl-vapt-number-grid strong {
        position: relative;
        width: max-content;
        color: #f8fbff;
        font-family: 'Chakra Petch', sans-serif;
        font-size: clamp(2.35rem, 6vw, 4.8rem);
        font-weight: 700;
        line-height: .95;
    }
    .cl-vapt-number-grid strong::after {
        content: "";
        display: block;
        height: 2px;
        margin-top: .35rem;
        background: linear-gradient(90deg, transparent, var(--warm-soft), transparent);
        box-shadow: 0 0 14px rgba(255, 191, 27, .25);
    }
    .cl-vapt-number-grid span {
        max-width: 230px;
        margin-top: .75rem;
        color: var(--muted);
        font-size: .86rem;
        line-height: 1.45;
    }
    @media (max-width: 575.98px) {
        .cl-vapt-number-grid { grid-template-columns: 1fr; gap: 2rem; }
        .cl-vapt-number-grid > div + div::before { display: none; }
    }
</style>
@endpush
