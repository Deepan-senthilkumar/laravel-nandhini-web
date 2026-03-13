#!/bin/bash
set -e

# Run migrations (Commented out for frontend-only demo)
# echo "Running migrations..."
# php artisan migrate --force

# Seed database (Commented out for frontend-only demo)
# echo "Seeding database..."
# php artisan db:seed --force

# Start Apache
echo "Starting Apache (Frontend Only Mode)..."
exec apache2-foreground
