#!/usr/bin/env bash
set -euo pipefail

cd /var/www/html

if [ -z "${APP_URL:-}" ] && [ -n "${RENDER_EXTERNAL_URL:-}" ]; then
  export APP_URL="${RENDER_EXTERNAL_URL}"
fi

mkdir -p \
  storage/framework/cache \
  storage/framework/sessions \
  storage/framework/views \
  storage/logs \
  bootstrap/cache \
  database

if [ ! -f database/database.sqlite ]; then
  touch database/database.sqlite
fi

php artisan package:discover --ansi --no-interaction
php artisan migrate --force --no-interaction
php artisan config:cache
php artisan route:cache
php artisan view:cache

exec php artisan serve --host=0.0.0.0 --port="${PORT:-8000}"
