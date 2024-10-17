# Use PHP 8.2-FPM as the base image
FROM php:8.2-fpm

# Install Nginx and any necessary PHP extensions
RUN apt-get update && apt-get install -y nginx supervisor \
    && docker-php-ext-install pdo mbstring

# Copy your application files into the container
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Copy your Nginx configuration file
COPY ./nginx.conf /etc/nginx/nginx.conf

# Install Composer dependencies
RUN apt-get install -y unzip curl \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install --no-dev --optimize-autoloader

# Set environment variables
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Expose the port for Nginx
EXPOSE 80

# Start Nginx and PHP-FPM using supervisor
CMD ["/usr/bin/supervisord", "-n"]
