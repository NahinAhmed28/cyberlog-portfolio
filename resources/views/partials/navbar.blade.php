@php
    $u = fn ($pub, $legacy) => Route::has($pub) ? route($pub) : (Route::has($legacy) ? route($legacy) : '#');

    $serviceLinks = [
        ['label' => 'All Services', 'pub' => 'public.services', 'legacy' => 'services'],
        ['label' => 'Managed Security Services', 'pub' => 'public.soc', 'legacy' => 'soc'],
        ['label' => 'VAPT / Pen Testing', 'pub' => 'public.vapt', 'legacy' => 'vapt'],
        ['label' => 'Security Audits & ISO 27001', 'pub' => 'public.it-audit', 'legacy' => 'it-audit'],
        ['label' => 'Security Awareness Training', 'pub' => 'public.capacity-building', 'legacy' => 'capacity-building'],
        ['label' => 'Offensive Security Services', 'pub' => 'public.offensive-security-services', 'legacy' => 'offensive-security-services'],
        ['label' => 'Defensive Security Services', 'pub' => 'public.defensive-security-services', 'legacy' => 'defensive-security-services'],
    ];

    $serviceRouteNames = [
        'public.services', 'services',
        'public.soc', 'soc',
        'public.vapt', 'vapt',
        'public.it-audit', 'it-audit',
        'public.capacity-building', 'capacity-building',
        'public.offensive-security-services', 'offensive-security-services',
        'public.defensive-security-services', 'defensive-security-services',
        'public.defense-services', 'defense-services',
    ];
@endphp

<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <i class="fas fa-shield-halved text-primary me-1"></i>Cyber<span class="text-primary">log</span>
        </a>

        <button
            class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive"
        >
            Menu
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-2 px-0 px-lg-3 rounded {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item dropdown mx-0 mx-lg-1">
                    <a class="nav-link dropdown-toggle py-2 px-0 px-lg-3 rounded {{ request()->routeIs(...$serviceRouteNames) ? 'active' : '' }}"
                       href="#"
                       id="legacyServicesDropdown"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Services
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="legacyServicesDropdown">
                        @foreach ($serviceLinks as $link)
                            @if ($loop->index === 1)
                                <li><hr class="dropdown-divider"></li>
                            @endif

                            <li>
                                <a class="dropdown-item" href="{{ $u($link['pub'], $link['legacy']) }}">
                                    {{ $link['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-2 px-0 px-lg-3 rounded {{ request()->routeIs('public.vciso', 'vciso') ? 'active' : '' }}"
                       href="{{ $u('public.vciso', 'vciso') }}">
                        vCISO
                    </a>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-2 px-0 px-lg-3 rounded {{ request()->routeIs('public.about', 'about') ? 'active' : '' }}"
                       href="{{ $u('public.about', 'about') }}">
                        About Us
                    </a>
                </li>

                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    @if (request()->routeIs('public.vciso', 'vciso'))
                        <a class="btn btn-primary btn-talk text-white fw-bold"
                           href="{{ Route::has('client.login') ? route('client.login') : url('/client/login') }}">
                            <i class="fas fa-lock me-1"></i>Client Login
                        </a>
                    @else
                        <a class="btn btn-primary btn-talk text-white fw-bold"
                           href="{{ $u('public.contact', 'contact') }}">
                            Talk to an Expert
                        </a>
                    @endif
                </li>

            </ul>
        </div>
    </div>
</nav>
