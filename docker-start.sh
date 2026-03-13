#!/bin/bash
<<<<<<< HEAD
set -e

# Run migrations (Commented out for frontend-only demo)
# echo "Running migrations..."
# php artisan migrate --force

# Seed database (Commented out for frontend-only demo)
# echo "Seeding database..."
# php artisan db:seed --force

# Start Apache
echo "Starting Apache (Frontend Only Mode)..."
=======

# Ensure the database file exists if using sqlite
if [ "$DB_CONNECTION" = "sqlite" ] || [ -z "$DB_CONNECTION" ]; then
    mkdir -p /var/www/html/database
    if [ ! -f /var/www/html/database/database.sqlite ]; then
        echo "Creating database.sqlite..."
        touch /var/www/html/database/database.sqlite
    fi
    # Set permissions for the database directory and file
    chmod -R 775 /var/www/html/database
    chown -R www-data:www-data /var/www/html/database
fi

# Run migrations and seeders if needed
echo "Running migrations..."
php artisan migrate --force

# Optimize Laravel for production
echo "Optimizing Laravel..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Start Apache in the foreground
echo "Starting Apache..."
>>>>>>> 6a759e5036fda1035cc0c063e54488392a0fa321
exec apache2-foreground
