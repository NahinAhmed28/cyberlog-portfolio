# Cyberlog Portfolio

Cyberlog Portfolio is a Laravel-based portfolio project with a cyber/security-themed direction. It is intended to present profile, projects, and services through a managed web application.

## Features

- Cyber/security-themed portfolio presentation
- Laravel backend for routing and content handling
- Project/service showcase structure
- Complete admin CMS using Laravel UI authentication and Bootstrap
- Front-end asset workflow for styling and interaction

## Modules

- Portfolio module: projects, services, profile, and experience sections
- Public site module: landing pages, navigation, and content views
- Admin module: one editor per public page, plus navigation, footer and site settings
- Media module: images, uploads, and visual assets
- Data module: migrations, models, and configuration records

## System Architecture

The project follows Laravel MVC architecture. The Page, PageSection and PageContent Eloquent models store page ownership, reusable sections and editable content in conventional tables. A many-to-many page/section relationship shares content without duplication. NavigationItem owns the navbar and its child links. Public Blade views read a shared published-content snapshot through ContentRepository: one joined query on a cold cache, with request memoization and automatic invalidation after committed CMS edits. URLs are resolved per request, and forms/session HTML remain uncached. Admin controllers validate changes, save through Eloquent, and record audit history. Media uploads and contact inquiries are also managed through Eloquent. Authentication uses Laravel UI, with Bootstrap assets served locally.

## Getting Started

```bash
git clone https://github.com/NahinAhmed28/cyberlog-portfolio.git
cd cyberlog-portfolio
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev
php artisan serve
```

## Database and administrator setup

Configure the database connection in `.env`. Set `ADMIN_NAME`, `ADMIN_EMAIL`, and `ADMIN_PASSWORD` before seeding. The password must contain at least 8 characters, including letters and numbers. Credentials belong in the deployment environment, not committed source code.

```bash
php artisan migrate --seed
php artisan storage:link
```

The seeded development login is `admin@cyberlog.test` / `Cyber123`; override `ADMIN_EMAIL` and `ADMIN_PASSWORD` in the deployment environment. `/login` is the only login URL; `/admin` is the authenticated dashboard and redirects guests to `/login`. Alternatively, `php artisan admin:create` creates an administrator interactively. Public registration is disabled. Existing accounts and passwords are preserved when seeders run again.

On a **disposable empty installation**, `php artisan migrate:fresh --seed` restores the original portfolio defaults. This command deletes existing database data; use `migrate --seed` when upgrading an existing site. The page-content migration transfers all existing content, preserves edits, visibility and trash state, and remaps audit references before removing the old section-specific tables.

Original text, image/video paths, links and repeatable cards live in the page-based `database/seeders/Pages` seeders. Media files remain in `public/assets` and `public/images`; uploaded files use the public storage disk. `MediaAssetSeeder` registers the original media in the library. Reseeding fills newly introduced fields without replacing edits or resurrecting deleted cards.

See [the complete module inventory](docs/admin-content-inventory.md) for page ownership, models, tables and seeders. Administrators can edit copy, logos, images, video references, links and nested lists, and add, reorder, hide, trash or restore repeatable records.

## Editing without CMS experience

### Career video on cPanel

The career video is tracked in Git at `public/assets/video/career.mp4`. It spans the hero width above the existing hero copy, with responsive spacing. The bundled 1080p H.264/AAC clip is approximately 5.74 MB (previously 62.26 MB), with its MP4 metadata at the front for streaming. It preloads for muted inline autoplay when the career page opens; playback controls let visitors pause or enable sound. Fresh seeds set the career page's `hero_video` and register the file in the media library. The upgrade migration replaces the original Google Drive default or an empty/missing video with the bundled file, while preserving custom video selections.

After pulling updates on an existing cPanel installation, run from the project directory:

```bash
git pull
/opt/cpanel/ea-php84/root/usr/bin/php artisan optimize:clear
/opt/cpanel/ea-php84/root/usr/bin/php artisan migrate --force
/opt/cpanel/ea-php84/root/usr/bin/php artisan optimize
/opt/cpanel/ea-php84/root/usr/bin/php artisan cms:cache
```

A Git pull alone does not update database records or clear Laravel's cached configuration. No reseeding is required for this career video upgrade. The web server must serve the project's `public` directory; the bundled video does not require `storage:link`.

### Frontend performance and deployment

The public site uses Vite bundles with selected Bootstrap components, local Font Awesome WOFF2 icons, nonblocking Google font styles, and lazy loading for below-fold client images. Decorative canvas work starts after paint and pauses offscreen. Apache/cPanel serves compressed text and caches static files; hashed build assets have a one-year immutable lifetime. Other web servers should configure equivalent compression/cache headers and preserve video byte-range support.

`public/build` is tracked so a Git-only cPanel deployment receives the production CSS, JavaScript, fonts and manifest together. After changing frontend source, run `npm ci --ignore-scripts` and `npm run build`, then include the updated build files with the source changes. Do not deploy `public/hot`, which points Laravel at a local Vite development server. Local CSS and deferred JavaScript remain available as a fallback if no build is present.

Set `APP_ENV=production` and `APP_DEBUG=false` on the server. For a single cPanel host, set `CMS_CACHE_STORE=file` to avoid database cache round trips; for multiple web servers, use a shared Redis cache store. The default follows Laravel's `CACHE_STORE`; `CMS_CACHE_TTL` defaults to 3600 seconds. Run the upgrade commands above after deploying. `cms:cache` warms published content before the first visitor, and CMS edits, media selections, visibility, trash/restore and reorder operations invalidate it automatically. Direct SQL changes should be followed by `php artisan cms:cache`.

Local seeded checks reduced home-page CMS reads from 46 to one on a cold cache and zero on a warm cache; career-page reads fell from 22 to one and zero. These are query counts, not a production network-speed guarantee. Check cold-browser loading and server cache/compression headers after deployment.

The built-in guide at `/admin/help` explains page content, menus, submenus, links and media. Every public page editor includes its own content plus the shared sections it uses. The Images, videos & logos panel provides previews, file uploads and a searchable thumbnail picker. Shared assets are marked. Each file is saved separately, without replacing the page's other content.

Link fields let administrators choose an existing public page instead of typing a path. Navigation offers Add submenu buttons and move-up/move-down controls. Technical appearance fields are kept under optional Design settings.

## Verification

```bash
php artisan test
```

Tests use an isolated in-memory SQLite database. They cover every page and section editor, collection CRUD, dynamic navigation and its save operations, authentication, original static-page copy/media parity, original asset existence, contact inquiries, media uploads, audit relationships, reseeding preservation, and reversible table upgrades.
