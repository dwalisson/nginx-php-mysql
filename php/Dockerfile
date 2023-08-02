FROM php:fpm

ARG user
ARG uid

RUN apt-get update && apt-get install git libzip-dev zip libxml2-dev libcurl4-openssl-dev libonig-dev -y
RUN docker-php-ext-install pdo pdo_mysql zip xml intl curl mbstring
RUN pecl install xdebug && docker-php-ext-enable opcache xdebug
RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini

COPY php.ini /usr/local/etc/php/conf.d/
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && chown -R $user:$user /home/$user

WORKDIR /var/www/app

USER $user
