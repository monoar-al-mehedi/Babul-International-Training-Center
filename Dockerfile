FROM php:8.3-cli-bookworm

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        unzip \
        curl \
        libsqlite3-dev \
        nodejs \
        npm \
    && docker-php-ext-install pdo_sqlite \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist

COPY package.json package-lock.json ./
RUN npm ci

COPY . .

RUN composer dump-autoload --optimize --no-dev \
    && npm run build \
    && mkdir -p \
        storage/framework/cache \
        storage/framework/sessions \
        storage/framework/views \
        storage/logs \
        bootstrap/cache \
        database \
    && touch database/database.sqlite \
    && chmod -R 775 storage bootstrap/cache database \
    && chmod +x docker/start.sh \
    && npm cache clean --force \
    && rm -rf /root/.npm

ENV PORT=8000
EXPOSE 8000

CMD ["docker/start.sh"]
