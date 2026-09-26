@extends('layouts.app')
@section('content')
<div class="card"><div class="card-body">
<p class="admin-login-brand mb-4">CYBERLOG</p><h1 class="h3 mb-2">Administrator sign in</h1><p class="text-muted small mb-4">Manage your website?s content, media, and inquiries.</p>
<form method="post" action="{{ route('login') }}">@csrf
<label for="email" class="form-label">Email address</label><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
@error('email')<div class="invalid-feedback" role="alert">{{ $message }}</div>@enderror
<label for="password" class="form-label mt-3">Password</label><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
@error('password')<div class="invalid-feedback" role="alert">{{ $message }}</div>@enderror
<div class="form-check my-3"><input class="form-check-input" type="checkbox" name="remember" id="remember" @checked(old('remember'))><label class="form-check-label small" for="remember">Remember me</label></div>
<button class="btn btn-primary w-100">Sign in</button></form>
<div class="d-flex justify-content-between mt-4 small"><a href="{{ route('home') }}">? Website</a><a href="{{ route('password.request') }}">Forgot password?</a></div>
</div></div>
@endsection
