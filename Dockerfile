FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    vim \
    unzip \
    libicu-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY ./docker/php/docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/

WORKDIR /var/www/app
COPY --chown=www-data:www-data . /var/www/app
RUN chown www-data:www-data /var/www/app
