@extends('layouts.portfolio')

@section('title', 'Our Team — Cyberlog')

@section('content')

@include('partials.page-hero', [
    'eyebrow' => 'Our Team',
    'heading' => 'The People Behind <span class="text-teal">Cyberlog</span>',
    'subheading' => 'A team of offensive and defensive security specialists dedicated to building digital resilience for organizations across Bangladesh.',
    'centered' => true,
])

<section class="page-section" id="team">
    <div class="container">
        <p class="section-eyebrow text-center mb-2">Leadership</p>
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Meet the <span class="cl-title-accent">Leadership</span></h2>

        @php
            // TODO: replace demo names, photos, bios, and social links with real details.
            $team = [
                [
                    'name'  => 'Chairman',
                    'role'  => 'Chairman',
                    'photo' => null,
                    'bio'   => 'Chairman details — add a short professional bio here.',
                    'social'=> ['facebook' => '#', 'linkedin' => '#', 'x' => '#'],
                ],
                [
                    'name'  => 'Managing Director',
                    'role'  => 'MD',
                    'photo' => null,
                    'bio'   => 'MD details — add a short professional bio here.',
                    'social'=> ['facebook' => '#', 'linkedin' => '#', 'x' => '#'],
                ],
            ];
        @endphp

        <div class="row g-4 justify-content-center">
            @foreach ($team as $member)
                <div class="col-sm-8 col-md-6 col-lg-4">
                    <article class="cl-team-card h-100">
                        <div class="cl-team-photo">
                            @if ($member['photo'])
                                <img src="{{ asset($member['photo']) }}" alt="{{ $member['name'] }}" loading="eager" decoding="sync">
                            @else
                                <i class="fas fa-user"></i>
                            @endif
                        </div>
                        <div class="cl-team-body">
                            <div class="cl-team-role">{{ $member['role'] }}</div>
                            <h3 class="cl-team-name">{{ $member['name'] }}</h3>
                            <p class="cl-team-bio">{{ $member['bio'] }}</p>
                            <div class="cl-team-social">
                                <a href="{{ $member['social']['facebook'] }}" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $member['social']['linkedin'] }}" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                <a href="{{ $member['social']['x'] }}" target="_blank" rel="noopener" aria-label="X"><i class="fab fa-x-twitter"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('partials.talk-to-expert', [
    'title' => 'Want to work with our team?',
    'text' => 'Talk to a Cyberlog security specialist about your environment and goals.',
])

@endsection

@push('styles')
<style>
    .cl-team-card {
        background: linear-gradient(165deg, var(--surface), var(--bg-alt));
        border: 1px solid var(--line);
        border-radius: 12px;
        overflow: hidden;
        transition: transform .3s var(--ease), border-color .3s var(--ease), box-shadow .3s var(--ease);
    }
    .cl-team-card:hover { transform: translateY(-6px); border-color: var(--blue-bright); box-shadow: 0 22px 54px rgba(0, 0, 0, .4); }
    .cl-team-photo {
        aspect-ratio: 4 / 5;
        display: grid; place-items: center;
        background:
            radial-gradient(circle at 50% 40%, rgba(109, 156, 255, .14), transparent 60%),
            linear-gradient(160deg, #0e1838, #0a1126);
        border-bottom: 1px solid var(--line);
    }
    .cl-team-photo i { font-size: 4rem; color: var(--muted); }
    .cl-team-photo img { width: 100%; height: 100%; object-fit: cover; object-position: top center; display: block; }
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
