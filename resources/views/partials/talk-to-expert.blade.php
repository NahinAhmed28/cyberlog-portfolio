
<section class="page-section">
    <div class="container">
        <div class="cl-cta d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
            <div>
                <h3 class="fw-bold mb-1">{{ $title ?? content('shared_talk_to_expert', 'default_text') }}</h3>
                <p class="mb-0 text-white-50">{{ $text ?? content('shared_talk_to_expert', 'default_text_2') }}</p>
            </div>
            <a class="btn btn-alert btn-xl text-white fw-bold" href="{{ content('shared_talk_to_expert', 'link_url') }}">
                {{ content('shared_talk_to_expert', 'link_label') }}
            </a>
        </div>
    </div>
</section>
