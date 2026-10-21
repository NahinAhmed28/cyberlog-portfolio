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

    public function getUrlAttribute(?string $value): ?string
    {
        // Older seeds saved absolute URLs using the local CLI application URL.
        if (in_array(strtolower(parse_url($value ?? '', PHP_URL_HOST) ?? ''), ['localhost', '127.0.0.1', '[::1]'], true)) {
            $path = '/'.ltrim(parse_url($value, PHP_URL_PATH) ?? '', '/');
            $query = parse_url($value, PHP_URL_QUERY);
            $fragment = parse_url($value, PHP_URL_FRAGMENT);

            return $path.($query !== null ? '?'.$query : '').($fragment !== null ? '#'.$fragment : '');
        }

        return $value;
    }

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
