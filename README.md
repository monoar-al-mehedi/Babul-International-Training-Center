# Babul International Training Center

Public-facing website for **Babul International Training Center (BITC)** — Laravel + Blade + Bootstrap.

## Requirements

- PHP **8.2+** (recommended: PHP 8.3)
- Composer
- Node.js 20+
- MySQL / MariaDB (XAMPP)

> On this machine, system `php` may still point to PHP 7.4. Use PHP 8.3 for artisan/composer:
>
> `C:\Users\Rokan\AppData\Local\Microsoft\WinGet\Packages\PHP.PHP.8.3_Microsoft.Winget.Source_8wekyb3d8bbwe\php.exe`

## Setup

```bash
# 1) Install PHP dependencies
composer install

# 2) Environment
copy .env.example .env
php artisan key:generate

# 3) Start MySQL (XAMPP), then create DB
# CREATE DATABASE babul_itc CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

# 4) Frontend
npm install
npm run build

# 5) Run
php artisan serve
```

Visit: http://127.0.0.1:8000

## Stack

- Laravel 13
- Blade layouts/components
- Bootstrap 5 + Bootstrap Icons
- Vite
- MySQL (Eloquent ready for later phases)

## Current phase

Phase 1 foundation:

- App layout, header/navbar/footer
- Public routes for all main pages
- Placeholder inner pages
- Home shell with brand header matching reference navigation
