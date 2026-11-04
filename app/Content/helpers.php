<?php

use App\Content\ContentRepository;
use Illuminate\Support\Facades\Route;

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
    if (Route::has($service['route'])) {
        return route($service['route'], [], false);
    }

    return route('service.show', ['service' => $service['route']], false);
}

function gmail_compose_url(string $email): string
{
    return 'https://mail.google.com/mail/?'.http_build_query([
        'view' => 'cm', 'fs' => '1', 'to' => trim($email),
        'su' => "Inquiry \u{2013} Cyberlog Limited",
    ], '', '&', PHP_QUERY_RFC3986);
}
