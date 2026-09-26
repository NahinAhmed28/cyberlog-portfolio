<?php

namespace App\Http\Controllers\Admin;

use App\Content\ContentRegistry;
use App\Http\Controllers\Controller;
use App\Models\ContentAudit;
use App\Models\MediaAsset;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __invoke(ContentRegistry $registry)
    {
        $modules = collect($registry->all())->groupBy('group');
        $recent = ContentAudit::with('user')->latest()->limit(12)->get();
        $mediaCount = MediaAsset::count();
        $newInquiries = DB::table('inquiries')->where('status', 'new')->count();

        return view('admin.dashboard', compact('modules', 'recent', 'mediaCount', 'newInquiries'));
    }
}
