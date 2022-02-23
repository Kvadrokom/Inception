FROM debian:buster

RUN apt-get update

RUN apt-get -y install php7.3 php-mysqli php-fpm mariadb-client
COPY ./www.conf /etc/php/7.3/fpm/pool.d

ADD https://ru.wordpress.org/wordpress-5.7.2-ru_RU.tar.gz /var/www/
RUN cd /var/www && tar -xzvf wordpress-5.7.2-ru_RU.tar.gz
RUN rm -f /var/www/wordpress-5.7.2-ru_RU.tar.gz
RUN rm -f /var/www/wordpress/wp-config-sample.php
COPY ./wp-config.php ./var/www/wordpress/
COPY start.sh /
RUN mkdir ./run/php/
RUN	chmod 777 /start.sh
CMD	/start.sh
