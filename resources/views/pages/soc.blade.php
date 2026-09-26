@extends('layouts.portfolio')

@section('title', content('legacy_pages_soc', 'title'))

@section('content')


@include('partials.page-hero', [
    'eyebrow' => content('legacy_pages_soc', 'eyebrow'),
    'heading' => content('legacy_pages_soc', 'heading'),
    'subheading' => content('legacy_pages_soc', 'subheading'),
    'badges' => ['Threat Detection', 'Incident Response', 'SIEM/SOAR', '24/7 Monitoring'],
    'primaryCta' => ['label' => content('legacy_pages_soc', 'label'), 'url' => route('contact')],
    'secondaryCta' => ['label' => content('legacy_pages_soc', 'label_2'), 'url' => content('legacy_pages_soc', 'url')],
    'heroIcon' => content('legacy_pages_soc', 'hero_icon'),
    'heroCaption' => content('legacy_pages_soc', 'hero_caption'),
])


@include('partials.clients')


<section class="page-section" id="comparison">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('legacy_pages_soc', 'paragraph') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-2">{{ content('legacy_pages_soc', 'heading_2') }}</h2>
        <p class="text-center text-muted lead-narrow mb-5">
            {{ content('legacy_pages_soc', 'paragraph_2') }}
        </p>

        <div class="table-responsive">
            <table class="table table-bordered align-middle cl-compare">
                <thead>
                    <tr>
                        <th>{{ content('legacy_pages_soc', 'th_text') }}</th>
                        <th>{{ content('legacy_pages_soc', 'th_text_2') }}</th>
                        <th>{{ content('legacy_pages_soc', 'th_text_3') }}</th>
                        <th>{{ content('legacy_pages_soc', 'th_text_4') }}</th>
                        <th>{{ content('legacy_pages_soc', 'th_text_5') }}</th>
                        <th>{{ content('legacy_pages_soc', 'th_text_6') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (content_items('legacy_pages_soc_tr_items') as $contentRow)
<tr>
                        <td>{{ $contentRow['td_text'] }}</td><td>{{ $contentRow['td_text_2'] }}</td><td>{{ $contentRow['td_text_3'] }}</td><td>{{ $contentRow['td_text_4'] }}</td><td>{{ $contentRow['td_text_5'] }}</td><td>{{ $contentRow['td_text_6'] }}</td>
                    </tr>
@endforeach
                    <tr class="cl-row-highlight">
                        <td>{{ content('legacy_pages_soc', 'td_text_19') }}</td><td>{{ content('legacy_pages_soc', 'td_text_20') }}</td><td>{{ content('legacy_pages_soc', 'td_text_21') }}</td><td>{{ content('legacy_pages_soc', 'td_text_22') }}</td><td>{{ content('legacy_pages_soc', 'td_text_23') }}</td><td>{{ content('legacy_pages_soc', 'td_text_24') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


<section class="page-section bg-light" id="calculator">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <p class="section-eyebrow mb-2">{{ content('legacy_pages_soc', 'paragraph_3') }}</p>
                <h2 class="fw-bold text-secondary mb-3">{{ content('legacy_pages_soc', 'heading_3') }}</h2>
                <p class="text-muted">
                    {{ content('legacy_pages_soc', 'paragraph_4') }}
                </p>
            </div>
            <div class="col-lg-7">
                <div class="cl-calc">
                    <h5 class="fw-bold mb-3">{{ content('legacy_pages_soc', 'h5_text') }}</h5>
                    <div class="row g-3">
                        @foreach (content_items('legacy_pages_soc_cards') as $contentRow)
<div class="col-md-6">
                            <label class="form-label small fw-semibold">{{ $contentRow['label_text'] }}</label>
                            <select class="form-select"><option>{{ $contentRow['option_text'] }}</option><option>{{ $contentRow['option_text_2'] }}</option><option>{{ $contentRow['option_text_3'] }}</option><option>{{ $contentRow['option_text_4'] }}</option></select>
                        </div>
@endforeach
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">{{ content('legacy_pages_soc', 'label_text_3') }}</label>
                            <input class="form-control" type="text" placeholder="{{ content('legacy_pages_soc', 'input_placeholder') }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">{{ content('legacy_pages_soc', 'label_text_4') }}</label>
                            <input class="form-control" type="email" placeholder="{{ content('legacy_pages_soc', 'input_placeholder_2') }}">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary text-white fw-bold w-100" type="button">{{ content('legacy_pages_soc', 'button_label') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="page-section" id="matrix">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('legacy_pages_soc', 'paragraph_5') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('legacy_pages_soc', 'heading_4') }}</h2>
        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center cl-compare">
                <thead>
                    <tr><th class="text-start">{{ content('legacy_pages_soc', 'th_text_7') }}</th><th>{{ content('legacy_pages_soc', 'th_text_8') }}</th><th>{{ content('legacy_pages_soc', 'th_text_9') }}</th><th>{{ content('legacy_pages_soc', 'th_text_10') }}</th></tr>
                </thead>
                <tbody>
                    @foreach (content_items('legacy_pages_soc_row_items') as $row)
                        <tr>
                            <td class="text-start fw-semibold">{!! $row[0] !!}</td>
                            @for ($i = 1; $i <= 3; $i++)
                                <td>
                                    @if ($row[$i])
                                        <i class="{{ content('legacy_pages_soc', 'icon') }}"></i>
                                    @else
                                        <i class="{{ content('legacy_pages_soc', 'icon_2') }}"></i>
                                    @endif
                                </td>
                            @endfor
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>


<section class="page-section bg-light" id="benefits">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('legacy_pages_soc', 'paragraph_6') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('legacy_pages_soc', 'heading_5') }}</h2>
        <div class="row g-4">
            @foreach (content_items('legacy_pages_soc_b_items') as $b)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-benefit">
                        <i class="fas {{ $b[0] }} mb-3"></i>
                        <h5 class="h6 fw-bold">{!! $b[1] !!}</h5>
                        <p class="text-muted small mb-0">{{ $b[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="page-section" id="sensor">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('legacy_pages_soc', 'paragraph_7') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('legacy_pages_soc', 'heading_6') }}</h2>
        <div class="row g-4">
            @foreach (content_items('legacy_pages_soc_s_items') as $s)
                <div class="col-md-4">
                    <div class="cl-solution-card h-100">
                        <div class="cl-solution-icon"><i class="fas {{ $s[0] }}"></i></div>
                        <h5 class="fw-bold">{{ $s[1] }}</h5>
                        <p class="text-muted mb-0">{{ $s[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@include('partials.talk-to-expert', ['title' => content('legacy_pages_soc', 'title_2'), 'text' => content('legacy_pages_soc', 'text')])


<section class="page-section bg-light" id="pricing">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('legacy_pages_soc', 'paragraph_8') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('legacy_pages_soc', 'heading_7') }}</h2>
        <div class="row g-4 justify-content-center">
            @foreach (content_items('legacy_pages_soc_plan_items') as $plan)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-price-card {{ $plan[3] ? 'featured' : '' }} h-100 d-flex flex-column">
                        @if ($plan[3])<span class="badge bg-primary mb-2">{{ content('legacy_pages_soc', 'label_3') }}</span>@endif
                        <h4 class="fw-bold">{{ $plan[0] }}</h4>
                        <p class="text-muted">{{ $plan[1] }}</p>
                        <div class="cl-stat-num mb-3">{{ content('legacy_pages_soc', 'div_text') }}</div>
                        <ul class="list-unstyled text-start mb-4">
                            @foreach ($plan[2] as $feat)
                                <li class="mb-2"><i class="{{ content('legacy_pages_soc', 'icon_3') }}"></i>{!! $feat !!}</li>
                            @endforeach
                        </ul>
                        <a class="btn {{ $plan[3] ? 'btn-primary text-white' : 'btn-outline-secondary' }} mt-auto fw-bold" href="{{ content('legacy_pages_soc', 'link_url') }}">{{ content('legacy_pages_soc', 'link_label') }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@include('partials.reviews')

@endsection
