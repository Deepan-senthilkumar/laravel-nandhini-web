FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    zip unzip git curl libzip-dev

RUN docker-php-ext-install pdo pdo_mysql

COPY . /var/www/html/

WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

RUN composer install --no-dev --optimize-autoloader

RUN php artisan config:cache

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
