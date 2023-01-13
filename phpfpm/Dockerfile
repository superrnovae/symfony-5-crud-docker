# multi stage build
FROM composer:lts as installer

# define working directory
WORKDIR /app

# copy in the lock files
COPY ./symfony/composer.json /app/composer.json
COPY ./symfony/composer.lock /app/composer.lock
COPY ./symfony/symfony.lock /app/symfony.lock

# install dependencies 
RUN composer install

# define main image
FROM bitnami/php-fpm:8.2-debian-11

# copy php files
ADD ./symfony /app/
ADD docker-entrypoint.sh /app

# copy dependencies from the installer stage
COPY --from=installer /app/vendor/ /app/vendor
COPY --from=installer /app/var/ /app/var

# Set working directory
WORKDIR /app

# define entry point
CMD ["/app/docker-entrypoint.sh"]
