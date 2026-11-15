@php
    $driveVideo = preg_match('~^https://drive\.google\.com/file/d/([a-zA-Z0-9_-]+)(?:/|$)~', $heroVideo, $driveMatch);
    $autoplayVideo = ! empty($heroVideoAutoplay);
@endphp
@if ($driveVideo)
    <iframe src="https://drive.google.com/file/d/{{ $driveMatch[1] }}/preview"
            title="{{ $heroCaption ?? 'Career video' }}"
            allow="autoplay; fullscreen" allowfullscreen></iframe>
@else
    <video controls playsinline @if ($autoplayVideo) autoplay data-autoplay-with-sound @endif preload="{{ $autoplayVideo ? 'auto' : 'metadata' }}" aria-label="{{ $heroCaption ?? 'Career video' }}">
        <source src="{{ asset($heroVideo) }}">
        Your browser does not support video playback.
    </video>
@endif
