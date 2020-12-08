FROM php:7.4-fpm

COPY web-app.conf /usr/local/etc/php-fpm.d/web-app.conf
COPY ./page/ /srv/my_php_page

RUN docker-php-ext-install mysqli

RUN usermod -u 1000 www-data \
 && groupmod -g 1000 www-data \
 && chgrp -R staff /usr/local/etc/php-fpm.d/web-app.conf
