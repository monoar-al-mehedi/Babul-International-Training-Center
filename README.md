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

## Free live deploy (Render)

One-click free hosting:

[![Deploy to Render](https://render.com/images/deploy-to-render-button.svg)](https://render.com/deploy?repo=https://github.com/monoar-al-mehedi/Babul-International-Training-Center)

1. Open the button / link above
2. Sign in with GitHub (free Render account)
3. Click **Apply** / **Deploy Blueprint**
4. Wait for build — your live URL will look like `https://babul-international-training-center.onrender.com`

> Free tier sleeps after idle time; first visit may take ~30–60 seconds to wake.

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
