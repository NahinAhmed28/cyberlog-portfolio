New website inquiry

Name: {{ $inquiry->name }}
Company: {{ $inquiry->company }}
Email: {{ $inquiry->email }}
Phone: {{ $inquiry->phone }}
Area of interest: {{ $inquiry->service }}
Submitted at: {{ $inquiry->created_at->toIso8601String() }}
Page URL: {{ $inquiry->page_url }}

Message:
{{ $inquiry->message }}
