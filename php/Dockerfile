FROM php:fpm
RUN docker-php-ext-install pdo pdo_mysql
RUN pecl install xdebug && docker-php-ext-enable opcache xdebug
RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini
COPY php.ini /usr/local/etc/php/conf.d/
