@extends('layouts.portfolio')

@section('title', content('legacy_pages_home', 'title'))

@section('content')


<header class="cl-hero" id="page-top">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-7 text-center">
                <p class="cl-hero-eyebrow mb-3" data-reveal data-hero>
                    {{ content('legacy_pages_home', 'paragraph') }}<span class="cl-cursor"></span>
                </p>

                <h1 class="cl-hero-heading mb-4" data-reveal data-hero>
                    {{ content('legacy_pages_home', 'heading') }} <span class="accent">{{ content('legacy_pages_home', 'label') }}</span>
                </h1>

                <div class="d-flex flex-wrap gap-2 mb-4" data-reveal data-hero>
                    @foreach (content_items('legacy_pages_home_links') as $contentRow)
<span class="cl-tag"><i class="{{ $contentRow['icon'] }}"></i>{{ $contentRow['label'] }}</span>
@endforeach
                </div>

                <div class="d-flex flex-wrap gap-3 mb-4" data-reveal data-hero>
                    <a class="btn btn-alert btn-xl" href="{{ content('legacy_pages_home', 'link_url') }}">{{ content('legacy_pages_home', 'link_label') }}</a>
                    <a class="btn btn-outline-light btn-xl" href="{{ content('legacy_pages_home', 'link_url_2') }}">{{ content('legacy_pages_home', 'link_label_2') }} <i class="{{ content('legacy_pages_home', 'icon_5') }}"></i></a>
                </div>

                <p class="mono mb-0 text-muted" data-reveal data-hero>
                    {{ content('legacy_pages_home', 'paragraph_2') }}
                    <span class="cl-highlight">{{ content('legacy_pages_home', 'label_6') }}</span> {{ content('legacy_pages_home', 'paragraph_3') }}
                </p>
            </div>

            <div class="col-lg-5" data-reveal data-hero>
                <div class="cl-console">
                    <div class="cl-console-bar">
                        <span class="cl-dot"></span> {{ content('legacy_pages_home', 'div_text') }}
                    </div>

                    <div class="cl-radar">
                        <span class="cl-blip b1"></span>
                        <span class="cl-blip b2"></span>
                        <span class="cl-blip b3"></span>
                    </div>

                    <div class="cl-feed mono" id="cl-feed">
                        
                        <div class="cl-feed-line"><span class="ts">{{ content('legacy_pages_home', 'label_7') }}</span><span class="ok">{{ content('legacy_pages_home', 'label_8') }}</span><span>{{ content('legacy_pages_home', 'label_9') }}</span></div>
                        <div class="cl-feed-line"><span class="ts">{{ content('legacy_pages_home', 'label_10') }}</span><span class="crit">{{ content('legacy_pages_home', 'label_11') }}</span><span>{{ content('legacy_pages_home', 'label_12') }}</span></div>
                    </div>

                    <div class="cl-console-stats">
                        @foreach (content_items('legacy_pages_home_console_stats') as $contentRow)
<div><div class="n" data-count="{{ $contentRow['div_data_count'] }}" data-suffix="{{ $contentRow['div_data_suffix'] }}">{{ $contentRow['div_text'] }}</div><div class="l">{{ $contentRow['div_text_2'] }}</div></div>
@endforeach
                        <div><div class="n" data-count="{{ content('legacy_pages_home', 'div_data_count_3') }}" data-suffix="{{ content('legacy_pages_home', 'div_data_suffix_3') }}" data-decimals="1">{{ content('legacy_pages_home', 'div_text_6') }}</div><div class="l">{{ content('legacy_pages_home', 'div_text_7') }}</div></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>


@include('partials.clients')


