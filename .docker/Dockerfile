FROM php:7.4

# Install Git
RUN apt-get update && apt-get install -y git zlib1g-dev libzip-dev

WORKDIR /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
 docker-php-ext-install mysqli pdo_mysql pdo_mysql zip

# Install Xdebug
RUN pecl install xdebug-2.9.8 && docker-php-ext-enable xdebug
