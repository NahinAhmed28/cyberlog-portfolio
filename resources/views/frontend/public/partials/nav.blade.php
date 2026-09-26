@php
    $u = fn ($pub, $legacy) => Route::has($pub)
        ? route($pub)
        : (Route::has($legacy) ? route($legacy) : '#');

    $is = fn (...$names) => request()->routeIs(...$names) ? 'active' : '';

    $services = content_items('services');
    $svcUrl = fn ($service) => content_service_url($service);
    $byRoute = collect($services)->keyBy('route');

    $primaryRoutes = content_items('nav_primary_routes');
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

        <a class="navbar-brand p-0" href="{{ content('nav', 'destination') }}">
            <img class="cl-brand-logo" src="{{ asset(content('nav', 'img_media')) }}" alt="{{ content('nav', 'img_alt') }}" width="444" height="159">
        </a>

        <button class="navbar-toggler bg-primary text-white rounded"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive">
            {{ content('nav', 'button_label') }}
            <i class="{{ content('nav', 'icon') }}"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-2 px-0 px-lg-3 rounded {{ $is('public.home', 'home') }}"
                       href="{{ content('nav', 'destination_2') }}">
                        {{ content('nav', 'link_label') }}
                    </a>
                </li>

                <li class="nav-item dropdown mx-0 mx-lg-1">
                    <a class="nav-link dropdown-toggle py-2 px-0 px-lg-3 rounded {{ request()->routeIs(...$serviceRouteNames) ? 'active' : '' }}"
                       href="javascript:void(0)"
                       id="servicesDropdown"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        {{ content('nav', 'link_label_2') }}
                    </a>

                    <ul class="dropdown-menu cl-services-menu" aria-labelledby="servicesDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ content('nav', 'destination_3') }}">{{ content('nav', 'link_label_3') }}</a>
                        </li>
                        <li><hr class="dropdown-divider"></li>

                        @foreach ($primaryServices as $svc)
                            <li>
                                <a class="dropdown-item" href="{{ $svcUrl($svc) }}">
                                    {{ $svc['title'] }}
                                </a>
                            </li>
                        @endforeach

                        <li><hr class="dropdown-divider"></li>
@foreach(content_items('navigation_specialized_links') as $link)<li><a class="dropdown-item" href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>@endforeach
</ul>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-2 px-0 px-lg-3 rounded {{ $is('public.vciso', 'vciso') }}"
                       href="{{ content('nav', 'destination_6') }}">
                        {{ content('nav', 'link_label_6') }}
                    </a>
                </li>

                <li class="nav-item dropdown mx-0 mx-lg-1">
                    <a class="nav-link dropdown-toggle py-2 px-0 px-lg-3 rounded {{ $is('public.about','about','public.our-team','our-team','public.career','career','public.contact','contact') }}"
                       href="javascript:void(0)" id="companyDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ content('nav', 'link_label_7') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="companyDropdown">
@foreach(content_items('navigation_company_links') as $link)<li><a class="dropdown-item" href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>@endforeach
</ul>
                </li>

                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a class="btn cl-nav-cta" href="{{ content('nav', 'destination_11') }}">
                        {{ content('nav', 'link_label_12') }}
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>
