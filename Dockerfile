# Use PHP 8.2-FPM as the base image
FROM php:8.2-fpm

# Install Nginx and necessary PHP extensions
RUN apt-get update && apt-get install -y nginx unzip curl \
    && docker-php-ext-install pdo mbstring

# Copy application files into the container
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install --no-dev --optimize-autoloader

# Image configuration
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel configuration
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV LOG_CHANNEL=stderr

# Allow Composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER=1

# Expose port 80 for Nginx
EXPOSE 80

# Start Nginx and PHP-FPM
CMD ["nginx", "-g", "daemon off;"]
