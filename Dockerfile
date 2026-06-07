FROM php:8.1-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql
COPY . /var/www/html/
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
CMD bash -c "sed -i 's/80/${PORT}/g' /etc/apache2/ports.conf /etc/apache2/sites-enabled/*.conf && apache2-foreground"