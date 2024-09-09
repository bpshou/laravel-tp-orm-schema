FROM composer:2.5 AS COMPOSER

FROM php:8.2-fpm-buster

LABEL maintainer="php:8.2-fpm-buster<decezz@qq.com>"

# 安装composer
COPY --from=COMPOSER /usr/bin/composer /usr/local/bin/composer

# install install-php-extensions
RUN curl -fsSL https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions > /usr/local/bin/install-php-extensions && \
    chmod +x /usr/local/bin/install-php-extensions

RUN apt update && apt -y install zip && \
    install-php-extensions pdo_mysql

WORKDIR /var/www/html
