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
        <button class="btn btn-sm btn-outline-light d-md-none mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#admin-navigation" aria-controls="admin-navigation" aria-expanded="false">Pages & website menus</button>
        <nav id="admin-navigation" class="collapse d-md-block" aria-label="Administration">
            <a class="admin-nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Overview</a>
            <a class="admin-nav-link {{ request()->routeIs('admin.media.*') ? 'active' : '' }}" href="{{ route('admin.media.index') }}">Media library</a>
            <a class="admin-nav-link {{ request()->routeIs('admin.inquiries.*') ? 'active' : '' }}" href="{{ route('admin.inquiries.index') }}">Inquiries</a>
            @include('admin.sidebar-pages')
            <div class="admin-nav-heading">Website</div>
            <a class="admin-nav-link {{ request()->routeIs('admin.navigation.*') ? 'active' : '' }}" href="{{ route('admin.navigation.index') }}">Navigation</a>
            <a class="admin-nav-link" href="{{ route('admin.pages.show', 'footer') }}">Footer</a>
            <a class="admin-nav-link" href="{{ route('admin.pages.show', 'site-settings') }}">Site settings</a>
            <a class="admin-nav-link {{ request()->routeIs('admin.help') ? 'active' : '' }}" href="{{ route('admin.help') }}">How to edit your website</a>
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
@if(isset($media)) @include('admin.content.media-picker') @endif
</body>
</html>
