@if (is_file(public_path('build/manifest.json')) || is_file(public_path('hot')))
    @vite(['resources/css/portfolio.css', 'resources/js/portfolio.js'])
@else
    {{-- Keep Git-only/cPanel installations usable before the production build is uploaded. --}}
    <link href="{{ asset('vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cyberlog.css') }}" rel="stylesheet">
    <script src="{{ asset('vendor/bootstrap/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    <script src="{{ asset('js/cyberlog.js') }}" defer></script>
@endif
