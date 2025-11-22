# Use PHP 8.2 CLI (for Laravel serve)
FROM php:8.2-cli-alpine

# Install system dependencies and PHP extensions
RUN apk add --no-cache \
    git \
    curl \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    opcache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy composer files first for better caching
COPY composer.json composer.lock ./

# Install PHP dependencies (production only)
RUN composer install --no-dev --no-interaction --optimize-autoloader --no-scripts

# Copy package files
COPY package.json package-lock.json ./

# Install Node dependencies
RUN npm ci

# Copy application files
COPY . .

# Set permissions for storage and cache (will be set again at runtime)
RUN mkdir -p storage/framework/{sessions,views,cache} storage/logs bootstrap/cache database && \
    chmod -R 775 storage bootstrap/cache database

# Build frontend assets for production
ENV NODE_ENV=production
RUN npm run build

# Optimize Laravel (will be done at runtime if needed)
# Note: Config caching requires .env to be set, so we'll do this in the start script

# Expose port (Render will set PORT env var)
EXPOSE 8000

# Create a startup script
RUN echo '#!/bin/sh' > /start.sh && \
    echo 'set -e' >> /start.sh && \
    echo 'echo "Starting Laravel application..."' >> /start.sh && \
    echo 'if [ ! -f .env ]; then' >> /start.sh && \
    echo '  echo "Creating .env file from .env.example..."' >> /start.sh && \
    echo '  cp .env.example .env || true' >> /start.sh && \
    echo 'fi' >> /start.sh && \
    echo 'echo "Updating .env with environment variables..."' >> /start.sh && \
    echo 'if [ -n "$APP_KEY" ]; then' >> /start.sh && \
    echo '  echo "Setting APP_KEY from environment..."' >> /start.sh && \
    echo '  grep -v "^APP_KEY=" .env > .env.tmp 2>/dev/null || true' >> /start.sh && \
    echo '  echo "APP_KEY=$APP_KEY" >> .env.tmp' >> /start.sh && \
    echo '  mv .env.tmp .env' >> /start.sh && \
    echo 'fi' >> /start.sh && \
    echo 'if [ -n "$APP_ENV" ]; then' >> /start.sh && \
    echo '  grep -v "^APP_ENV=" .env > .env.tmp 2>/dev/null || true' >> /start.sh && \
    echo '  echo "APP_ENV=$APP_ENV" >> .env.tmp' >> /start.sh && \
    echo '  mv .env.tmp .env' >> /start.sh && \
    echo 'fi' >> /start.sh && \
    echo 'if [ -n "$APP_DEBUG" ]; then' >> /start.sh && \
    echo '  grep -v "^APP_DEBUG=" .env > .env.tmp 2>/dev/null || true' >> /start.sh && \
    echo '  echo "APP_DEBUG=$APP_DEBUG" >> .env.tmp' >> /start.sh && \
    echo '  mv .env.tmp .env' >> /start.sh && \
    echo 'fi' >> /start.sh && \
    echo 'if [ -n "$APP_URL" ]; then' >> /start.sh && \
    echo '  grep -v "^APP_URL=" .env > .env.tmp 2>/dev/null || true' >> /start.sh && \
    echo '  echo "APP_URL=$APP_URL" >> .env.tmp' >> /start.sh && \
    echo '  mv .env.tmp .env' >> /start.sh && \
    echo 'fi' >> /start.sh && \
    echo 'if [ -n "$DB_CONNECTION" ]; then' >> /start.sh && \
    echo '  grep -v "^DB_CONNECTION=" .env > .env.tmp 2>/dev/null || true' >> /start.sh && \
    echo '  echo "DB_CONNECTION=$DB_CONNECTION" >> .env.tmp' >> /start.sh && \
    echo '  mv .env.tmp .env' >> /start.sh && \
    echo 'fi' >> /start.sh && \
    echo 'if [ -n "$DB_DATABASE" ]; then' >> /start.sh && \
    echo '  grep -v "^DB_DATABASE=" .env > .env.tmp 2>/dev/null || true' >> /start.sh && \
    echo '  echo "DB_DATABASE=$DB_DATABASE" >> .env.tmp' >> /start.sh && \
    echo '  mv .env.tmp .env' >> /start.sh && \
    echo 'fi' >> /start.sh && \
    echo 'echo "Creating database directory and file..."' >> /start.sh && \
    echo 'mkdir -p /var/www/html/database' >> /start.sh && \
    echo 'if [ ! -f /var/www/html/database/database.sqlite ]; then' >> /start.sh && \
    echo '  touch /var/www/html/database/database.sqlite' >> /start.sh && \
    echo '  echo "SQLite database file created"' >> /start.sh && \
    echo 'fi' >> /start.sh && \
    echo 'echo "Setting storage permissions..."' >> /start.sh && \
    echo 'chmod -R 775 storage bootstrap/cache database || true' >> /start.sh && \
    echo 'chown -R www-data:www-data storage bootstrap/cache database || true' >> /start.sh && \
    echo 'echo "Checking application key..."' >> /start.sh && \
    echo 'if ! grep -q "APP_KEY=base64:" .env 2>/dev/null || [ -z "$(grep "APP_KEY=base64:" .env)" ]; then' >> /start.sh && \
    echo '  echo "Generating application key..."' >> /start.sh && \
    echo '  php artisan key:generate --force || true' >> /start.sh && \
    echo 'else' >> /start.sh && \
    echo '  echo "APP_KEY already set in .env"' >> /start.sh && \
    echo 'fi' >> /start.sh && \
    echo 'echo "Running database migrations..."' >> /start.sh && \
    echo 'php artisan migrate --force || true' >> /start.sh && \
    echo 'echo "Clearing caches..."' >> /start.sh && \
    echo 'php artisan config:clear || true' >> /start.sh && \
    echo 'php artisan route:clear || true' >> /start.sh && \
    echo 'php artisan view:clear || true' >> /start.sh && \
    echo 'echo "Caching configuration..."' >> /start.sh && \
    echo 'php artisan config:cache || true' >> /start.sh && \
    echo 'php artisan route:cache || true' >> /start.sh && \
    echo 'php artisan view:cache || true' >> /start.sh && \
    echo 'echo "Starting server on port ${PORT:-8000}..."' >> /start.sh && \
    echo 'php artisan serve --host=0.0.0.0 --port=${PORT:-8000}' >> /start.sh && \
    chmod +x /start.sh

# Start Laravel server
CMD ["/start.sh"]

