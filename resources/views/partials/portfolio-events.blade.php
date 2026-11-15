@php
    $events = [];
    if (request()->routeIs('home')) {
        $events['events'] = content_items('threat_feed_events');
    }
    if (request()->routeIs('soc')) {
        $events['socEvents'] = content_items('soc_live_events');
    }
@endphp
@if ($events)
    <script>window.cyberlogContent = {{ Illuminate\Support\Js::from($events) }};</script>
@endif
