@extends('layouts.portfolio')

@section('title', content('legacy_portfolio_index', 'title'))

@section('content')

<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

        <h1 class="masthead-heading text-uppercase mb-4">
            {{ content('legacy_portfolio_index', 'heading') }}
        </h1>

        <div class="d-flex flex-wrap justify-content-center gap-3 mt-3">
            @foreach (content_items('legacy_portfolio_index_links_3') as $contentRow)
<span class="badge bg-light text-dark p-3">{{ $contentRow['label'] }}</span>
@endforeach
        </div>
        

        <p class="mt-5 fs-4">
            {{ content('legacy_portfolio_index', 'paragraph') }}
            <strong>{{ content('legacy_portfolio_index', 'label_5') }}</strong> {{ content('legacy_portfolio_index', 'paragraph_2') }}
        </p>

    </div>
</header>

<section class="page-section" id="services">
    <div class="container">

        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            {{ content('legacy_portfolio_index', 'heading_2') }}
        </h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="{{ content('legacy_portfolio_index', 'icon') }}"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row g-4">
                @foreach (content_items('legacy_portfolio_index_links_2') as $contentRow)
<div class="col-md-4">
                    <div class="card h-100 shadow-sm text-center p-4">
                        <h4>{{ $contentRow['h4_text'] }}</h4>
                        <p>{{ $contentRow['paragraph'] }}</p>
                    </div>
                </div>
@endforeach

                <div class="col-md-4" id="vciso">
                    <div class="card h-100 shadow-sm text-center p-4">
                        <h4>{{ content('legacy_portfolio_index', 'h4_text_6') }}</h4>
                        <p>{{ content('legacy_portfolio_index', 'paragraph_8') }}</p>
                    </div>
                </div>
        </div>

    </div>
</section>

<section class="page-section bg-primary text-white mb-0" id="clients">
    <div class="container">

        <h2 class="page-section-heading text-center text-uppercase text-white">
            {{ content('legacy_portfolio_index', 'heading_3') }}
        </h2>

        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="{{ content('legacy_portfolio_index', 'icon_2') }}"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row text-center g-3">
            @foreach (content_items('legacy_portfolio_index_links') as $contentRow)
<div class="col-md-3">{{ $contentRow['div_text'] }}</div>
@endforeach
        </div>

    </div>
</section>

<section class="page-section" id="case-studies">
    <div class="container">

        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            {{ content('legacy_portfolio_index', 'heading_4') }}
        </h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="{{ content('legacy_portfolio_index', 'icon_3') }}"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row g-4">
            @foreach (content_items('legacy_portfolio_index_cards') as $contentRow)
<div class="col-md-6">
                <div class="card shadow-sm h-100 p-4">
                    <h4>{{ $contentRow['h4_text'] }}</h4>
                    <p>
                        {{ $contentRow['paragraph'] }}
                    </p>
                    <strong>{{ $contentRow['label'] }}</strong><br>
                    <strong>{{ $contentRow['label_2'] }}</strong>
                </div>
            </div>
@endforeach
        </div>

    </div>
</section>

<section class="page-section bg-primary text-white" id="about">
    <div class="container">

        <h2 class="page-section-heading text-center text-uppercase text-white">
            {{ content('legacy_portfolio_index', 'heading_5') }}
        </h2>

        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="{{ content('legacy_portfolio_index', 'icon_4') }}"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <p class="lead text-center">
            {{ content('legacy_portfolio_index', 'paragraph_13') }}
        </p>

    </div>
</section>

<section class="page-section" id="contact">
    <div class="container">

        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            {{ content('legacy_portfolio_index', 'heading_6') }}
        </h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="{{ content('legacy_portfolio_index', 'icon_5') }}"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="{{ content('legacy_portfolio_index', 'input_placeholder') }}">
                        <label for="name">{{ content('legacy_portfolio_index', 'label_text') }}</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" placeholder="{{ content('legacy_portfolio_index', 'input_placeholder_2') }}">
                        <label for="email">{{ content('legacy_portfolio_index', 'label_text_2') }}</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" placeholder="{{ content('legacy_portfolio_index', 'textarea_placeholder') }}" style="height: 10rem"></textarea>
                        <label for="message">{{ content('legacy_portfolio_index', 'label_text_3') }}</label>
                    </div>

                    <button class="btn btn-primary btn-xl" type="submit">
                        {{ content('legacy_portfolio_index', 'button_label') }}
                    </button>
                </form>
            </div>
        </div>

    </div>
</section>

@endsection
