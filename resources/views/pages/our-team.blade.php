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
            $team = [
                [
                    'name'  => 'Hridoy Mustofa',
                    'role'  => 'CTO / CEO',
                    'photo' => 'assets/img/team/hridoy-mustofa.png',
                    'bio'   => 'Leads Cyberlog technology direction, cyber defense delivery, and security innovation.',
                    'social'=> ['facebook' => 'https://www.facebook.com/cyberlogbd/', 'linkedin' => 'https://www.linkedin.com/company/cyberlogbd/'],
                ],
                [
                    'name'  => 'Jesmin Ara',
                    'role'  => 'Chairman',
                    'photo' => 'assets/img/team/jesmin-ara.png',
                    'bio'   => 'Guides Cyberlog leadership vision, governance, and long-term organizational growth.',
                    'social'=> ['facebook' => 'https://www.facebook.com/cyberlogbd/', 'linkedin' => 'https://www.linkedin.com/company/cyberlogbd/'],
                ],
                [
                    'name'  => 'Sadia Afrin Akhi',
                    'role'  => 'Managing Director',
                    'photo' => 'assets/img/team/sadia-afrin-akhi.png',
                    'bio'   => 'Oversees business operations, client relationships, and strategic execution.',
                    'social'=> ['facebook' => 'https://www.facebook.com/cyberlogbd/', 'linkedin' => 'https://www.linkedin.com/company/cyberlogbd/'],
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
                                <a href="{{ $member['social']['facebook'] }}" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $member['social']['linkedin'] }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>



{{-- ======================================================
    OUR TEAMS
====================================================== --}}


<section class="page-section bg-navy-soft" id="teams">

<div class="container">


<p class="section-eyebrow text-center mb-2">
Our Teams
</p>


<h2 class="page-section-heading text-center text-uppercase text-white mb-3">

Built to 
<span class="cl-title-accent">
Attack, Defend & Innovate
</span>

</h2>



<p class="text-center text-muted mx-auto mb-5"
style="max-width:760px">

Our specialists work across offensive security,
defensive operations, data intelligence, and AI automation
to deliver complete cybersecurity solutions.

</p>



<div class="row g-4">


{{-- Offensive --}}

<div class="col-md-6 col-lg-3">

<div class="cl-solution-card h-100">


<div class="cl-solution-icon">

<i class="fas fa-crosshairs"></i>

</div>


<h5 class="fw-bold">
Offensive Team
</h5>


<div class="small text-danger text-uppercase mb-3">
Red Team
</div>



<ul class="small text-muted ps-3 mb-0">

<li>Penetration Testing</li>
<li>White & Gray Box Testing</li>
<li>API & Mobile Testing</li>
<li>Social Engineering</li>
<li>Ethical Hacking</li>
<li>Vulnerability Exploitation</li>

</ul>


</div>

</div>





{{-- Data --}}

<div class="col-md-6 col-lg-3">

<div class="cl-solution-card h-100">


<div class="cl-solution-icon">

<i class="fas fa-database"></i>

</div>


<h5 class="fw-bold">
Data Management Team
</h5>


<div class="small text-primary text-uppercase mb-3">
Purple Team
</div>


<ul class="small text-muted ps-3 mb-0">

<li>Data Analysis</li>
<li>Gap Analysis</li>
<li>Security Assessment</li>
<li>Managed Security</li>
<li>System Improvement</li>

</ul>


</div>

</div>





{{-- Defensive --}}

<div class="col-md-6 col-lg-3">

<div class="cl-solution-card h-100">


<div class="cl-solution-icon">

<i class="fas fa-shield-halved"></i>

</div>


<h5 class="fw-bold">
Defensive Team
</h5>


<div class="small text-info text-uppercase mb-3">
Blue Team
</div>


<ul class="small text-muted ps-3 mb-0">

<li>SOC Support</li>
<li>Incident Response</li>
<li>Threat Hunting</li>
<li>Digital Forensics</li>
<li>Firewall Protection</li>
<li>SIEM Solutions</li>

</ul>


</div>

</div>





{{-- AI --}}

<div class="col-md-6 col-lg-3">

<div class="cl-solution-card h-100">


<div class="cl-solution-icon">

<i class="fas fa-robot"></i>

</div>


<h5 class="fw-bold">
AI & Automation Team
</h5>


<div class="small text-warning text-uppercase mb-3">
Innovation Unit
</div>


<ul class="small text-muted ps-3 mb-0">

<li>AI Threat Detection</li>
<li>Automated Scanning</li>
<li>Security Orchestration</li>
<li>Alert Intelligence</li>
<li>Predictive Risk Analysis</li>
<li>Custom Security Tools</li>

</ul>


</div>

</div>



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
