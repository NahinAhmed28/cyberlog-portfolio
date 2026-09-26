@php
    $u = fn ($pub, $legacy) => Route::has($pub) ? route($pub) : (Route::has($legacy) ? route($legacy) : '#');

    $serviceLinks = content_items('shared_navbar_service_links');

    $serviceRouteNames = content_items('shared_navbar_service_route_names');
@endphp

<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ content('shared_navbar', 'link_url') }}">
            <i class="{{ content('shared_navbar', 'icon') }}"></i>{{ content('shared_navbar', 'link_label') }}<span class="text-primary">{{ content('shared_navbar', 'label') }}</span>
        </a>

        <button
            class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive"
        >
            {{ content('shared_navbar', 'button_label') }}
            <i class="{{ content('shared_navbar', 'icon_2') }}"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-2 px-0 px-lg-3 rounded {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{ content('shared_navbar', 'link_url_2') }}">
                        {{ content('shared_navbar', 'link_label_2') }}
                    </a>
                </li>

                <li class="nav-item dropdown mx-0 mx-lg-1">
                    <a class="nav-link dropdown-toggle py-2 px-0 px-lg-3 rounded {{ request()->routeIs(...$serviceRouteNames) ? 'active' : '' }}"
                       href="{{ content('shared_navbar', 'a_href') }}"
                       id="legacyServicesDropdown"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        {{ content('shared_navbar', 'link_label_3') }}
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
                       href="{{ content('shared_navbar', 'destination') }}">
                        {{ content('shared_navbar', 'link_label_4') }}
                    </a>
                </li>

                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-2 px-0 px-lg-3 rounded {{ request()->routeIs('public.about', 'about') ? 'active' : '' }}"
                       href="{{ content('shared_navbar', 'destination_2') }}">
                        {{ content('shared_navbar', 'link_label_5') }}
                    </a>
                </li>

                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    @if (request()->routeIs('public.vciso', 'vciso'))
                        <a class="btn btn-primary btn-talk text-white fw-bold"
                           href="{{ Route::has('client.login') ? route('client.login') : url('/client/login') }}">
                            <i class="{{ content('shared_navbar', 'icon_3') }}"></i>{{ content('shared_navbar', 'link_label_6') }}
                        </a>
                    @else
                        <a class="btn btn-primary btn-talk text-white fw-bold"
                           href="{{ content('shared_navbar', 'destination_3') }}">
                            {{ content('shared_navbar', 'link_label_7') }}
                        </a>
                    @endif
                </li>

            </ul>
        </div>
    </div>
</nav>
