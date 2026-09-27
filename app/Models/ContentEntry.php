<?php

namespace App\Models;

use App\Content\ContentRegistry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class ContentEntry extends Model
{
    use SoftDeletes;

    protected $guarded = ['*'];

    public function audits(): MorphMany
    {
        return $this->morphMany(ContentAudit::class, 'content', 'module', 'entry_id');
    }

    public static function forModule(string $module): static
    {
        $definition = app(ContentRegistry::class)->get($module);
        $model = new PageContent;
        $model->page_section_id = PageSection::where('key', $module)->firstOrFail()->id;

        return $model;
    }

    public function contentData(array $definition): array
    {
        $data = [];
        foreach ($definition['fields'] as $name => $field) {
            $data[$name] = $this->getAttribute('content_'.$name) ?? app(ContentRegistry::class)->emptyValue($field);
        }

        return $data;
    }

    public function editVersion(): string
    {
        return hash('sha256', json_encode($this->getRawOriginal(), JSON_THROW_ON_ERROR));
    }
}
