<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php($managedPage = \App\Models\Page::forCurrentRequest())
    <title>@if($managedPage?->seo_title){{ $managedPage->seo_title }}@else @yield('title', content('layout_portfolio', 'default_title'))@endif</title>

<meta name="description" content="{{ $managedPage?->seo_description }}">
    <link rel="icon" type="image/png" href="{{ asset(content('layout_portfolio', 'link_media')) }}">

    @include('partials.portfolio-fonts')

    @include('partials.portfolio-assets')

    @stack('styles')
</head>

<body id="page-top">

    @include('frontend.public.partials.nav')

    {!! app(\App\Content\PageComposition::class)->render($__env->yieldContent('content')) !!}

    @include('frontend.public.partials.footer')

    @include('partials.portfolio-events')

    @stack('scripts')
</body>
</html>
