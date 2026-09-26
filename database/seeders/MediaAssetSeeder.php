<?php

namespace Database\Seeders;

use App\Content\ContentRegistry;
use App\Models\ContentEntry;
use App\Models\MediaAsset;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class MediaAssetSeeder extends Seeder
{
    public function run(): void
    {
        foreach (app(ContentRegistry::class)->all() as $key => $definition) {
            foreach (ContentEntry::forModule($key)->newQuery()->get() as $entry) {
                foreach (Arr::dot($entry->contentData($definition)) as $value) {
                    if (! is_string($value) || ! preg_match('~^(?:assets|images)/.+\.(png|jpe?g|gif|webp|svg|mp4|webm)$~i', $value) || ! is_file(public_path($value))) {
                        continue;
                    }
                    MediaAsset::firstOrCreate(['path' => $value], [
                        'name' => basename($value),
                        'mime_type' => match (strtolower(pathinfo($value, PATHINFO_EXTENSION))) {
                            'svg' => 'image/svg+xml',
                            'mp4' => 'video/mp4',
                            'webm' => 'video/webm',
                            default => mime_content_type(public_path($value)),
                        },
                        'size' => filesize(public_path($value)),
                        'is_uploaded' => false,
                    ]);
                }
            }
        }
    }
}
