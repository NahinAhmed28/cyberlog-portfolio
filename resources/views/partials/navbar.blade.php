@php
    $u = fn ($pub, $legacy) => Route::has($pub) ? route($pub) : (Route::has($legacy) ? route($legacy) : '#');
    $serviceLinks = [
        ['label' => 'All Services', 'pub' => 'public.services', 'legacy' => 'services'],
        ['label' => 'Managed Security Services', 'pub' => 'public.soc', 'legacy' => 'soc'],
        ['label' => 'VAPT / Pen Testing', 'pub' => 'public.vapt', 'legacy' => 'vapt'],
        ['label' => 'Security Audits & ISO 27001', 'pub' => 'public.it-audit', 'legacy' => 'it-audit'],
        ['label' => 'Security Awareness Training', 'pub' => 'public.capacity-building', 'legacy' => 'capacity-building'],
        ['label' => 'Defense Services', 'pub' => 'public.defense-services', 'legacy' => 'defense-services'],
        ['label' => 'vCISO', 'pub' => 'public.vciso', 'legacy' => 'vciso'],
        ['label' => 'Malware Analysis', 'pub' => 'public.malware-analysis', 'legacy' => 'public.malware-analysis'],
        ['label' => 'Next-Gen Firewall Protection', 'pub' => 'public.next-gen-firewall', 'legacy' => 'public.next-gen-firewall'],
        ['label' => 'Backup and Recovery', 'pub' => 'public.backup-recovery', 'legacy' => 'public.backup-recovery'],
        ['label' => 'Digital Forensics', 'pub' => 'public.digital-forensics', 'legacy' => 'public.digital-forensics'],
    ];
    $serviceRouteNames = ['public.services', 'services', 'public.soc', 'soc', 'public.vapt', 'vapt', 'public.it-audit', 'it-audit', 'public.capacity-building', 'capacity-building', 'public.defense-services', 'defense-services', 'public.vciso', 'vciso', 'public.malware-analysis', 'public.next-gen-firewall', 'public.backup-recovery', 'public.digital-forensics'];
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
                    <a class="nav-link py-3 px-0 px-lg-3 rounded {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item dropdown mx-0 mx-lg-1">
                    <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded {{ request()->routeIs(...$serviceRouteNames) ? 'active' : '' }}"
                       href="#" id="legacyServicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <a class="nav-link py-3 px-0 px-lg-3 rounded {{ request()->routeIs('public.clients') ? 'active' : '' }}" href="{{ route('public.clients') }}">
                        Clients
                    </a>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded {{ request()->routeIs('vciso') ? 'active' : '' }}" href="{{ route('vciso') }}">
                        vCISO
                    </a>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        About Us
                    </a>
                </li>

                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    @if (request()->routeIs('vciso'))
                        <a class="btn btn-primary btn-talk text-white fw-bold" href="{{ Route::has('client.login') ? route('client.login') : url('/client/login') }}">
                            <i class="fas fa-lock me-1"></i>Client Login
                        </a>
                    @else
                        <a class="btn btn-primary btn-talk text-white fw-bold" href="{{ route('contact') }}">
                            Talk to an Expert
                        </a>
                    @endif
                </li>

            </ul>

        </div>
    </div>
</nav>
