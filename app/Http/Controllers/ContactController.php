<?php

namespace App\Http\Controllers;

use App\Mail\InquiryNotification;
use App\Models\Inquiry;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $origin = parse_url((string) $request->headers->get('referer'), PHP_URL_PATH);
        $data['page_url'] = url($origin && str_starts_with($origin, '/') ? $origin : '/contact');
        try {
            $inquiry = Inquiry::query()->create($data);
        } catch (\Throwable $exception) {
            report($exception);

            return back()->withInput()->with('contact_error', 'We could not save your message. Please try again shortly.');
        }
        try {
            Mail::to(SiteSetting::notificationRecipient())
                ->send(new InquiryNotification($inquiry));
            $inquiry->update(['notified_at' => now()]);
        } catch (\Throwable $exception) {
            report($exception);

            return back()->with('contact_error', 'Your message has been saved for our team, but the email notification could not be sent. You do not need to submit it again.');
        }

        return back()->with('contact_status', content('page_contact', 'success_message'));
    }
}
