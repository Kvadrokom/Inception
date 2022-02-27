FROM debian:buster

RUN apt-get update

RUN apt-get -y install php7.3 php-mysqli php-fpm mariadb-client curl vim
COPY ./www.conf /etc/php/7.3/fpm/pool.d

ADD https://ru.wordpress.org/wordpress-5.7.2-ru_RU.tar.gz /var/www/
RUN cd /var/www && tar -xzvf wordpress-5.7.2-ru_RU.tar.gz
RUN rm -f /var/www/wordpress-5.7.2-ru_RU.tar.gz

# COPY ./wp-config.php ./var/www/wordpress/
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

RUN rm -f /var/www/wordpress/wp-config-sample.php
COPY ./start.sh ./var/www/wordpress
WORKDIR /var/www/wordpress
RUN mkdir /run/php/
CMD	./start.sh
