# define main image
FROM bitnami/php-fpm:8.2-debian-11

# copy php files
ADD ./symfony /app/
ADD docker-entrypoint.sh /app

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

CMD ["/app/docker-entrypoint.sh"]
