<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @php($managedPage = \App\Models\Page::forCurrentRequest())
    <title>@if($managedPage?->seo_title){{ $managedPage->seo_title }}@else @yield('title', content('site_public', 'default_title'))@endif</title>

<meta name="description" content="{{ $managedPage?->seo_description ?: $__env->yieldContent('meta_description', content('site_public', 'default_meta_description')) }}">
    <link rel="icon" type="image/png" href="{{ asset(content('site_public', 'link_media')) }}">

    @include('partials.portfolio-fonts')

    
    @include('partials.portfolio-assets')

    @stack('styles')
    

</head>

<body id="page-top">

    @include('frontend.public.partials.nav')

    <main>
        {!! app(\App\Content\PageComposition::class)->render($__env->yieldContent('content')) !!}
    </main>

    @include('frontend.public.partials.footer')

    @include('partials.portfolio-events')


    @stack('scripts')
</body>
</html>
