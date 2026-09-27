<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PageContent extends ContentEntry
{
    protected $fillable = ['page_section_id', 'seed_key', 'data', 'sort_order', 'is_visible'];

    protected function casts(): array
    {
        return ['data' => 'array', 'sort_order' => 'integer', 'is_visible' => 'boolean'];
    }

    public function section(): BelongsTo
    {
        return $this->belongsTo(PageSection::class, 'page_section_id');
    }

    // Module editors may only query rows in their selected page section.
    public function newQuery()
    {
        $query = parent::newQuery();
        if ($this->page_section_id) {
            $query->where($this->qualifyColumn('page_section_id'), $this->page_section_id);
        }

        return $query;
    }

    public function getMorphClass()
    {
        return $this->section->key;
    }

    // Preserve the public templates and existing field editor API during consolidation.
    public function getAttribute($key)
    {
        if (is_string($key) && str_starts_with($key, 'content_')) {
            return ($this->data ?? [])[substr($key, 8)] ?? null;
        }

        return parent::getAttribute($key);
    }

    public function setAttribute($key, $value)
    {
        if (str_starts_with($key, 'content_')) {
            $data = $this->data ?? [];
            $data[substr($key, 8)] = $value;

            return parent::setAttribute('data', $data);
        }

        return parent::setAttribute($key, $value);
    }
}
