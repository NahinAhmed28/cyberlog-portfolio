<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index(Request $request)
    {
        $inquiries = $this->query($request)->paginate(20)->withQueryString();

        return view('admin.inquiries.index', compact('inquiries'));
    }

    public function show(int $id)
    {
        $inquiry = Inquiry::query()->find($id);
        abort_unless($inquiry, 404);

        if (! $inquiry->read_at) {
            $inquiry->update(['read_at' => now()]);
        }

        return view('admin.inquiries.show', compact('inquiry'));
    }

    public function update(Request $request, int $id)
    {
        abort_unless(Inquiry::query()->where('id', $id)->exists(), 404);
        $data = $request->validate(['status' => ['required', 'in:new,in_progress,replied,closed,read,archived'], 'admin_notes' => ['nullable', 'string', 'max:10000']]);
        Inquiry::findOrFail($id)->update($data);

        return back()->with('status', 'Inquiry updated.');
    }

    private function query(Request $request)
    {
        return Inquiry::query()
            ->when($request->filled('status'), fn ($q) => $q->where('status', $request->input('status')))
            ->when($request->filled('q'), fn ($q) => $q->where(function ($q) use ($request) {
                foreach (['name', 'email', 'company', 'service', 'message'] as $field) {
                    $q->orWhere($field, 'like', '%'.$request->input('q').'%');
                }
            }))->latest()->orderByDesc('id');
    }

    public function destroy(int $id)
    {
        Inquiry::findOrFail($id)->delete();

        return redirect()->route('admin.inquiries.index')->with('status', 'Inquiry moved to trash.');
    }

    public function export(Request $request)
    {
        return response()->streamDownload(function () use ($request) {
            $file = fopen('php://output', 'w');
            fputcsv($file, ['Name', 'Company', 'Email', 'Phone', 'Interest', 'Message', 'Submitted at', 'Page URL', 'Status', 'Internal notes'], ',', '"', '');
            foreach ($this->query($request)->cursor() as $item) {
                $values = [$item->name, $item->company, $item->email, $item->phone, $item->service, $item->message, $item->created_at->toIso8601String(), $item->page_url, $item->status, $item->admin_notes];
                // Prevent spreadsheet software from interpreting visitor text as a formula.
                $values = array_map(fn ($value) => preg_match('/^[\s]*[=+@-]/u', (string) $value) ? "'".$value : $value, $values);
                fputcsv($file, $values, ',', '"', '');
            }
            fclose($file);
        }, 'inquiries-'.now()->format('Y-m-d').'.csv', ['Content-Type' => 'text/csv; charset=UTF-8']);
    }
}
