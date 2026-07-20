{{-- Public marketing footer — viserx.com style: multi-column links, social icons,
     and a large glowing "Cyberlog" wordmark at the bottom. --}}
@php
    $u = fn ($pub, $legacy) => Route::has($pub) ? route($pub) : (Route::has($legacy) ? route($legacy) : '#');
    $svcUrl = function ($service) {
        $groupRoutes = [
            'offensive' => 'offensive-security-services',
            'defensive' => 'defensive-security-services',
        ];

        $group = $service['group'] ?? null;
        if (isset($groupRoutes[$group]) && Route::has($groupRoutes[$group])) {
            return route($groupRoutes[$group]);
        }

        if (Route::has($service['route'])) {
            return route($service['route']);
        }

        return '#';
    };
@endphp

<footer class="footer pt-5 pb-4">
    <div class="container">

        <div class="row gy-4">
            {{-- Services — the 9-service catalogue (config/cyberlog_services.php) --}}
            <div class="col-12 col-xl-4">
                <div class="cl-foot-head">Major Services</div>
                    <a class="cl-foot-link" href="#">Security Operations Center (SOC)</a>
                    <a class="cl-foot-link" href="#">Vulnerability Assessment & Penetration Testing (VAPT)</a>
                    <a class="cl-foot-link" href="#">IT Security Audit & ISO/IEC 27001</a>
                    <a class="cl-foot-link" href="#">Awareness & Security Training</a>
                    <a class="cl-foot-link" href="#">AI & Automation</a>
                {{--<div class="cl-foot-services">
                    @foreach (config('cyberlog_services', []) as $svc)
                        <a class="cl-foot-link" href="{{ $svcUrl($svc) }}">{{ $svc['title'] }}</a>
                    @endforeach
                </div>--}}
            </div>

            {{-- Specialized Services --}}
            <div class="col-6 col-xl-2">
                <div class="cl-foot-head">Specialized Services </div>
                <a class="cl-foot-link" href="{{ $u('public.offensive-security-services', 'offensive-security-services') }}">Offensive Security Services</a>
                <a class="cl-foot-link" href="{{ $u('public.defensive-security-services', 'defensive-security-services') }}">Defensive Security Services</a>
            </div>
            
            {{-- Company --}}
            <div class="col-6 col-xl-2">
                <div class="cl-foot-head">Company</div>
                <a class="cl-foot-link" href="{{ $u('public.about', 'about') }}">About Us</a>
                <a class="cl-foot-link" href="#">Our Team</a>
                <a class="cl-foot-link" href="{{ $u('public.career', 'career') }}">Career</a>
                <a class="cl-foot-link" href="{{ $u('public.contact', 'contact') }}">Contact</a>
            </div>

            {{-- Contact --}}
            <div class="col-6 col-xl-3">
                <div class="cl-foot-head">Contact</div>
                <p class="text-muted mb-2"><i class="fas fa-location-dot text-primary me-2"></i>374 Tejgaon Industrial Area, 3rd Floor, Dhaka 1208, Bangladesh</p>
                <p class="text-muted mb-2"><i class="fas fa-envelope text-primary me-2"></i><a class="link-light text-decoration-none" href="mailto:info@cyberlog.bd">info@cyberlog.bd</a></p>
                <p class="text-muted mb-2"><i class="fas fa-phone text-primary me-2"></i>+880 1357-699084</p>
                <p class="text-muted mb-3"><i class="fa-solid fa-earth-americas text-primary me-2"></i><a href="http://www.cyberlog.bd" target="_blank">http://www.cyberlog.bd</p>
                <div class="d-flex gap-2">
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/cyberlogbd/" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/cyberlogbd/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/cyberlog_bd/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fab fa-fw fa-instagram"></i></a>
                    {{-- TODO: confirm the real X/Twitter profile URL --}}
                    <a class="btn btn-outline-light btn-social" href="https://x.com/cyberlogbd" target="_blank" rel="noopener noreferrer" aria-label="X (Twitter)"><i class="fab fa-fw fa-x-twitter"></i></a>
                </div>
            </div>

        </div>

        <hr class="border-0 my-4">


        {{-- Big glowing wordmark --}}
        <div class="cl-wordmark-wrap">
            <div class="cl-wordmark-lockup">
                <div class="d-flex align-items-center mb-5 justify-content-md-between pe-4 ps-3 justify-content-center flex-wrap" style="gap: 0 1.5rem !important;">
                    <div class="cl-footer-meta text-muted small">
                        <div>&copy; {{ date('Y') }} Cyberlog. All rights reserved.</div>
                    </div>
                    <div class="mono cl-footer-tagline text-muted small position-relative m-0">CYBER SAFE UNIVERSE</div>
                </div>
                <div class="cl-wordmark" aria-hidden="true"><span>CYBERL</span><span>OG</span></div>
            </div>
        </div>

    </div>
</footer>
