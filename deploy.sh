#!/bin/bash

# Exit on errors
set -e

# Install Composer dependencies without development packages
composer install --no-dev --optimize-autoloader

# Generate application key (if not already set)
php artisan key:generate

# Clear any cached views or configuration
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Build front-end assets
npm install
npm run prod

# Ensure correct file permissions (if necessary)
# sudo chown -R www-data:www-data /path/to/your/deployment/directory
