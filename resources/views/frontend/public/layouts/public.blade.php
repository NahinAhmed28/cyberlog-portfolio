<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @php($managedPage = \App\Models\Page::where('path', request()->getPathInfo())->first())
    <title>@if($managedPage?->seo_title){{ $managedPage->seo_title }}@else @yield('title', content('site_public', 'default_title'))@endif</title>

<meta name="description" content="{{ $managedPage?->seo_description ?: $__env->yieldContent('meta_description', content('site_public', 'default_meta_description')) }}">
    <link rel="icon" type="image/png" href="{{ asset(content('site_public', 'link_media')) }}">
    <script src="https://use.fontawesome.com/releases/v6.5.2/js/all.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@500;600;700&family=IBM+Plex+Mono:wght@400;500;600&family=IBM+Plex+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cyberlog.css') }}" rel="stylesheet">

    @stack('styles')
    

</head>

<body id="page-top">

    @include('frontend.public.partials.nav')

    <main>
        {!! app(\App\Content\PageComposition::class)->render($__env->yieldContent('content')) !!}
    </main>

    @include('frontend.public.partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script>window.cyberlogContent = {{ Illuminate\Support\Js::from(['events' => content_items('threat_feed_events'), 'socEvents' => content_items('soc_live_events')]) }};</script>
    <script src="{{ asset('js/cyberlog.js') }}"></script>


    @stack('scripts')
</body>
</html>
