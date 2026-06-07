FROM php:8.1-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN sed -i 's/^Listen 80/Listen ${PORT:-80}/' /etc/apache2/ports.conf \
    && sed -i 's/*:80/*:${PORT:-80}/' /etc/apache2/sites-enabled/000-default.conf

COPY . /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]