FROM php:8.0-apache
RUN cp -r /home/ubuntu/workspace/testtest/ /var/www/html
RUN docker-php-ext-install mysqli
