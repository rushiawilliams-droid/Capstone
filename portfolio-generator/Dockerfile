FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    git unzip libpq-dev \
    && docker-php-ext-install pdo_pgsql \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN echo "=== CHECKING PORTFOLIO TEMPLATES ===" && ls -la resources/views/portfolios/templates/ && test -f resources/views/portfolios/templates/template_1.blade.php

RUN composer install --no-dev --optimize-autoloader

RUN chmod -R 775 storage bootstrap/cache

RUN php artisan view:clear && php artisan config:clear

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000