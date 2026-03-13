#!/bin/bash
set -e

# Run migrations
echo "Running migrations..."
php artisan migrate --force

# Seed database
echo "Seeding database..."
php artisan db:seed --force

# Start Apache
echo "Starting Apache..."
exec apache2-foreground
