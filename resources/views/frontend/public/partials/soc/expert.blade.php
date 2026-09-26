
<section class="page-section bg-light" id="talk-to-expert">
    <div class="container">
        <div class="row g-5 align-items-center">

            <div class="col-lg-5">
                <p class="section-eyebrow mb-2" data-reveal>{{ content('soc_expert', 'paragraph') }}</p>
                <h2 class="cl-soc-h2 mb-3" data-reveal>{{ content('soc_expert', 'heading') }} <span class="grad-text">{{ content('soc_expert', 'label') }}</span></h2>
                <p class="text-muted mb-4" data-reveal>
                    {{ content('soc_expert', 'paragraph_2') }}
                </p>
                <ul class="list-unstyled" data-reveal>
                    <li class="mb-2 text-muted"><i class="{{ content('soc_expert', 'icon') }}"></i>{{ content('soc_expert', 'list_text') }}</li>
                    <li class="mb-2 text-muted"><i class="{{ content('soc_expert', 'icon_2') }}"></i><a class="link-light text-decoration-none" href="{{ content('soc_expert', 'a_href') }}">{{ content('soc_expert', 'link_label') }}</a></li>
                    <li class="mb-2 text-muted"><i class="{{ content('soc_expert', 'icon_3') }}"></i>{{ content('soc_expert', 'list_text_2') }}</li>
                </ul>
            </div>

            <div class="col-lg-7" data-reveal>
                <div class="cl-expert-card">
                    
                    @if(session('contact_status'))<div class="alert alert-success" role="status">{{ session('contact_status') }}</div>@endif
@if($errors->any())<div class="alert alert-danger" role="alert">@foreach($errors->all() as $error)<div>{{ $error }}</div>@endforeach</div>@endif
<form method="post" action="{{ route('contact.store') }}">@csrf
<input type="text" name="website" class="d-none" tabindex="-1" autocomplete="off" aria-hidden="true">
                        <div class="row g-3">
                            <div class="col-md-6"><input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="{{ content('soc_expert', 'name_placeholder') }}" aria-label="{{ content('soc_expert', 'name_placeholder') }}" required maxlength="255"></div>
<div class="col-md-6"><input class="form-control" type="text" name="company" value="{{ old('company') }}" placeholder="{{ content('soc_expert', 'company_placeholder') }}" aria-label="{{ content('soc_expert', 'company_placeholder') }}" maxlength="255"></div>
                            <div class="col-md-6"><input class="form-control" type="email" name="email" value="{{ old('email') }}" required maxlength="255" placeholder="{{ content('soc_expert', 'input_placeholder_3') }}"></div>
                            <div class="col-md-6"><input class="form-control" type="tel" name="phone" value="{{ old('phone') }}" maxlength="50" placeholder="{{ content('soc_expert', 'input_placeholder_4') }}"></div>
                            <div class="col-12">
                                <select class="form-select" name="service" aria-label="Service of interest">
                                    <option value="" selected disabled>{{ content('soc_expert', 'option_text') }}</option>
                                    <option>{{ content('soc_expert', 'option_text_2') }}</option>
                                    <option>{{ content('soc_expert', 'option_text_3') }}</option>
                                    <option>{{ content('soc_expert', 'option_text_4') }}</option>
                                    <option>{{ content('soc_expert', 'option_text_5') }}</option>
                                    <option>{{ content('soc_expert', 'option_text_6') }}</option>
                                    <option>{{ content('soc_expert', 'option_text_7') }}</option>
                                </select>
                            </div>
                            <div class="col-12"><textarea class="form-control" rows="4" placeholder="{{ content('soc_expert', 'textarea_placeholder') }}" name="message" required maxlength="10000">{{ old('message') }}</textarea></div>
                            <div class="col-12"><button class="btn btn-primary btn-xl text-white fw-bold w-100" type="submit"><i class="{{ content('soc_expert', 'icon_4') }}"></i> {{ content('soc_expert', 'button_label') }}</button></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-expert-card {
        background: linear-gradient(160deg, #0b1430, #0a1126) padding-box,
                    linear-gradient(120deg, var(--blue), #6f5bff) border-box;
        border: 1.5px solid transparent; border-radius: 16px; padding: 1.85rem;
        box-shadow: 0 30px 80px rgba(5, 20, 60, 0.5);
    }
</style>
@endpush
