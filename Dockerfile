FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    zip unzip git curl libzip-dev libicu-dev

RUN docker-php-ext-install pdo pdo_mysql zip intl

RUN a2enmod rewrite

COPY . /var/www/html/

WORKDIR /var/www/html
