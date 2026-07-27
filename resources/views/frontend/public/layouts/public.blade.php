<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('meta_description', 'Cyberlog — offensive security, managed SOC, compliance, threat intelligence and vCISO for enterprises, government, financial institutions and critical infrastructure.')">
    <title>@yield('title', 'Cyberlog — Cyber Defense')</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">
    <script src="https://use.fontawesome.com/releases/v6.5.2/js/all.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@500;600;700&family=IBM+Plex+Mono:wght@400;500;600&family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Bootstrap (Freelancer base) + Cyberlog "Threat Console" design system --}}
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cyberlog.css') }}" rel="stylesheet">

    @stack('styles')
    
    <style>
        @media (max-width: 991.98px) {
    #mainNav {
        position: relative;
        z-index: 2;
        overflow: visible !important;
    }

    #mainNav .navbar-collapse {
        overflow: visible !important;
    }

    #mainNav .navbar-nav .dropdown-menu.show {
        display: block !important;
        position: static !important;
        z-index: 9999 !important;
        float: none !important;
        width: 100% !important;
        margin-top: 0 !important;
        padding-left: 1rem;
        box-shadow: none;
        border: none;
    }
    #mainNav .dropdown-item {
        font-size: 10px;
        padding: 6px;
    }
}
    </style>
</head>

<body id="page-top">

    @include('frontend.public.partials.nav')

    <main>
        @yield('content')
    </main>

    @include('frontend.public.partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/cyberlog.js') }}"></script>
    <script>
window.addEventListener('load', function () {
    setTimeout(function () {

        // ── Patch Bootstrap Dropdown prototype to disable hide on mobile ──
        const DropdownProto = bootstrap.Dropdown.prototype;
        const originalHide = DropdownProto.hide;
        const originalToggle = DropdownProto.toggle;

        DropdownProto.hide = function () {
            if (window.innerWidth < 992) return; // block on mobile
            return originalHide.apply(this, arguments);
        };

        DropdownProto.toggle = function () {
            if (window.innerWidth < 992) return; // block on mobile
            return originalToggle.apply(this, arguments);
        };

        // ── Now attach your own fresh listeners ──
        document.querySelectorAll('.navbar-nav .dropdown-toggle').forEach(function (toggle) {
            toggle.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopImmediatePropagation();

                const parent = this.closest('.dropdown');
                const menu   = parent.querySelector('.dropdown-menu');
                const isOpen = menu.classList.contains('show');

                document.querySelectorAll('.navbar-nav .dropdown-menu.show').forEach(function (m) {
                    if (m !== menu) {
                        m.classList.remove('show');
                        m.closest('.dropdown').querySelector('.dropdown-toggle')
                         .setAttribute('aria-expanded', 'false');
                    }
                });

                menu.classList.toggle('show', !isOpen);
                this.setAttribute('aria-expanded', String(!isOpen));
            });
        });

        // Let menu item links fire normally
        document.querySelectorAll('.navbar-nav .dropdown-menu a').forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.stopImmediatePropagation();
            });
        });

        // Outside click closes dropdowns
        document.addEventListener('click', function (e) {
            if (!e.target.closest('.navbar-nav')) {
                document.querySelectorAll('.navbar-nav .dropdown-menu.show').forEach(function (m) {
                    m.classList.remove('show');
                    m.closest('.dropdown').querySelector('.dropdown-toggle')
                     .setAttribute('aria-expanded', 'false');
                });
            }
        });

    }, 300);
});
// Block only synthetic (non-trusted) clicks on the toggler
document.querySelector('.navbar-toggler').addEventListener('click', function (e) {
    if (!e.isTrusted) {
        e.preventDefault();
        e.stopImmediatePropagation();
        console.log('Blocked synthetic toggler click');
    }
}, true);
    </script>

    @stack('scripts')
</body>
</html>
