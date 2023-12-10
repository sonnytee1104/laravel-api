FROM php:8.1-fpm-alpine

# Install Composer dependencies
RUN composer install --no-interaction --prefer-dist

# Copy source code
COPY . D:\XAMPP\htdocs\laravel-api

# Copy environment file
COPY .env D:\XAMPP\htdocs\laravel-api/.env

# Create storage directories
RUN mkdir -p /app/storage/app/framework
RUN mkdir -p /app/storage/app/public
RUN mkdir -p /app/bootstrap/cache

# Set ownership of storage directories
RUN chown -R www-data:www-data /app/storage

# Expose application port
EXPOSE 80

# Run application
CMD ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "80"]
