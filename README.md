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

The project follows Laravel MVC architecture. The Page, PageSection and PageContent Eloquent models store page ownership, reusable sections and editable content in conventional tables. A many-to-many page/section relationship shares content without duplication. NavigationItem owns the navbar and its child links. Public Blade views read database content. Admin controllers validate changes, save through Eloquent, and record audit history. Media uploads and contact inquiries are also managed through Eloquent. Authentication uses Laravel UI, with Bootstrap assets served locally.

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

The built-in guide at `/admin/help` explains page content, menus, submenus, links and media. Every public page editor includes its own content plus the shared sections it uses. The Images, videos & logos panel provides previews, file uploads and a searchable thumbnail picker. Shared assets are marked. Each file is saved separately, without replacing the page's other content.

Link fields let administrators choose an existing public page instead of typing a path. Navigation offers Add submenu buttons and move-up/move-down controls. Technical appearance fields are kept under optional Design settings.

## Verification

```bash
php artisan test
```

Tests use an isolated in-memory SQLite database. They cover every page and section editor, collection CRUD, dynamic navigation and its save operations, authentication, original static-page copy/media parity, original asset existence, contact inquiries, media uploads, audit relationships, reseeding preservation, and reversible table upgrades.
