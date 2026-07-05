<section class="process-section" id="how-we-work">
    <div class="container">

        <p class="process-label">// HOW WE WORK</p>

        <h2 class="process-title">
            OUR ENGAGEMENT PROCESS
        </h2>

        <p class="process-subtitle">
            A structured, repeatable methodology that takes you from risk discovery
            to continuous protection.
        </p>

        <div class="process-diagram-wrap" data-reveal>
            <img src="{{ asset('images/techd.png') }}"
                 alt="Cyberlog Engagement Process"
                 class="process-diagram-img">

            <div class="center-core"></div>


            <div class="box-glow glow-top-left"></div>
            <div class="box-glow glow-top-right"></div>
            <div class="box-glow glow-bottom-left"></div>
            <div class="box-glow glow-bottom-right"></div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .process-section {
        background:
            radial-gradient(760px 460px at 50% 58%, rgba(33, 75, 155, 0.22), rgba(13, 22, 39, 0) 68%),
            linear-gradient(180deg, #0d1627 0%, #0c1526 52%, #0d1528 100%);
        padding: 5rem 0 4.5rem;
        overflow: hidden;
    }

    /* Wider than the page container per feedback — spans most of the viewport. */
    .process-diagram-wrap {
        background: #0d1627;
        max-width: none;
        width: min(1560px, 94vw);
        left: calc((100% - min(1560px, 94vw)) / 2);
    }

    .process-diagram-img {
        mix-blend-mode: normal;
    }

    html.js .process-diagram-wrap[data-reveal] {
        opacity: 0;
        transform: translateY(28px) scale(0.985);
    }

    html.js .process-diagram-wrap[data-reveal].is-in {
        opacity: 1;
        transform: none;
        transition: opacity 1s var(--ease), transform 1s var(--ease);
    }
</style>
@endpush
