FROM php:8.1-apache
COPY . /var/www/html/
EXPOSE 80
RUN a2enmod rewrite
