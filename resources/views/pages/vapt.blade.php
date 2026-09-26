@extends('layouts.portfolio')

@section('title', content('legacy_pages_vapt', 'title'))

@section('content')


@include('partials.page-hero', [
    'eyebrow' => content('legacy_pages_vapt', 'eyebrow'),
    'heading' => content('legacy_pages_vapt', 'heading'),
    'subheading' => content('legacy_pages_vapt', 'subheading'),
    'badges' => ['Black Box', 'Grey Box', 'White Box', 'Re-testing'],
    'secondaryCta' => ['label' => content('legacy_pages_vapt', 'label'), 'url' => content('legacy_pages_vapt', 'url')],
    'heroIcon' => content('legacy_pages_vapt', 'hero_icon'),
    'heroCaption' => content('legacy_pages_vapt', 'hero_caption'),
])


@include('partials.clients')


<section class="page-section bg-navy-soft text-white" id="posture">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('legacy_pages_vapt', 'paragraph') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-white mb-2">{{ content('legacy_pages_vapt', 'heading_2') }}</h2>
        <p class="text-center text-white-50 lead-narrow mb-5">
            {{ content('legacy_pages_vapt', 'paragraph_2') }}
        </p>
        <div class="row g-4">
            @foreach (content_items('legacy_pages_vapt_p_items') as $p)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-step">
                        <i class="fas {{ $p[0] }} text-teal mb-2" style="font-size:1.6rem;"></i>
                        <h5>{!! $p[1] !!}</h5>
                        <p class="mb-0 small">{{ $p[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="page-section bg-light" id="calculator">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <p class="section-eyebrow mb-2">{{ content('legacy_pages_vapt', 'paragraph_3') }}</p>
                <h2 class="fw-bold text-secondary mb-3">{{ content('legacy_pages_vapt', 'heading_3') }}</h2>
                <p class="text-muted">
                    {{ content('legacy_pages_vapt', 'paragraph_4') }}
                </p>
            </div>
            <div class="col-lg-7">
                <div class="cl-calc">
                    <h5 class="fw-bold mb-3">{{ content('legacy_pages_vapt', 'h5_text') }}</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">{{ content('legacy_pages_vapt', 'label_text') }}</label>
                            <select class="form-select"><option>{{ content('legacy_pages_vapt', 'option_text') }}</option><option>{{ content('legacy_pages_vapt', 'option_text_2') }}</option><option>{{ content('legacy_pages_vapt', 'option_text_3') }}</option><option>{{ content('legacy_pages_vapt', 'option_text_4') }}</option><option>{{ content('legacy_pages_vapt', 'option_text_5') }}</option></select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">{{ content('legacy_pages_vapt', 'label_text_2') }}</label>
                            <select class="form-select"><option>{{ content('legacy_pages_vapt', 'option_text_6') }}</option><option>{{ content('legacy_pages_vapt', 'option_text_7') }}</option><option>{{ content('legacy_pages_vapt', 'option_text_8') }}</option></select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">{{ content('legacy_pages_vapt', 'label_text_3') }}</label>
                            <input class="form-control" type="number" placeholder="{{ content('legacy_pages_vapt', 'input_placeholder') }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">{{ content('legacy_pages_vapt', 'label_text_4') }}</label>
                            <input class="form-control" type="email" placeholder="{{ content('legacy_pages_vapt', 'input_placeholder_2') }}">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary text-white fw-bold w-100" type="button">{{ content('legacy_pages_vapt', 'button_label') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="page-section" id="matrix">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('legacy_pages_vapt', 'paragraph_5') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('legacy_pages_vapt', 'heading_4') }}</h2>
        <div class="table-responsive">
            <table class="table table-bordered align-middle text-center cl-compare">
                <thead>
                    <tr><th class="text-start">{{ content('legacy_pages_vapt', 'th_text') }}</th><th>{{ content('legacy_pages_vapt', 'th_text_2') }}</th><th>{{ content('legacy_pages_vapt', 'th_text_3') }}</th><th>{{ content('legacy_pages_vapt', 'th_text_4') }}</th></tr>
                </thead>
                <tbody>
                    @foreach (content_items('legacy_pages_vapt_row_items') as $row)
                        <tr>
                            <td class="text-start fw-semibold">{{ $row[0] }}</td>
                            @for ($i = 1; $i <= 3; $i++)
                                <td>@if ($row[$i])<i class="{{ content('legacy_pages_vapt', 'icon') }}"></i>@else<i class="{{ content('legacy_pages_vapt', 'icon_2') }}"></i>@endif</td>
                            @endfor
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>


<section class="page-section bg-light" id="box-types">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('legacy_pages_vapt', 'paragraph_6') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('legacy_pages_vapt', 'heading_5') }}</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="cl-box cl-box-black">
                    <div class="cl-box-cube"><i class="{{ content('legacy_pages_vapt', 'icon_3') }}"></i></div>
                    <h4 class="fw-bold">{{ content('legacy_pages_vapt', 'h4_text') }}</h4>
                    <p class="small"><strong>{{ content('legacy_pages_vapt', 'label_2') }}</strong> {{ content('legacy_pages_vapt', 'paragraph_7') }}</p>
                    <p class="small mb-0"><strong>{{ content('legacy_pages_vapt', 'label_3') }}</strong> {{ content('legacy_pages_vapt', 'paragraph_8') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cl-box cl-box-gray">
                    <div class="cl-box-cube"><i class="{{ content('legacy_pages_vapt', 'icon_4') }}"></i></div>
                    <h4 class="fw-bold">{{ content('legacy_pages_vapt', 'h4_text_2') }}</h4>
                    <p class="small"><strong>{{ content('legacy_pages_vapt', 'label_4') }}</strong> {{ content('legacy_pages_vapt', 'paragraph_9') }}</p>
                    <p class="small mb-0"><strong>{{ content('legacy_pages_vapt', 'label_5') }}</strong> {{ content('legacy_pages_vapt', 'paragraph_10') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cl-box cl-box-white">
                    <div class="cl-box-cube"><i class="{{ content('legacy_pages_vapt', 'icon_5') }}"></i></div>
                    <h4 class="fw-bold">{{ content('legacy_pages_vapt', 'h4_text_3') }}</h4>
                    <p class="small"><strong>{{ content('legacy_pages_vapt', 'label_6') }}</strong> {{ content('legacy_pages_vapt', 'paragraph_11') }}</p>
                    <p class="small mb-0"><strong>{{ content('legacy_pages_vapt', 'label_7') }}</strong> {{ content('legacy_pages_vapt', 'paragraph_12') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="page-section" id="benefits">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('legacy_pages_vapt', 'paragraph_13') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('legacy_pages_vapt', 'heading_6') }}</h2>
        <div class="row g-4">
            @foreach (content_items('legacy_pages_vapt_b_items') as $b)
                <div class="col-md-6 col-lg-4">
                    <div class="cl-benefit">
                        <i class="fas {{ $b[0] }} mb-3"></i>
                        <h5 class="h6 fw-bold">{{ $b[1] }}</h5>
                        <p class="text-muted small mb-0">{{ $b[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="page-section bg-light" id="success">
    <div class="container">
        <div class="cl-case-card">
            <div class="cl-case-head">
                <span class="badge bg-primary mb-2">{{ content('legacy_pages_vapt', 'label_8') }}</span>
                <h3 class="mb-0">{{ content('legacy_pages_vapt', 'heading_7') }}</h3>
            </div>
            <div class="cl-case-body">
                <p class="text-muted">
                    {{ content('legacy_pages_vapt', 'paragraph_14') }}
                </p>
                <div class="row g-4 mt-1">
                    @foreach (content_items('legacy_pages_vapt_links') as $contentRow)
<div class="col-md-6"><div class="cl-stat-num">{{ $contentRow['div_text'] }}</div><div class="cl-stat-label">{{ $contentRow['div_text_2'] }}</div></div>
@endforeach
                </div>
            </div>
        </div>
    </div>
</section>


@include('partials.reviews')


@include('partials.talk-to-expert', ['title' => content('legacy_pages_vapt', 'title_2'), 'text' => content('legacy_pages_vapt', 'text')])

@endsection
