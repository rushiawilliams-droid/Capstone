
FROM node:22-alpine AS assets

WORKDIR /app

COPY package.json ./
RUN npm install

COPY . .
RUN npm run build

FROM richarvey/nginx-php-fpm:3.1.6

WORKDIR /var/www/html

COPY . .
COPY --from=assets /app/public/build ./public/build

ENV WEBROOT=/var/www/html/public
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV LOG_CHANNEL=stderr
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV SKIP_COMPOSER=1
ENV RUN_SCRIPTS=1

RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist \
    && mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80

CMD ["/start.sh"]
