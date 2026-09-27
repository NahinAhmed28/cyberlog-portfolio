<?php

namespace App\Models;

use App\Content\PageEditor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PageSection extends Model
{
    public function getEditorTitleAttribute(): string
    {
        return app(PageEditor::class)->sectionTitle($this->key, $this->title);
    }

    protected $fillable = ['key', 'title', 'is_archived'];

    protected function casts(): array
    {
        return ['is_archived' => 'boolean'];
    }

    public function pages(): BelongsToMany
    {
        return $this->belongsToMany(Page::class)->withPivot('sort_order');
    }

    public function contents(): HasMany
    {
        return $this->hasMany(PageContent::class)->orderBy('sort_order')->orderBy('id');
    }
}
