#!/bin/bash
set -e

# Your deployment steps
composer install --no-dev --optimize-autoloader
php artisan key:generate
npm install
npm run prod
php artisan cache:clear

# Start the PHP-FPM server (if you're using a setup with Nginx)
php-fpm
