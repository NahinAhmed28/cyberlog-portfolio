<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'service' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:10000'],
            'website' => ['nullable', 'size:0'],
        ]);
        unset($data['website']);
        DB::table('inquiries')->insert($data + ['created_at' => now(), 'updated_at' => now()]);

        return back()->with('contact_status', content('page_contact', 'success_message'));
    }
}
