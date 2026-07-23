@php
    $aboutIndustries = [
        ['fa-landmark', '15+', 'Government & Public Sector'],
        ['fa-globe', '3+', 'International Organizations'],
        ['fa-link', '5+', 'Financial Services'],
        ['fa-briefcase', '8+', 'Corporate & Enterprise'],
        ['fa-shield-halved', '4+', 'Law Enforcement & Defense'],
        ['fa-graduation-cap', '5+', 'Media & Education'],
    ];

    $aboutClients = [
        ['Government of Bangladesh', 'GB', 'images/clients/gono-projatontri-bangladesh-sarkar.png', 'https://bangladesh.gov.bd/'],
        ['Cabinet Division', 'CD', 'images/clients/cabinet-division.png', 'https://cabinet.gov.bd/'],
        ['ICT Division', 'ICT', 'images/clients/ict-division.png', 'https://ictd.gov.bd/'],
        ['Bangladesh Petroleum Institute', 'BPI', 'images/clients/bangladesh-petroleum-institute-bpi.png', 'https://bpi.gov.bd/'],
        ['National Academy for Planning & Development', 'NAPD', 'images/clients/national-academy-for-planning-and-development.png', 'https://napd.gov.bd/'],
        ['Dhaka Stock Exchange', 'DSE', 'images/clients/dhaka-stock-exchange-ltd.png', 'https://www.dsebd.org/'],
        ['Aamar Taka', 'AT', 'images/clients/aamar-taka.png', 'https://aamartaka.com/'],
        ['a2i Programme', 'a2i', 'images/clients/a2i.png', 'https://a2i.gov.bd/'],
        ['UNDP', 'UNDP', 'images/clients/undp.png', 'https://www.undp.org/bangladesh'],
        ['Akij Venture', 'AV', 'images/clients/akij-venture.png', 'https://www.akijventure.com/'],
        ['Adcomm Ltd.', 'AC', 'images/clients/adcomm.png', '#'],
        ['Nazimgarh Resorts', 'NR', 'images/clients/nazimgarh.png', '#'],
        ['LegalX', 'LX', 'images/clients/legal-x.png', '#'],
        ['Purbachal Apparel', 'PA', 'images/clients/purbachal.png', '#'],
        ['Vibe Gaming', 'VG', 'images/clients/vibe-gaming.png', '#'],
    ];
@endphp

