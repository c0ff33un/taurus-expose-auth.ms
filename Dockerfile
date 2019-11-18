FROM php:7.2-apache

RUN apt-get update && apt-get install -y \
        libxml2-dev \
        libcurl3-dev \
    && docker-php-ext-install -j$(nproc) soap \
    && docker-php-ext-install -j$(nproc) curl

RUN mkdir /myapp
WORKDIR /myapp

COPY . /myapp

ENTRYPOINT [ "php", "-S", "0.0.0.0:8081" ]