<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function edit()
    {
        return view('admin.settings', ['recipient' => SiteSetting::notificationRecipient()]);
    }

    public function update(Request $request)
    {
        $data = $request->validate(['inquiry_recipient' => ['required', 'email', 'max:255']]);
        SiteSetting::updateOrCreate(['key' => 'inquiry_recipient'], ['value' => $data['inquiry_recipient']]);

        return back()->with('status', 'Site settings saved.');
    }
}
