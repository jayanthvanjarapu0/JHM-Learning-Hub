FROM php:8.1-apache
RUN apt-get update && apt-get install -y \
    && docker-php-ext-install mysqli pdo pdo_mysql
RUN a2dismod mpm_event && a2enmod mpm_prefork
COPY . /var/www/html/
EXPOSE 80