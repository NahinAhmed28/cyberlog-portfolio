<?php

namespace App\Content;

use App\Models\MediaAsset;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Validator;

class MediaUploader
{
    public function store(UploadedFile $file): MediaAsset
    {
        Validator::make(['file' => $file], [
            'file' => ['required', 'file', 'mimes:jpg,jpeg,png,gif,webp,mp4,webm', 'extensions:jpg,jpeg,png,gif,webp,mp4,webm', 'max:51200'],
        ])->validate();
        $path = $file->store('uploads/'.now()->format('Y/m'), 'public');

        return MediaAsset::create([
            'path' => 'storage/'.$path,
            'name' => mb_substr($file->getClientOriginalName(), 0, 255),
            'mime_type' => $file->getMimeType(),
            'size' => $file->getSize(),
            'is_uploaded' => true,
            'uploaded_by' => auth()->id(),
        ]);
    }
}
