
@php $isCentered = ! empty($centered); @endphp
@php $noCenteredHeading = ! empty($noCenteredHeading); @endphp
@php $hasVideoAbove = ! empty($videoAbove) && ! empty($heroVideo); @endphp
<style>
    .cl-nav-cta.btn-xl {
    padding: 1rem 1.75rem;
    font-size: 1.25rem;
}
</style>
<header class="cl-hero text-white {{ $hasVideoAbove ? 'cl-hero--video-top' : 'py-5' }}" id="hero">
    @if ($hasVideoAbove)
        <div class="container d-flex">
            <div class="cl-hero-film">
                @include('partials.hero-video')
            </div>
        </div>
    @endif
    <div class="container {{ $hasVideoAbove ? 'cl-hero-copy-below' : 'py-5' }}">
        <div class="row align-items-center g-5 {{ $isCentered ? 'justify-content-center text-center' : '' }}">
            <div class="{{ $hasVideoAbove ? 'col-12' : ($isCentered ? 'col-lg-9' : 'col-lg-7') }}">
                @isset($eyebrow)
                    <p class="section-eyebrow mb-3 {{ $isCentered ? 'text-center' : '' }}">{{ $eyebrow }}</p>
                @endisset
                <h1 class="cl-hero-heading {{$noCenteredHeading ? 'text-start' : ''}} mb-3">{!! $heading !!}</h1>
                <p class="lead text-white-50 mb-4">{{ $subheading }}</p>

                @isset($badges)
                    <div class="d-flex flex-wrap gap-2 mb-4 {{ $isCentered ? 'justify-content-center' : '' }}">
                        @foreach ($badges as $b)
                            <span class="cl-float-chip"><i class="{{ content('shared_page_hero', 'icon') }}"></i>{{ $b }}</span>
                        @endforeach
                    </div>
                @endisset

                <div class="d-flex flex-wrap gap-3 {{ $isCentered ? 'justify-content-center' : '' }}">
                    <a class="btn btn-xl text-white fw-bold btn cl-nav-cta"
                       href="{{ $primaryCta['url'] ?? route('contact') }}">
                        {{ $primaryCta['label'] ?? content('shared_page_hero', 'default_text') }}
                    </a>
                    @isset($secondaryCta)
                        <a class="btn btn-outline-light btn-xl" href="{{ $secondaryCta['url'] }}">
                            {{ $secondaryCta['label'] }}
                        </a>
                    @endisset
                </div>
            </div>

            @unless($isCentered || $hasVideoAbove)
                <div class="col-lg-5 {{ empty($heroVideo) ? 'd-none d-lg-block' : '' }}">
                    @if (! empty($heroVideo))
                        <div class="ratio ratio-16x9 rounded overflow-hidden bg-dark">
                            @include('partials.hero-video')
                        </div>
                    @else
                    <div class="cl-step text-center py-5">
                        <i class="{{ $heroIcon ?? content('shared_page_hero', 'default_hero_icon') }} text-teal" style="font-size:6rem;"></i>
                        <p class="mt-3 mb-0 text-white-50">{{ $heroCaption ?? content('shared_page_hero', 'default_text_2') }}</p>
                    </div>
                    @endif
                </div>
            @endunless
        </div>
    </div>
</header>
