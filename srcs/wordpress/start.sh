if ! [ -f "/var/www/wordpress/wp-config.php" ]; then
    sleep 10
    wp core config --dbhost=${DB_HOST} --dbname=${DB_NAME} --dbuser=${MYSQL_USER} --dbpass=${MYSQL_PASSWORD} --allow-root
    wp core install --url=${DOMAIN_NAME} --title=${TITLE} --admin_user=${DB_USER_ADMIN} --admin_password=${DBUSER_ADMIN_PASS} --admin_email=${USER_ADMIN_EMAIL} --skip-email --allow-root
    wp user create ${MYSQL_USER} ${USER_EMAIL} --allow-root --role=subscriber --user_pass=${MYSQL_PASSWORD}
fi
/usr/sbin/php-fpm7.3 --nodaemonize

#docker without sudo:
#sudo chmod ug+s /usr/bin/docker
