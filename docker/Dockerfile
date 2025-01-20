FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    curl \
    zip \
    unzip \
    git \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

COPY ./../ /var/www/html/

RUN chmod +x /var/www/html/docker/wait-for-it.sh

RUN composer install --no-dev --optimize-autoloader