<section class="page-section bg-navy-soft text-white" id="how-we-work">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('legacy_pages_home', 'paragraph_4') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-white mb-2">{{ content('legacy_pages_home', 'heading_2') }}</h2>
        <p class="text-center text-white-50 lead-narrow mb-5">
            {{ content('legacy_pages_home', 'paragraph_5') }}
        </p>

        <div class="row g-4">
            @foreach (content_items('legacy_pages_home_step_items') as $step)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-step">
                        <div class="cl-step-no mb-2">{{ $step['no'] }}</div>
                        <i class="fas {{ $step['icon'] }} text-teal mb-2" style="font-size:1.6rem;"></i>
                        <h5>{!! $step['title'] !!}</h5>
                        <p class="mb-0 small">{{ $step['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="page-section" id="solutions">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('legacy_pages_home', 'paragraph_6') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ content('legacy_pages_home', 'heading_3') }}</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="{{ content('legacy_pages_home', 'icon_6') }}"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row g-4">
            @php $catalogue = collect(content_items('services'))->keyBy('route'); @endphp
            @foreach (content_items('legacy_pages_home_sol_items') as $sol)
                @php
                    $svc = $catalogue->get($sol['route']);
                    if ($svc && isset($svc['group']) && $svc['group'] === 'defensive') {
                        $href = route('defensive-security-services');
                    } elseif ($svc && isset($svc['group']) && $svc['group'] === 'offensive') {
                        $href = route('offensive-security-services');
                    } else {
                        $href = route($sol['route']);
                    }
                @endphp
                <div class="col-md-6 col-lg-4">
                    <a class="cl-solution-card" href="{{ $href }}">
                        <div class="cl-solution-icon"><i class="fas {{ $sol['icon'] }}"></i></div>
                        <h4 class="h5">{!! $sol['title'] !!}</h4>
                        <p class="text-muted mb-3">{{ $sol['desc'] }}</p>
                        <span class="text-teal fw-semibold">{{ content('legacy_pages_home', 'label_13') }} <i class="{{ content('legacy_pages_home', 'icon_7') }}"></i></span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="page-section bg-light" id="case-studies">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('legacy_pages_home', 'paragraph_7') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ content('legacy_pages_home', 'heading_4') }}</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="{{ content('legacy_pages_home', 'icon_8') }}"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row g-4">
            @foreach (content_items('legacy_pages_home_case_items') as $case)
                <div class="col-lg-6">
                    <div class="cl-case-card">
                        <div class="cl-case-head">
                            <span class="badge bg-primary mb-2">{{ $case['tag'] }}</span>
                            <h4 class="mb-0">{{ $case['name'] }}</h4>
                        </div>
                        <div class="cl-case-body">
                            <p class="text-muted">{{ $case['desc'] }}</p>
                            <div class="row g-3 mt-1">
                                @foreach ($case['stats'] as $stat)
                                    <div class="col-6">
                                        <div class="cl-stat-num">{{ $stat[0] }}</div>
                                        <div class="cl-stat-label">{{ $stat[1] }}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="page-section" id="about">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <p class="section-eyebrow mb-2">{{ content('legacy_pages_home', 'paragraph_8') }}</p>
                <h2 class="fw-bold text-secondary mb-3">{{ content('legacy_pages_home', 'heading_5') }}</h2>
                <p class="text-muted">
                    {{ content('legacy_pages_home', 'paragraph_9') }}
                </p>
                <p class="text-muted mb-4">
                    {{ content('legacy_pages_home', 'paragraph_10') }}
                </p>
                <a class="btn btn-outline-secondary btn-xl" href="{{ content('legacy_pages_home', 'link_url_3') }}">{{ content('legacy_pages_home', 'link_label_3') }}</a>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    @foreach (content_items('legacy_pages_home_m_items') as $m)
                        <div class="col-6">
                            <div class="cl-benefit text-center">
                                <div class="cl-stat-num">{{ $m[0] }}</div>
                                <div class="cl-stat-label">{!! $m[1] !!}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


@include('partials.talk-to-expert', ['title' => content('legacy_pages_home', 'title_2'), 'text' => content('legacy_pages_home', 'text')])

@endsection
