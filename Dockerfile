FROM php:8.0-apache
COPY /home/ubuntu/workspace/ /var/www/html
RUN docker-php-ext-install mysqli
