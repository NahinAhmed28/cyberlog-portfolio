{{-- Generic hero for inner/service pages.
     Vars: $eyebrow, $heading, $subheading, $badges (array, optional),
           $primaryCta ['label','url'] (optional), $secondaryCta (optional),
           $centered (bool, optional — single centered column, no side box),
           $heroIcon, $heroCaption (only used when not centered) --}}
@php $isCentered = ! empty($centered); @endphp
@php $noCenteredHeading = ! empty($noCenteredHeading); @endphp
<style>
    .cl-nav-cta.btn-xl {
    padding: 1rem 1.75rem;
    font-size: 1.25rem;
}
</style>
<header class="cl-hero text-white py-5" id="hero">
    <div class="container py-5">
        <div class="row align-items-center g-5 {{ $isCentered ? 'justify-content-center text-center' : '' }}">
            <div class="{{ $isCentered ? 'col-lg-9' : 'col-lg-7' }}">
                @isset($eyebrow)
                    <p class="section-eyebrow mb-3">{{ $eyebrow }}</p>
                @endisset
                <h1 class="cl-hero-heading {{$noCenteredHeading ? 'text-start' : ''}} mb-3">{!! $heading !!}</h1>
                <p class="lead text-white-50 mb-4">{{ $subheading }}</p>

                @isset($badges)
                    <div class="d-flex flex-wrap gap-2 mb-4 {{ $isCentered ? 'justify-content-center' : '' }}">
                        @foreach ($badges as $b)
                            <span class="cl-float-chip"><i class="fas fa-shield-halved"></i>{{ $b }}</span>
                        @endforeach
                    </div>
                @endisset

                <div class="d-flex flex-wrap gap-3 {{ $isCentered ? 'justify-content-center' : '' }}">
                    <a class="btn btn-xl text-white fw-bold btn cl-nav-cta"
                       href="{{ $primaryCta['url'] ?? route('contact') }}">
                        {{ $primaryCta['label'] ?? 'Talk to an Expert' }}
                    </a>
                    @isset($secondaryCta)
                        <a class="btn btn-outline-light btn-xl" href="{{ $secondaryCta['url'] }}">
                            {{ $secondaryCta['label'] }}
                        </a>
                    @endisset
                </div>
            </div>

            @unless($isCentered)
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="cl-step text-center py-5">
                        <i class="{{ $heroIcon ?? 'fas fa-shield-halved' }} text-teal" style="font-size:6rem;"></i>
                        <p class="mt-3 mb-0 text-white-50">{{ $heroCaption ?? 'Enterprise-grade cyber defense' }}</p>
                    </div>
                </div>
            @endunless
        </div>
    </div>
</header>
