<?php

use App\Content\ContentRepository;

function content(string $feature, string $field): mixed
{
    return app(ContentRepository::class)->value($feature, $field);
}

function content_items(string $feature): array
{
    return app(ContentRepository::class)->items($feature);
}

function content_service_url(array $service): string
{
    if (! empty($service['url'])) {
        return $service['url'];
    }
    if (\Illuminate\Support\Facades\Route::has($service['route'])) {
        return route($service['route']);
    }

    return route('service.show', ['service' => $service['route']]);
}
