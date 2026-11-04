@extends('admin.layout')
@section('title', 'Site settings')
@section('content')
<h1>Site settings</h1>
<form method="post" action="{{ route('admin.settings.update') }}" class="card card-body">@csrf @method('PUT')
<label for="recipient" class="form-label">Inquiry notification recipient</label>
<input id="recipient" type="email" name="inquiry_recipient" value="{{ old('inquiry_recipient', $recipient) }}" required class="form-control">
<p class="form-text">New contact form submissions are sent to this address through your configured mail transport.</p>
<button class="btn btn-primary">Save settings</button></form>
@endsection
