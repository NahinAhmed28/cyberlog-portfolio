@php
    $u = fn ($pub, $legacy) => Route::has($pub)
        ? route($pub)
        : (Route::has($legacy) ? route($legacy) : '#');

    $is = fn (...$names) => request()->routeIs(...$names) ? 'active' : '';

    $services = config('cyberlog_services', []);
    $svcUrl = fn ($r) => Route::has($r) ? route($r) : '#';
    $byRoute = collect($services)->keyBy('route');

    $primaryRoutes = ['soc', 'vapt', 'it-audit', 'capacity-building'];
    $primaryServices = collect($primaryRoutes)
        ->map(fn ($route) => $byRoute->get($route))
        ->filter()
        ->values();
    $serviceRouteNames = array_merge(
        [
            'services',
            'public.services',
            'offensive-security-services',
            'public.offensive-security-services',
            'defensive-security-services',
            'public.defensive-security-services',
            'defense-services',
        ],
        array_map(fn ($s) => $s['route'], $services)
    );
@endphp

<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container-fluid px-lg-5 px-md-4 px-3">

        <a class="navbar-brand p-0" href="{{ $u('public.home', 'home') }}">
            <img src="{{ asset('assets/img/cyberlog-logo.png') }}" alt="Cyberlog" style="height:44px;width:auto;display:block;">
        </a>

        <button class="navbar-toggler bg-primary text-white rounded"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive">
            Menu
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-2 px-0 px-lg-3 rounded {{ $is('public.home', 'home') }}"
                       href="{{ $u('public.home', 'home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item dropdown mx-0 mx-lg-1">
                    <a class="nav-link dropdown-toggle py-2 px-0 px-lg-3 rounded {{ request()->routeIs(...$serviceRouteNames) ? 'active' : '' }}"
                       href="#"
                       id="servicesDropdown"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Services
                    </a>

                    <ul class="dropdown-menu cl-services-menu" aria-labelledby="servicesDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ $u('public.services', 'services') }}">All Services</a>
                        </li>
                        <li><hr class="dropdown-divider"></li>

                        @foreach ($primaryServices as $svc)
                            <li>
                                <a class="dropdown-item" href="{{ $svcUrl($svc['route']) }}">
                                    {{ $svc['title'] }}
                                </a>
                            </li>
                        @endforeach

                        <li><hr class="dropdown-divider"></li>

                        <li>
                            <a class="dropdown-item" href="{{ $u('public.offensive-security-services', 'offensive-security-services') }}">
                                Offensive Security Services
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ $u('public.defensive-security-services', 'defensive-security-services') }}">
                                Defensive Security Services
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-2 px-0 px-lg-3 rounded {{ $is('public.vciso', 'vciso') }}"
                       href="{{ $u('public.vciso', 'vciso') }}">
                        Prohoree 365
                    </a>
                </li>

                <li class="nav-item dropdown mx-0 mx-lg-1">
                    <a class="nav-link dropdown-toggle py-2 px-0 px-lg-3 rounded {{ $is('public.about','about','public.our-team','our-team','public.career','career','public.contact','contact') }}"
                       href="#" id="companyDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Company
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="companyDropdown">
                        <li><a class="dropdown-item" href="{{ $u('public.about', 'about') }}">About Us</a></li>
                        <li><a class="dropdown-item" href="{{ $u('public.our-team', 'our-team') }}">Our Team</a></li>
                        <li><a class="dropdown-item" href="{{ $u('public.career', 'career') }}">Career</a></li>
                        <li><a class="dropdown-item" href="{{ $u('public.contact', 'contact') }}">Contact</a></li>
                    </ul>
                </li>

                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a class="btn cl-nav-cta" href="{{ $u('public.contact', 'contact') }}">
                        Talk to an Expert
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>
