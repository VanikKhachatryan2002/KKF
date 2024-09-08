#!/bin/bash

# Exit on errors
set -e

# Define your server and path
SERVER_USER="your-username"
SERVER_IP="your-server-ip"
DEPLOY_PATH="/path/to/your/deployment/directory"

# Deploy
ssh $SERVER_USER@$SERVER_IP <<EOF
  cd $DEPLOY_PATH
  git pull origin main
  composer install --no-dev --optimize-autoloader
  php artisan migrate --force
  php artisan cache:clear
EOF
