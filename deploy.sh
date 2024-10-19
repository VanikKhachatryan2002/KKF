#!/bin/bash
set -e
set -x

# Set the application environment
export APP_ENV=production

# Deployment steps
composer install --no-dev --optimize-autoloader --prefer-dist
php artisan key:generate
npm install
npm run prod
php artisan cache:clear || echo "Cache clear failed, continuing..."

# Run migrations
php artisan migrate --force

# Start the PHP-FPM server
php-fpm
