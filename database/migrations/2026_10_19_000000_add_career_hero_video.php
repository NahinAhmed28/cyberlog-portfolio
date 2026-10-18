<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $sectionId = DB::table('page_sections')->where('key', 'page_career')->value('id');
        foreach (DB::table('page_contents')->where('page_section_id', $sectionId)->get() as $entry) {
            $data = json_decode($entry->data, true) ?? [];
            if (! array_key_exists('hero_video', $data)) {
                $data['hero_video'] = 'https://drive.google.com/file/d/1O482j1mSCDpoTKVkEdNu1A61ZFO-U9Eh/view';
                DB::table('page_contents')->where('id', $entry->id)->update(['data' => json_encode($data)]);
            }
        }
    }

    public function down(): void
    {
        // Keep the editable video value when rolling back; no schema was changed.
    }
};
