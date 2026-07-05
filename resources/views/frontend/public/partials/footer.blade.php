{{-- Public marketing footer — viserx.com style: multi-column links, social icons,
     and a large glowing "Cyberlog" wordmark at the bottom. --}}
@php
    $u = fn ($pub, $legacy) => Route::has($pub) ? route($pub) : (Route::has($legacy) ? route($legacy) : '#');
@endphp

<footer class="footer pt-5 pb-4">
    <div class="container">

        <div class="row gy-4">

            {{-- Services — the 12-service catalogue (config/cyberlog_services.php) --}}
            <div class="col-12 col-lg-6">
                <div class="cl-foot-head">Services</div>
                <div class="row">
                    @foreach (array_chunk(config('cyberlog_services', []), 6) as $chunk)
                        <div class="col-sm-6">
                            @foreach ($chunk as $svc)
                                <a class="cl-foot-link" href="{{ Route::has($svc['route']) ? route($svc['route']) : '#' }}">{{ $svc['title'] }}</a>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Company --}}
            <div class="col-6 col-lg-3">
                <div class="cl-foot-head">Company</div>
                <a class="cl-foot-link" href="{{ $u('public.about', 'about') }}">About Us</a>
                <a class="cl-foot-link" href="{{ $u('public.clients', 'clients') }}">Clients</a>
                <a class="cl-foot-link" href="{{ $u('public.contact', 'contact') }}">Contact</a>
                <a class="cl-foot-link" href="{{ $u('public.career', 'career') }}">Career</a>
                <a class="cl-foot-link" href="{{ $u('public.services', 'services') }}">All Services</a>
            </div>

            {{-- Contact --}}
            <div class="col-6 col-lg-3">
                <div class="cl-foot-head">Contact</div>
                <p class="text-muted mb-2"><i class="fas fa-location-dot text-primary me-2"></i>374 Tejgaon Industrial Area, 3rd Floor, Dhaka 1208, Bangladesh</p>
                <p class="text-muted mb-2"><i class="fas fa-envelope text-primary me-2"></i><a class="link-light text-decoration-none" href="mailto:info@cyberlog.bd">info@cyberlog.bd</a></p>
                <p class="text-muted mb-3"><i class="fas fa-phone text-primary me-2"></i>+880 1357-699084</p>
                <div class="d-flex gap-2">
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://x.com/" target="_blank" rel="noopener noreferrer" aria-label="X"><i class="fab fa-fw fa-x-twitter"></i></a>
                </div>
            </div>

        </div>

        <hr class="border-secondary my-4">

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center text-muted small">
            <div>&copy; {{ date('Y') }} Cyberlog. All rights reserved.</div>
            <div class="mono">CYBER SAFE UNIVERSE</div>
        </div>

        {{-- Big glowing wordmark --}}
        <div class="cl-wordmark" aria-hidden="true">CYBERLOG</div>

    </div>
</footer>
