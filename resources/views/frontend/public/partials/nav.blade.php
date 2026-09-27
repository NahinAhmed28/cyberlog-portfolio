@php
    $menu = \App\Models\NavigationItem::publishedMenu();
@endphp
<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container-fluid px-lg-5 px-md-4 px-3">
        <a class="navbar-brand p-0" href="{{ content('nav', 'destination') }}"><img class="cl-brand-logo" src="{{ asset(content('nav', 'img_media')) }}" alt="{{ content('nav', 'img_alt') }}" width="444" height="159"></a>
        <button class="navbar-toggler bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="{{ content('nav', 'button_label') }}">{{ content('nav', 'button_label') }} <i class="{{ content('nav', 'icon') }}"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto align-items-lg-center">
            @foreach($menu as $item)
                @php
                    $active = request()->getPathInfo() === parse_url($item->url, PHP_URL_PATH) || $item->children->contains(fn($child) => request()->getPathInfo() === parse_url($child->url, PHP_URL_PATH));
                @endphp
                @if($item->type === 'dropdown')
                    <li class="nav-item dropdown mx-0 mx-lg-1">
                        <a class="nav-link dropdown-toggle py-2 px-0 px-lg-3 rounded {{ $active ? 'active' : '' }}" href="#" id="menu-{{ $item->id }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ $item->label }}</a>
                        <ul class="dropdown-menu {{ $item->seed_key === 'services' ? 'cl-services-menu' : '' }}" aria-labelledby="menu-{{ $item->id }}">
                        @foreach($item->children as $child)
                            @if($child->type === 'divider')<li><hr class="dropdown-divider"></li>
                            @else<li><a class="dropdown-item" href="{{ $child->url }}" @if($child->new_tab) target="_blank" rel="noopener noreferrer" @endif>{{ $child->label }}</a></li>@endif
                        @endforeach
                        </ul>
                    </li>
                @else
                    <li class="nav-item {{ $item->type === 'button' ? 'ms-lg-3 mt-2 mt-lg-0' : 'mx-0 mx-lg-1' }}"><a class="{{ $item->type === 'button' ? 'btn cl-nav-cta' : 'nav-link py-2 px-0 px-lg-3 rounded' }} {{ $active ? 'active' : '' }}" href="{{ $item->url }}" @if($item->new_tab) target="_blank" rel="noopener noreferrer" @endif>{{ $item->label }}</a></li>
                @endif
            @endforeach
            </ul>
        </div>
    </div>
</nav>
