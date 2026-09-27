<?php

namespace App\Content;

use RuntimeException;

class PortfolioConfiguration
{
    public static function loadMissing(): void
    {
        foreach (['content_modules', 'portfolio_pages'] as $key) {
            if (config($key) === null && is_file(config_path($key.'.php'))) {
                config([$key => require config_path($key.'.php')]);
            }
        }
    }

    public static function validate(): void
    {
        self::loadMissing();
        foreach (['content_modules', 'portfolio_pages'] as $key) {
            if (! is_array(config($key)) || config($key) === []) {
                throw new RuntimeException("Portfolio configuration '{$key}' is missing or invalid. Upload config/{$key}.php, run php artisan config:clear, then php artisan db:seed --force.");
            }
        }
    }
}
