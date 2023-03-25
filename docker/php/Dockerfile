FROM php:8.1-fpm

# ставим необходимые для нормальной работы модули
RUN apt-get update

WORKDIR /data/mysite.local/public/

VOLUME /data

CMD ["php-fpm"]