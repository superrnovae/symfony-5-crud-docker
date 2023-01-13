# define main image
FROM bitnami/php-fpm:8.2-debian-11

# copy php files
COPY ./symfony /app/
COPY docker-entrypoint.sh /app
COPY ./php-fpm.conf /opt/bitnami/php/etc/php-fpm.d/www.conf

# install dependencies
RUN composer install --no-plugins --no-scripts

# Set working directory
WORKDIR /app

# define entry point
CMD ["/app/docker-entrypoint.sh"]