<section class="page-section cl-about-industries" id="industries">
    <div class="container">
        <p class="section-eyebrow mb-2" data-reveal>Our Reach</p>
        <h2 class="page-section-heading text-white mb-4" data-reveal>Industries We Protect</h2>

        <div class="row g-3">
            @foreach ($aboutIndustries as $industry)
                <div class="col-md-6 col-lg-4">
                    <article class="cl-industry-tile h-100" data-reveal>
                        <i class="fas {{ $industry[0] }}"></i>
                        <strong>{{ $industry[1] }}</strong>
                        <span>{{ $industry[2] }}</span>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="page-section cl-about-trusted" id="trusted-by">
    <div class="container">
        <p class="section-eyebrow mb-2" data-reveal>Organizations</p>
        <h2 class="page-section-heading text-white mb-4" data-reveal>Trusted By</h2>

        <div class="cl-trusted-grid">
            @foreach ($aboutClients as $client)
                <a class="cl-trusted-client"
                   href="{{ $client[3] }}"
                   @if ($client[3] !== '#') target="_blank" rel="noopener noreferrer" @endif
                   aria-label="Visit {{ $client[0] }}">
                    <span class="cl-trusted-logo">
                        <img src="{{ asset($client[2]) }}" alt="" loading="lazy" decoding="async">
                        <b aria-hidden="true">{{ $client[1] }}</b>
                    </span>
                    <strong>{{ $client[0] }}</strong>
                </a>
            @endforeach
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-about-industries,
    .cl-about-trusted {
        position: relative;
        overflow: hidden;
        color: #f8fbff;
        background:
            radial-gradient(620px 320px at 3% 100%, rgba(228, 31, 61, .09), transparent 70%),
            linear-gradient(180deg, #080e19, #050b15);
    }
    .cl-about-industries::before,
    .cl-about-trusted::before {
        content: "";
        position: absolute;
        inset: 0;
        pointer-events: none;
        background:
            linear-gradient(rgba(109, 156, 255, .025) 1px, transparent 1px),
            linear-gradient(90deg, rgba(109, 156, 255, .02) 1px, transparent 1px);
        background-size: 42px 42px;
    }
    .cl-about-industries .container,
    .cl-about-trusted .container {
        position: relative;
        z-index: 1;
    }
    .cl-industry-tile {
        min-height: 142px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        border-radius: 10px;
        padding: 1.25rem 1.35rem;
        background:
            radial-gradient(180px 90px at 0 100%, rgba(228, 31, 61, .07), transparent 75%),
            rgba(15, 23, 36, .72);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .025), 0 16px 38px rgba(0, 0, 0, .16);
        transition: transform .25s var(--ease), background .25s var(--ease);
    }
    .cl-industry-tile:hover {
        transform: translateY(-4px);
        background:
            radial-gradient(180px 90px at 0 100%, rgba(228, 31, 61, .12), transparent 75%),
            rgba(18, 29, 46, .84);
    }
    .cl-industry-tile i {
        margin-bottom: .65rem;
        color: #df6680;
        font-size: .9rem;
    }
    .cl-industry-tile strong {
        color: #f8fbff;
        font-family: 'Chakra Petch', sans-serif;
        font-size: 1.75rem;
        line-height: 1;
    }
    .cl-industry-tile span {
        margin-top: .55rem;
        color: #7f8da6;
        font-family: 'IBM Plex Mono', monospace;
        font-size: .62rem;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
    }
    .cl-about-trusted {
        padding-top: 1.5rem;
        border-top: 1px solid rgba(109, 156, 255, .08);
        background:
            radial-gradient(640px 300px at 0 45%, rgba(228, 31, 61, .08), transparent 68%),
            linear-gradient(180deg, #050b15, #07101e);
    }
    .cl-trusted-grid {
        display: grid;
        grid-template-columns: repeat(5, minmax(0, 1fr));
        gap: .8rem;
    }
    .cl-trusted-client {
        min-width: 0;
        min-height: 132px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 9px;
        padding: 1rem .65rem;
        background: rgba(14, 23, 37, .68);
        color: #9daac0;
        text-align: center;
        text-decoration: none;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .025);
        transition: transform .24s var(--ease), background .24s var(--ease), color .24s var(--ease);
    }
    .cl-trusted-client:hover,
    .cl-trusted-client:focus-visible {
        transform: translateY(-4px);
        background: rgba(19, 31, 50, .9);
        color: #f8fbff;
    }
    .cl-trusted-client:focus-visible {
        outline: 2px solid var(--blue-bright);
        outline-offset: 3px;
    }
    .cl-trusted-logo {
        position: relative;
        width: 56px;
        height: 56px;
        display: grid;
        place-items: center;
        margin-bottom: .7rem;
        border: 1px solid rgba(228, 31, 61, .28);
        border-radius: 50%;
        overflow: hidden;
        background: rgba(228, 31, 61, .04);
    }
    .cl-trusted-logo img {
        width: 76%;
        height: 76%;
        object-fit: contain;
        filter: grayscale(1) brightness(1.45);
        opacity: .72;
        transition: opacity .24s var(--ease), filter .24s var(--ease);
    }
    .cl-trusted-logo b {
        display: none;
        color: #df6680;
        font-family: 'IBM Plex Mono', monospace;
        font-size: .62rem;
    }
    .cl-trusted-logo img[src=""],
    .cl-trusted-logo img:not([src]) {
        display: none;
    }
    .cl-trusted-logo img[src=""] + b,
    .cl-trusted-logo img:not([src]) + b {
        display: block;
    }
    .cl-trusted-client:hover img {
        filter: none;
        opacity: 1;
    }
    .cl-trusted-client > strong {
        max-width: 100%;
        color: inherit;
        font-size: .7rem;
        font-weight: 500;
        line-height: 1.35;
    }
    @media (max-width: 991.98px) {
        .cl-trusted-grid { grid-template-columns: repeat(3, minmax(0, 1fr)); }
    }
    @media (max-width: 575.98px) {
        .cl-trusted-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: .65rem; }
        .cl-trusted-client { min-height: 120px; }
        .cl-industry-tile { min-height: 124px; }
    }
</style>
@endpush
