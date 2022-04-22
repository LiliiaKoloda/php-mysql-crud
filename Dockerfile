FROM php:8.0-apache
RUN cp ./ /var/www/html
RUN docker-php-ext-install mysqli
