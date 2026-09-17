#!/bin/bash
set -e

# Use Render's PORT env var (default 10000)
PORT="${PORT:-10000}"

# Update Apache to listen on the correct port
sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
sed -i "s/:80/:${PORT}/" /etc/apache2/sites-available/000-default.conf

# Create .env from environment variables if it doesn't exist
if [ ! -f .env ]; then
    echo "APP_NAME=${APP_NAME:-ServiceFlow}" > .env
    echo "APP_ENV=${APP_ENV:-production}" >> .env
    echo "APP_DEBUG=${APP_DEBUG:-false}" >> .env
    echo "APP_URL=${APP_URL:-http://localhost}" >> .env
    echo "APP_KEY=" >> .env
    echo "LOG_CHANNEL=${LOG_CHANNEL:-stderr}" >> .env
    echo "DB_CONNECTION=${DB_CONNECTION:-sqlite}" >> .env
    echo "SESSION_DRIVER=${SESSION_DRIVER:-file}" >> .env
    echo "CACHE_STORE=${CACHE_STORE:-file}" >> .env
fi

# Generate app key if not set
if ! grep -q "APP_KEY=base64:" .env 2>/dev/null; then
    php artisan key:generate --force
fi

# Cache config and routes for performance
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations
php artisan migrate --force

# Start Apache
exec apache2-foreground
