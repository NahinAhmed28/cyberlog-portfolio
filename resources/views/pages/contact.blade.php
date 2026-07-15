@extends('layouts.portfolio')

@section('title', 'Contact — Cyberlog')

@section('content')

{{-- Hero — box removed per feedback (centered, single column) --}}
@include('partials.page-hero', [
    'eyebrow' => 'Contact',
    'heading' => "We'd <span class=\"text-teal\">Love to Hear</span> From You",
    'subheading' => 'Get in touch with our team and we will reach out to discuss your security needs and how Cyberlog can help.',
    'centered' => true,
])

<section class="page-section" id="contact-form">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5">
                <p class="section-eyebrow mb-2">Reach Us</p>
                <h2 class="fw-bold text-secondary mb-4">Talk to a <span class="cl-title-accent">security expert</span></h2>
                <p class="text-muted mb-4">Tell us a little about your environment and goals — we'll get back to you with the right team.</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="fas fa-location-dot text-teal me-2"></i>374 Tejgaon Industrial Area, 3rd Floor, Dhaka 1208, Bangladesh</li>
                    <li class="mb-3"><i class="fas fa-envelope text-teal me-2"></i><a class="link-secondary text-decoration-none" href="mailto:info@cyberlog.bd">info@cyberlog.bd</a></li>
                    <li class="mb-3"><i class="fas fa-phone text-teal me-2"></i>+880 1357-699084</li>
                </ul>
                <div class="d-flex gap-2">
                    <a class="btn btn-outline-secondary btn-social" href="https://www.facebook.com/cyberlogbd/" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="https://www.linkedin.com/company/cyberlogbd/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="https://www.instagram.com/cyberlog_bd/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fab fa-fw fa-instagram"></i></a>
                    {{-- TODO: confirm the real X/Twitter profile URL --}}
                    <a class="btn btn-outline-secondary btn-social" href="https://x.com/cyberlogbd" target="_blank" rel="noopener noreferrer" aria-label="X (Twitter)"><i class="fab fa-fw fa-x-twitter"></i></a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="cl-calc">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6"><input class="form-control" type="text" placeholder="Your name *"></div>
                            <div class="col-md-6"><input class="form-control" type="text" placeholder="Company"></div>
                            <div class="col-md-6"><input class="form-control" type="email" placeholder="Email *"></div>
                            <div class="col-md-6"><input class="form-control" type="tel" placeholder="Phone"></div>
                            <div class="col-12">
                                <select class="form-select">
                                    <option selected disabled>I'm interested in…</option>
                                    @foreach (config('cyberlog_services', []) as $svc)
                                        <option>{{ $svc['title'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12"><textarea class="form-control" rows="5" placeholder="Message"></textarea></div>
                            <div class="col-12"><button class="btn btn-primary btn-xl text-white fw-bold" type="submit">Send Message</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Google Map — Cyberlog office, 374 Tejgaon Industrial Area, Dhaka 1208 --}}
<section class="page-section pt-0" id="map">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Find Us</p>
        <h2 class="page-section-heading text-center text-secondary mb-4">Our <span class="cl-title-accent">Location</span></h2>
        <div class="cl-map">
            <iframe
                src="https://www.google.com/maps?q={{ urlencode('374 Tejgaon Industrial Area, 3rd Floor, Dhaka 1208, Bangladesh') }}&output=embed"
                title="Cyberlog office location — Tejgaon, Dhaka"
                loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
        </div>
    </div>
</section>

@include('partials.talk-to-expert')

@endsection

@push('styles')
<style>
    .cl-map {
        border: 1px solid var(--line);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 24px 60px rgba(0, 0, 0, 0.45);
        background: var(--surface);
    }
    .cl-map iframe {
        display: block;
        width: 100%;
        height: 440px;
        border: 0;
        filter: grayscale(.2) contrast(1.05);
    }
    @media (max-width: 575.98px) { .cl-map iframe { height: 320px; } }
</style>
@endpush
