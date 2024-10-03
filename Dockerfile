# Use the official PHP image with Composer
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project files to the working directory
COPY . .

# Install project dependencies
RUN composer install --optimize-autoloader --no-dev

# Expose port 9000 and start PHP-FPM server
EXPOSE 9000
CMD ["php-fpm"]
