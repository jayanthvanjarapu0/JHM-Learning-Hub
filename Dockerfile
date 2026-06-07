FROM php:8.1-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql
COPY . /var/www/html/
RUN echo "Listen \${PORT}" > /etc/apache2/ports.conf
RUN echo '<VirtualHost *:${PORT}>\n\tDocumentRoot /var/www/html\n</VirtualHost>' > /etc/apache2/sites-enabled/000-default.conf
EXPOSE 80
CMD ["apache2-foreground"]