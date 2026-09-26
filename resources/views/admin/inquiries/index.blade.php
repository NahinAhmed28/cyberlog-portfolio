@extends('admin.layout')
@section('title', 'Inquiries')
@section('content')
<div class="admin-page-heading"><div><p class="admin-eyebrow">Contact requests</p><h1>Inquiries</h1><p class="text-muted">Messages submitted through your website’s contact form.</p></div></div>
<form class="d-flex gap-2 mb-4"><select class="form-select w-auto" name="status" aria-label="Inquiry status"><option value="">All statuses</option>@foreach(['new','read','replied','archived'] as $status)<option @selected(request('status') === $status)>{{ $status }}</option>@endforeach</select><button class="btn btn-outline-secondary">Filter</button></form>
<div class="card table-responsive"><table class="table align-middle mb-0"><thead><tr><th>Sender</th><th>Service</th><th>Received</th><th>Status</th><th></th></tr></thead><tbody>
@forelse($inquiries as $inquiry)<tr><td><strong>{{ $inquiry->name }}</strong><div class="small text-muted">{{ $inquiry->email }}</div></td><td>{{ $inquiry->service }}</td><td>{{ $inquiry->created_at }}</td><td>{{ ucfirst($inquiry->status) }}</td><td><a href="{{ route('admin.inquiries.show', $inquiry->id) }}" class="btn btn-sm btn-outline-primary">Read</a></td></tr>@empty<tr><td colspan="5" class="text-muted text-center p-5">No inquiries yet.</td></tr>@endforelse
</tbody></table></div><div class="mt-3">{{ $inquiries->links() }}</div>
@endsection
