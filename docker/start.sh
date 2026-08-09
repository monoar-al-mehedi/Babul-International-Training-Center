#!/usr/bin/env bash
set -euo pipefail

cd /var/www/html

if [ -z "${APP_URL:-}" ] && [ -n "${RENDER_EXTERNAL_URL:-}" ]; then
  export APP_URL="${RENDER_EXTERNAL_URL}"
fi

# Render generateValue is not a valid Laravel APP_KEY format.
if [[ "${APP_KEY:-}" != base64:* ]]; then
  export APP_KEY="base64:$(php -r 'echo base64_encode(random_bytes(32));')"
fi

export DB_CONNECTION="${DB_CONNECTION:-sqlite}"
export DB_DATABASE="${DB_DATABASE:-/var/www/html/database/database.sqlite}"
export SESSION_DRIVER="${SESSION_DRIVER:-file}"
export CACHE_STORE="${CACHE_STORE:-file}"
export QUEUE_CONNECTION="${QUEUE_CONNECTION:-sync}"

mkdir -p \
  storage/framework/cache \
  storage/framework/sessions \
  storage/framework/views \
  storage/logs \
  bootstrap/cache \
  database

if [ ! -f "${DB_DATABASE}" ]; then
  mkdir -p "$(dirname "${DB_DATABASE}")"
  touch "${DB_DATABASE}"
fi

php artisan package:discover --ansi --no-interaction
php artisan migrate --force --no-interaction
php artisan config:cache
php artisan route:cache
php artisan view:cache

exec php artisan serve --host=0.0.0.0 --port="${PORT:-8000}"
