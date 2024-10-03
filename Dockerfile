# Use the official PHP image with FPM
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project files to the working directory
COPY . .

# Install project dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy Nginx configuration
COPY nginx/default.conf /etc/nginx/conf.d/default.conf

# Expose port 80 for Nginx and port 9000 for PHP-FPM
EXPOSE 80 9000

# Start Nginx and PHP-FPM
CMD service nginx start && php-fpm
