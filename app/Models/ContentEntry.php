<?php

namespace App\Models;

use App\Content\ContentRegistry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContentEntry extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public static function forModule(string $module): static
    {
        $definition = app(ContentRegistry::class)->get($module);
        $model = new static;
        $model->setTable($definition['table']);
        $casts = ['is_visible' => 'boolean', 'sort_order' => 'integer'];
        foreach ($definition['fields'] as $name => $field) {
            $casts['content_'.$name] = match ($field['type']) {
                'number' => 'float',
                'boolean' => 'boolean',
                'list', 'object' => 'array',
                default => 'string',
            };
        }
        $model->mergeCasts($casts);

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
