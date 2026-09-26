
@php
    $u = fn ($pub, $legacy) => Route::has($pub) ? route($pub) : (Route::has($legacy) ? route($legacy) : '#');
    $svcUrl = function ($service) {
        $groupRoutes = content('footer', 'group_routes');

        $group = $service['group'] ?? null;
        if (isset($groupRoutes[$group]) && Route::has($groupRoutes[$group])) {
            return route($groupRoutes[$group]);
        }

        if (Route::has($service['route'])) {
            return route($service['route']);
        }

        return '#';
    };
@endphp

<footer class="footer pt-5 pb-4">
    <div class="container">

        <div class="row gy-4">
            
            <div class="col-12 col-xl-4">
                <div class="cl-foot-head">{{ content('footer', 'div_text') }}</div>
                    @foreach (content_items('footer_col_12') as $contentRow)
<a class="cl-foot-link" href="{{ $contentRow['link_url'] }}">{{ $contentRow['link_label'] }}</a>
@endforeach
                
            </div>

            
            <div class="col-6 col-xl-2">
                <div class="cl-foot-head">{{ content('footer', 'div_text_2') }} </div>
@foreach(content_items('footer_specialized_links') as $link)<a class="cl-foot-link" href="{{ $link['url'] }}">{{ $link['label'] }}</a>@endforeach
</div>
            
            
            <div class="col-6 col-xl-2">
                <div class="cl-foot-head">{{ content('footer', 'div_text_3') }}</div>
@foreach(content_items('footer_company_links') as $link)<a class="cl-foot-link" href="{{ $link['url'] }}">{{ $link['label'] }}</a>@endforeach
</div>

            
            <div class="col-6 col-xl-3">
                <div class="cl-foot-head">{{ content('footer', 'div_text_4') }}</div>
                <p class="text-muted mb-2"><i class="{{ content('footer', 'icon') }}"></i>{{ content('footer', 'paragraph') }}</p>
                <p class="text-muted mb-2"><i class="{{ content('footer', 'icon_2') }}"></i><a class="link-light text-decoration-none" href="{{ content('footer', 'a_href') }}">{{ content('footer', 'link_label_12') }}</a></p>
                <p class="text-muted mb-2"><i class="{{ content('footer', 'icon_3') }}"></i>{{ content('footer', 'paragraph_2') }}</p>
                <p class="text-muted mb-3"><i class="{{ content('footer', 'icon_4') }}"></i><a href="{{ content('footer', 'a_href_2') }}" target="_blank">{{ content('footer', 'link_label_13') }}</a></p>
                <p class="text-muted mb-3">{{ content('footer', 'paragraph_3') }}</p>
                <div class="d-flex gap-2">
                    @foreach (content_items('footer_cards') as $contentRow)
<a class="btn btn-outline-light btn-social" href="{{ $contentRow['a_href'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $contentRow['a_aria_label'] }}"><i class="{{ $contentRow['icon'] }}"></i></a>
@endforeach
                </div>
            </div>

        </div>

        <hr class="border-0 my-4">


        
        <div class="cl-wordmark-wrap">
            <div class="cl-wordmark-lockup">
                <div class="d-flex align-items-center mb-5 justify-content-md-between pe-4 ps-3 justify-content-center flex-wrap" style="gap: 0 1.5rem !important;">
                    <div class="cl-footer-meta text-muted small">
                        <div>{{ content('footer', 'div_text_5') }} {{ date('Y') }} {{ content('footer', 'div_text_6') }}</div>
                    </div>
                    <div class="mono cl-footer-tagline text-muted small position-relative m-0">{{ content('footer', 'div_text_7') }}</div>
                </div>
                <div class="cl-wordmark" aria-hidden="true">@foreach (content_items('footer_wordmark') as $contentRow)
<span>{{ $contentRow['label'] }}</span>
@endforeach</div>
            </div>
        </div>

    </div>
</footer>
