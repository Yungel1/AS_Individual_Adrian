FROM php:7-apache
RUN apt -qq update
RUN docker-php-ext-install mysqli
COPY miweb/* /var/www/html/ 
