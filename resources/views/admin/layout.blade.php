<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Content manager') · Cyberlog Admin</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="{{ asset('vendor/bootstrap/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/admin.js') }}" defer></script>
</head>
<body>
<div class="admin-shell">
    <aside class="admin-sidebar">
        <a class="admin-brand" href="{{ route('admin.dashboard') }}">CYBERLOG<span>Content studio</span></a>
        <nav aria-label="Administration">
            <a class="admin-nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Overview</a>
            <a class="admin-nav-link {{ request()->routeIs('admin.media.*') ? 'active' : '' }}" href="{{ route('admin.media.index') }}">Media library</a>
            <a class="admin-nav-link {{ request()->routeIs('admin.inquiries.*') ? 'active' : '' }}" href="{{ route('admin.inquiries.index') }}">Inquiries</a>
            <label class="visually-hidden" for="section-search">Find a section</label>
            <input id="section-search" class="form-control form-control-sm my-3" placeholder="Find a section…" data-nav-search>
            @foreach (collect(app(\App\Content\ContentRegistry::class)->all())->groupBy('group') as $group => $definitions)
                <details class="admin-nav-group" @if ($definitions->has(request()->route('module'))) open @endif>
                    <summary>{{ $group }}</summary>
                    @foreach ($definitions as $key => $definition)
                        <a class="admin-nav-link {{ request()->route('module') === $key ? 'active' : '' }}" data-nav-item href="{{ route('admin.content.index', $key) }}">{{ $definition['title'] }}</a>
                    @endforeach
                </details>
            @endforeach
        </nav>
    </aside>
    <div class="admin-workspace">
        <header class="admin-topbar">
            <span class="text-muted small">Website administration</span>
            <div class="d-flex align-items-center gap-3">
                <a href="{{ route('home') }}" target="_blank" rel="noopener" class="small">View website ↗</a>
                <a href="{{ route('admin.profile.edit') }}" class="small">{{ auth()->user()->name }}</a>
                <form method="post" action="{{ route('logout') }}">@csrf<button class="btn btn-sm btn-outline-secondary">Sign out</button></form>
            </div>
        </header>
        <main class="admin-main">
            @if(session('status'))<div class="alert alert-success" role="status">{{ session('status') }}</div>@endif
            @if($errors->any())
                <div class="alert alert-danger" role="alert"><strong>Please check these fields:</strong><ul class="mb-0 mt-2">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
            @endif
            @yield('content')
        </main>
    </div>
</div>
</body>
</html>
