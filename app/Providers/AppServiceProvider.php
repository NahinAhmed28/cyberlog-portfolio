<?php

namespace App\Providers;

use App\Content\ContentPlacement;
use App\Content\ContentRepository;
use App\Content\PortfolioConfiguration;
use App\Models\PageContent;
use App\Models\PageSection;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->scoped(ContentPlacement::class);
        PortfolioConfiguration::loadMissing();
        require_once app_path('Content/helpers.php');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Relation::enforceMorphMap(
            collect(config('content_modules'))->mapWithKeys(fn ($module, $key) => [$key => $module['model']])->all()
        );
        Paginator::useBootstrapFive();

        // Cover CMS forms, media replacement, soft deletes/restores and seeders.
        // Bulk reorder operations explicitly call ContentRepository::forget().
        foreach ([PageContent::class, PageSection::class] as $model) {
            $model::saved(fn () => app(ContentRepository::class)->invalidate());
            $model::deleted(fn () => app(ContentRepository::class)->invalidate());
        }
    }
}
