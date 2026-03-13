#!/bin/bash

# Run migrations and seeds
php artisan migrate --force
php artisan db:seed --force

# Start Apache
apache2-foreground
