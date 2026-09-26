@extends('layouts.portfolio')

@section('title', content('page_our_team', 'title'))

@section('content')

<section class="page-section" id="team">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">{{ content('page_our_team', 'paragraph') }}</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">{{ content('page_our_team', 'heading') }} <span class="cl-title-accent">{{ content('page_our_team', 'label') }}</span></h2>

        @php
            $team = content_items('page_our_team_team');
        @endphp

        <div class="row g-4 justify-content-center">
            @foreach ($team as $member)
                <div class="col-sm-8 col-md-6 col-lg-4">
                    <article class="cl-team-card h-100">
                        <div class="cl-team-photo">
                            @if ($member['photo'])
                                <img src="{{ asset($member['photo']) }}" alt="{{ $member['name'] }}" width="{{ $member['width'] }}" height="{{ $member['height'] }}" loading="eager" decoding="async">
                            @else
                                <i class="{{ content('page_our_team', 'icon') }}"></i>
                            @endif
                        </div>
                        <div class="cl-team-body">
                            <div class="cl-team-role">{{ $member['role'] }}</div>
                            <h3 class="cl-team-name">{{ $member['name'] }}</h3>
                            <p class="cl-team-bio">{{ $member['bio'] }}</p>
                            <div class="cl-team-social">
                                @foreach ($member['social'] as $network => $url)
                                    <a href="{{ $url }}" target="_blank" rel="noopener noreferrer" aria-label="{{ ucfirst($network) }}">
                                        <i class="fab fa-{{ $network === 'linkedin' ? 'linkedin-in' : $network }}"></i>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>






<section class="page-section bg-navy-soft" id="teams">

<div class="container">


<p class="section-eyebrow text-center mb-2">
{{ content('page_our_team', 'paragraph_2') }}
</p>


<h2 class="page-section-heading text-center text-uppercase text-white mb-3">

{{ content('page_our_team', 'heading_2') }} 
<span class="cl-title-accent">
{{ content('page_our_team', 'label_2') }}
</span>

</h2>



<p class="text-center text-muted mx-auto mb-5"
style="max-width:760px">

{{ content('page_our_team', 'paragraph_3') }}

</p>



<div class="row g-4">
@foreach (content_items('team_units') as $unit)
    <div class="col-md-6 col-lg-3"><div class="cl-solution-card cl-team-unit cl-team-unit--{{ $unit['color'] }} h-100">
        <div class="cl-solution-icon"><i class="{{ $unit['icon'] }}"></i></div>
        <h5 class="fw-bold">{{ $unit['title'] }}</h5><div class="small {{ ['red' => 'text-danger', 'purple' => 'text-primary', 'blue' => 'text-info', 'innovation' => 'text-warning'][$unit['color']] ?? '' }} text-uppercase mb-3">{{ $unit['subtitle'] }}</div>
        <ul class="small text-muted ps-3 mb-0">@foreach ($unit['points'] as $point)<li>{{ $point }}</li>@endforeach</ul>
    </div></div>
@endforeach
</div>
</div>
</section>


@endsection

@push('styles')
<style>
    .cl-team-unit {
        --unit-rgb: 109, 156, 255;
        --unit-color: #6d9cff;
        position: relative;
        overflow: hidden;
        border-color: rgba(var(--unit-rgb), .34);
        background:
            radial-gradient(circle at 88% 8%, rgba(var(--unit-rgb), .2), transparent 37%),
            linear-gradient(155deg, rgba(var(--unit-rgb), .09), rgba(7, 17, 31, .9) 58%);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, .035), 0 18px 42px rgba(0, 0, 0, .2);
    }
    .cl-team-unit::before {
        content: ''; position: absolute; inset: 0 0 auto; height: 3px;
        background: linear-gradient(90deg, transparent, var(--unit-color), transparent);
        opacity: .9;
    }
    .cl-team-unit--red { --unit-rgb: 255, 72, 101; --unit-color: #ff4865; }
    .cl-team-unit--purple { --unit-rgb: 189, 123, 255; --unit-color: #bd7bff; }
    .cl-team-unit--blue { --unit-rgb: 61, 179, 255; --unit-color: #3db3ff; }
    .cl-team-unit--innovation { --unit-rgb: 255, 177, 56; --unit-color: #ffb138; }
    .cl-team-unit .cl-solution-icon {
        color: var(--unit-color);
        border-color: rgba(var(--unit-rgb), .42);
        background: rgba(var(--unit-rgb), .12);
        box-shadow: 0 0 24px rgba(var(--unit-rgb), .16);
    }
    .cl-team-unit h5 { color: #fff; }
    .cl-team-unit li::marker { color: var(--unit-color); }
    .cl-team-unit:hover {
        border-color: rgba(var(--unit-rgb), .72);
        box-shadow: 0 22px 54px rgba(0, 0, 0, .34), 0 0 30px rgba(var(--unit-rgb), .11);
    }
    .cl-team-card {
        background: linear-gradient(165deg, var(--surface), var(--bg-alt));
        border: 1px solid var(--line);
        border-radius: 12px;
        overflow: hidden;
        transition: transform .3s var(--ease), border-color .3s var(--ease), box-shadow .3s var(--ease);
    }
    .cl-team-card:hover { transform: translateY(-6px); border-color: var(--blue-bright); box-shadow: 0 22px 54px rgba(0, 0, 0, .4); }
    .cl-team-photo {
        position: relative;
        aspect-ratio: 1;
        display: grid; place-items: center;
        background:
            radial-gradient(circle at 50% 40%, rgba(109, 156, 255, .14), transparent 60%),
            linear-gradient(160deg, #0e1838, #0a1126);
        border-bottom: 1px solid var(--line);
    }
    .cl-team-photo i { font-size: 4rem; color: var(--muted); }
    .cl-team-photo img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: contain; object-position: center; display: block; }
    .cl-team-body { padding: 1.25rem 1.35rem 1.5rem; }
    .cl-team-role {
        font-family: 'IBM Plex Mono', monospace; font-size: .7rem; letter-spacing: .14em;
        text-transform: uppercase; color: var(--blue-bright);
    }
    .cl-team-name { font-size: 1.25rem; color: var(--white); margin: .35rem 0 .6rem; }
    .cl-team-bio { color: var(--muted); font-size: .9rem; margin-bottom: 1rem; }
    .cl-team-social { display: flex; gap: .5rem; }
    .cl-team-social a {
        width: 38px; height: 38px; display: grid; place-items: center;
        border: 1px solid var(--line); border-radius: 8px; color: var(--text);
        transition: all .2s var(--ease);
    }
    .cl-team-social a:hover { background: var(--blue); border-color: var(--blue); color: #fff; }
</style>
@endpush
