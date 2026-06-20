# Cyberlog Portfolio

Cyberlog Portfolio is a Laravel-based portfolio project with a cyber/security-themed direction. It is intended to present profile, projects, and services through a managed web application.

## Features

- Cyber/security-themed portfolio presentation
- Laravel backend for routing and content handling
- Project/service showcase structure
- Admin or CMS-ready extension path
- Front-end asset workflow for styling and interaction

## Modules

- Portfolio module: projects, services, profile, and experience sections
- Public site module: landing pages, navigation, and content views
- Admin module: content management and protected pages when enabled
- Media module: images, uploads, and visual assets
- Data module: migrations, models, and configuration records

## System Architecture

The project follows Laravel MVC architecture. Public routes render portfolio pages through Blade or compiled assets. Controllers coordinate content retrieval and page rendering. Models can persist projects, services, and profile content. Admin routes can be added for CMS-style editing. Vite/npm assets support the presentation layer.

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
