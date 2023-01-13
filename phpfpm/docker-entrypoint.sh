#!/bin/bash

# Migrations: Création des tables / schémas de la base de données
php bin/console make:migration
php bin/console doctrine:migrations:migrate

# Création crud
php bin/console make:crud

# Exécution du projet
php-fpm -F --pid /opt/bitnami/php/tmp/php-fpm.pid -y /opt/bitnami/php/etc/php-fpm.conf
