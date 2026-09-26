@extends('admin.layout')
@section('title', 'Your account')
@section('content')
<div class="admin-page-heading"><div><p class="admin-eyebrow">Account settings</p><h1>Your account</h1></div></div>
<form class="card card-body admin-account-form" method="post" action="{{ route('admin.profile.update') }}">@csrf @method('PUT')
    <label for="name" class="form-label">Name</label><input id="name" class="form-control mb-3" name="name" value="{{ old('name', auth()->user()->name) }}" required>
    <label for="email" class="form-label">Email</label><input id="email" class="form-control mb-3" name="email" type="email" value="{{ old('email', auth()->user()->email) }}" required>
    <label for="current-password" class="form-label">Current password</label><input id="current-password" class="form-control mb-3" name="current_password" type="password" autocomplete="current-password" required>
    <label for="password" class="form-label">New password (optional)</label><input id="password" class="form-control mb-3" name="password" type="password" autocomplete="new-password" minlength="12">
    <label for="password-confirmation" class="form-label">Confirm new password</label><input id="password-confirmation" class="form-control mb-4" name="password_confirmation" type="password" autocomplete="new-password">
    <button class="btn btn-primary align-self-start">Update account</button>
</form>
@endsection
