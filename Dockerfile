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
RUN docker-php-ext-install pdo pdo_mysql zip intl

# Configure Apache
RUN a2enmod rewrite && \
    a2dismod mpm_event || true && \
    a2dismod mpm_worker || true && \
    a2enmod mpm_prefork

# Set Apache document root to Laravel public folder
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Fix permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# Make the start script executable
RUN chmod +x /var/www/html/docker-start.sh

# Expose Apache port
EXPOSE 80

# Start with our custom script
CMD ["/var/www/html/docker-start.sh"]
