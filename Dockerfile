FROM php:8.0-apache
COPY /home/ubuntu/workspace/testtest /var/www/html
RUN docker-php-ext-install mysqli
