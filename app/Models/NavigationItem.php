<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class NavigationItem extends Model
{
    use SoftDeletes;

    protected $fillable = ['parent_id', 'seed_key', 'label', 'url', 'type', 'sort_order', 'is_visible', 'new_tab'];

    protected function casts(): array
    {
        return ['is_visible' => 'boolean', 'new_tab' => 'boolean', 'sort_order' => 'integer'];
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id')->orderBy('sort_order')->orderBy('id');
    }

    public static function publishedMenu()
    {
        return static::whereNull('parent_id')->where('is_visible', true)
            ->with(['children' => fn ($query) => $query->where('is_visible', true)])
            ->orderBy('sort_order')->orderBy('id')->get();
    }
}
