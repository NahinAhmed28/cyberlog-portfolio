@extends('layouts.portfolio')

@section('title', content('page_contact', 'title'))

@section('content')


<section class="page-section" id="contact-form">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5">
                <p class="section-eyebrow mb-2">{{ content('page_contact', 'paragraph') }}</p>
                <h2 class="fw-bold text-secondary mb-4">{{ content('page_contact', 'heading') }} <span class="cl-title-accent">{{ content('page_contact', 'label') }}</span></h2>
                <p class="text-muted mb-4">{{ content('page_contact', 'paragraph_2') }}</p>
                <ul class="list-unstyled">
                    <li class="mb-3"><i class="{{ content('page_contact', 'icon') }}"></i>{{ content('page_contact', 'list_text') }}</li>
                    <li class="mb-3"><i class="{{ content('page_contact', 'icon_2') }}"></i><a class="text-decoration-none" href="{{ content('page_contact', 'a_href') }}">{{ content('page_contact', 'link_label') }}</a></li>
                    <li class="mb-3"><i class="{{ content('page_contact', 'icon_3') }}"></i>{{ content('page_contact', 'list_text_2') }}</li>
                </ul>
                <div class="d-flex gap-2">
                    @foreach (content_items('page_contact_cards') as $contentRow)
<a class="btn btn-outline-secondary btn-social" href="{{ $contentRow['a_href'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $contentRow['a_aria_label'] }}"><i class="{{ $contentRow['icon'] }}"></i></a>
@endforeach
                </div>
            </div>
            <div class="col-lg-7">
                <div class="cl-calc">
                    @if(session('contact_status'))<div class="alert alert-success" role="status">{{ session('contact_status') }}</div>@endif
@if($errors->any())<div class="alert alert-danger" role="alert">@foreach($errors->all() as $error)<div>{{ $error }}</div>@endforeach</div>@endif
<form method="post" action="{{ route('contact.store') }}">@csrf
<input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off" aria-hidden="true">
                        <div class="row g-3">
                            <div class="col-md-6"><input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="{{ content('page_contact', 'name_placeholder') }}" aria-label="{{ content('page_contact', 'name_placeholder') }}" required maxlength="255"></div>
<div class="col-md-6"><input class="form-control" type="text" name="company" value="{{ old('company') }}" placeholder="{{ content('page_contact', 'company_placeholder') }}" aria-label="{{ content('page_contact', 'company_placeholder') }}" maxlength="255"></div>
                            <div class="col-md-6"><input class="form-control" type="email" name="email" value="{{ old('email') }}" required maxlength="255" placeholder="{{ content('page_contact', 'input_placeholder_3') }}"></div>
                            <div class="col-md-6"><input class="form-control" type="tel" name="phone" value="{{ old('phone') }}" maxlength="50" placeholder="{{ content('page_contact', 'input_placeholder_4') }}"></div>
                            <div class="col-12">
                                <select class="form-select" name="service" aria-label="{{ content('page_contact', 'service_aria_label') }}">
                                    <option value="" selected disabled>{{ content('page_contact', 'option_text') }}</option>
                                    @foreach (content_items('services') as $svc)
                                        <option>{{ $svc['title'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12"><textarea class="form-control" rows="5" placeholder="{{ content('page_contact', 'textarea_placeholder') }}" name="message" required maxlength="10000">{{ old('message') }}</textarea></div>
                            <div class="col-12"><button class="btn btn-primary btn-xl text-white fw-bold" type="submit">{{ content('page_contact', 'button_label') }}</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="page-section pt-0" id="map">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('page_contact', 'paragraph_3') }}</p>
        <h2 class="page-section-heading text-center text-secondary mb-4">{{ content('page_contact', 'heading_2') }} <span class="cl-title-accent">{{ content('page_contact', 'label_2') }}</span></h2>
        <div class="cl-map">
            <iframe src="{{ content('page_contact', 'iframe_src') }}"
            allowfullscreen="" 
            loading="lazy" 
            ></iframe>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    .cl-map {
        border: 1px solid var(--line);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 24px 60px rgba(0, 0, 0, 0.45);
        background: var(--surface);
    }
    .cl-map iframe {
        display: block;
        width: 100%;
        height: 440px;
        border: 0;
        filter: grayscale(.2) contrast(1.05);
    }
    @media (max-width: 575.98px) { .cl-map iframe { height: 320px; } }
</style>
@endpush
