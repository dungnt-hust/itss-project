FROM php:8.1-fpm

RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli


# RUN apt-get update && apt-get install -y \
#     && docker-php-ext-install pdo pdo_mysql \
#     && docker-php-ext-enable pdo pdo_mysql