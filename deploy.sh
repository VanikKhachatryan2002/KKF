#!/bin/bash
set -e

# Ensure the script is executable
chmod +x deploy.sh

# Deployment steps
composer install --no-dev --optimize-autoloader
php artisan key:generate
npm install
npm run prod
php artisan cache:clear

# Start the PHP-FPM server
php-fpm
