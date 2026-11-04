<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Page extends Model
{
    protected $fillable = ['slug', 'title', 'path', 'kind', 'sort_order', 'is_custom', 'seo_title', 'seo_description'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function sections(): BelongsToMany
    {
        return $this->belongsToMany(PageSection::class)->withPivot('sort_order')->orderByPivot('sort_order');
    }
}
