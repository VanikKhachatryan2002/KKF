#!/bin/bash
set -e

# Your deployment steps
composer install --no-dev --optimize-autoloader
php artisan key:generate
npm install
npm run prod
php artisan cache:clear

# Start the PHP built-in server (if that's your approach)
php artisan serve --host=0.0.0.0 --port=10000;
