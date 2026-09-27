<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index(Request $request)
    {
        $inquiries = Inquiry::query()->when($request->filled('status'), fn ($query) => $query->where('status', $request->string('status')))->latest()->paginate(20)->withQueryString();

        return view('admin.inquiries.index', compact('inquiries'));
    }

    public function show(int $id)
    {
        $inquiry = Inquiry::query()->find($id);
        abort_unless($inquiry, 404);

        return view('admin.inquiries.show', compact('inquiry'));
    }

    public function update(Request $request, int $id)
    {
        abort_unless(Inquiry::query()->where('id', $id)->exists(), 404);
        $data = $request->validate(['status' => ['required', 'in:new,read,replied,archived'], 'admin_notes' => ['nullable', 'string', 'max:10000']]);
        Inquiry::findOrFail($id)->update($data);

        return back()->with('status', 'Inquiry updated.');
    }
}
