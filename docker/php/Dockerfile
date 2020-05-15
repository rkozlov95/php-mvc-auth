FROM php:7.4-fpm

RUN docker-php-ext-install pdo_mysql

WORKDIR /srv/www/app

RUN usermod -u 1000 www-data
