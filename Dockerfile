FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git \
    curl \
    libzip-dev \
    libicu-dev \
    libsqlite3-dev

# Install PHP extensions required by Laravel
RUN docker-php-ext-install pdo pdo_mysql pdo_sqlite zip intl

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set Apache document root to Laravel public folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Create SQLite database file
RUN mkdir -p database && touch database/database.sqlite

# Run migrations and seed data
# Note: Using --force for production migrations
RUN php artisan migrate --force && php artisan db:seed --force

# Set permissions required by Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# Make the start script executable
RUN chmod +x /var/www/html/docker-start.sh

# Make the start script executable
RUN chmod +x /var/www/html/docker-start.sh

# Expose Apache port
EXPOSE 80

# Start with our custom script
CMD ["/var/www/html/docker-start.sh"]
