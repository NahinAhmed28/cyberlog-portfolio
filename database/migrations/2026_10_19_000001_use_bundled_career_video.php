<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $path = 'assets/video/career.mp4';
        if (! is_file(public_path($path))) {
            throw new RuntimeException('The bundled career video is missing: '.$path);
        }

        DB::table('media_assets')->insertOrIgnore([
            'path' => $path,
            'name' => 'career.mp4',
            'mime_type' => 'video/mp4',
            'size' => filesize(public_path($path)),
            'is_uploaded' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $sectionId = DB::table('page_sections')->where('key', 'page_career')->value('id');
        if (! $sectionId) {
            return;
        }

        foreach (DB::table('page_contents')->where('page_section_id', $sectionId)->get() as $entry) {
            $data = json_decode($entry->data, true) ?? [];
            $video = $data['hero_video'] ?? '';
            if ($video === '' || $video === 'https://drive.google.com/file/d/1O482j1mSCDpoTKVkEdNu1A61ZFO-U9Eh/view') {
                $data['hero_video'] = $path;
                DB::table('page_contents')->where('id', $entry->id)->update(['data' => json_encode($data)]);
            }
        }
    }

    public function down(): void
    {
        // Preserve the video and any subsequent administrator edits.
    }
};
