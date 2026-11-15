<?php

namespace App\Console\Commands;

use App\Content\ContentRepository;
use Illuminate\Console\Command;

class CachePublicContent extends Command
{
    protected $signature = 'cms:cache';

    protected $description = 'Rebuild the published CMS content cache before serving visitors';

    public function handle(ContentRepository $content): int
    {
        $content->invalidate();
        $snapshot = $content->snapshot();
        $this->info('Published content cached for '.count($snapshot).' sections.');

        return self::SUCCESS;
    }
}
