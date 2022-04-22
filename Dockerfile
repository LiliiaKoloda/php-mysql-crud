FROM php:8.0-apache
COPY /workspace/testtest/ /var/www/html
RUN docker-php-ext-install mysqli
