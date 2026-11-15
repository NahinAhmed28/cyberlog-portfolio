<?php

return [
    // Use file on a single cPanel host, or a shared Redis store across web servers.
    // Null uses Laravel's default CACHE_STORE; array remains isolated in tests.
    'cms_cache_store' => env('CMS_CACHE_STORE'),
    'cms_cache_ttl' => (int) env('CMS_CACHE_TTL', 3600),
];
