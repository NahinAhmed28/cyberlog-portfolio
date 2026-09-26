@extends('layouts.portfolio')

@section('title', content('legacy_pages_vciso', 'title'))

@section('content')


<header class="cl-hero text-white" id="page-top">
    <div class="container py-5">
        <div class="row align-items-center g-5 py-4">
            <div class="col-lg-6">
                <p class="section-eyebrow mb-3">{{ content('legacy_pages_vciso', 'paragraph') }}</p>
                <h1 class="cl-hero-heading mb-3">{{ content('legacy_pages_vciso', 'heading') }} <span class="text-teal">{{ content('legacy_pages_vciso', 'label') }}</span></h1>
                <p class="lead text-white-50 mb-4">
                    {{ content('legacy_pages_vciso', 'paragraph_2') }}
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a class="btn btn-primary btn-xl text-white fw-bold" href="{{ content('legacy_pages_vciso', 'link_url') }}">{{ content('legacy_pages_vciso', 'link_label') }}</a>
                    <a class="btn btn-outline-light btn-xl" href="{{ content('legacy_pages_vciso', 'a_href') }}">{{ content('legacy_pages_vciso', 'link_label_2') }}</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cl-radial">
                    @foreach (content_items('legacy_pages_vciso_cap_items') as $cap)
                        <div class="cl-capability"><i class="fas {{ $cap[0] }}"></i><span class="small">{{ $cap[1] }}</span></div>
                    @endforeach

                    <div class="cl-radial-hub">
                        <div class="d-inline-grid" style="place-items:center;width:96px;height:96px;border-radius:50%;background:var(--blue-dim);border:2px solid var(--blue-bright);">
                            <i class="{{ content('legacy_pages_vciso', 'icon') }}" style="font-size:2.4rem;"></i>
                        </div>
                        <div class="fw-bold mt-2">{{ content('legacy_pages_vciso', 'div_text') }}</div>
                    </div>

                    @foreach (content_items('legacy_pages_vciso_cap_items_2') as $cap)
                        <div class="cl-capability"><i class="fas {{ $cap[0] }}"></i><span class="small">{!! $cap[1] !!}</span></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</header>


@include('partials.clients')


<section class="page-section" id="capabilities">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('legacy_pages_vciso', 'paragraph_3') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('legacy_pages_vciso', 'heading_2') }}</h2>
        <div class="row g-4">
            @foreach (content_items('legacy_pages_vciso_c_items') as $c)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-benefit h-100">
                        <i class="fas {{ $c[0] }} mb-3"></i>
                        <h5 class="h6 fw-bold">{!! $c[1] !!}</h5>
                        <p class="text-muted small mb-0">{{ $c[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('partials.talk-to-expert', ['title' => content('legacy_pages_vciso', 'title_2'), 'text' => content('legacy_pages_vciso', 'text')])

@endsection
