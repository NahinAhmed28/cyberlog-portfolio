<?php

namespace App\Http\Controllers\Admin;

use App\Content\ContentRegistry;
use App\Http\Controllers\Controller;
use App\Models\ContentAudit;
use App\Models\Inquiry;
use App\Models\MediaAsset;
use App\Models\Page;

class DashboardController extends Controller
{
    public function __invoke(ContentRegistry $registry)
    {
        $pages = Page::where('kind', 'page')->withCount('sections')->orderBy('sort_order')->get();
        $recent = ContentAudit::with('user')->latest()->limit(12)->get();
        $mediaCount = MediaAsset::count();
        $newInquiries = Inquiry::query()->where('status', 'new')->count();

        return view('admin.dashboard', compact('pages', 'recent', 'mediaCount', 'newInquiries'));
    }
}
