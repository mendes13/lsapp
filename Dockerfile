FROM php:7.2-fpm-alpine
WORKDIR /var/www
RUN rm -rf /var/www
RUN ln -s public html
RUN docker-php-ext-install pdo pdo_mysql

