if ! [ -f "/var/www/wordpress/wp-config.php" ]; then
    wp core config --dbhost=${DB_HOST} --dbname=${DB_NAME} --dbuser=${MYSQL_USER} --dbpass=${MYSQL_PASSWORD} --allow-root
    wp core install --url=${DOMAIN_NAME} --title=${TITLE} --admin_user=${USER_NAME} --admin_password=${MYSQL_ROOT_PASSWORD} --admin_email=${USER_ADMIN_EMAIL} --skip-email --allow-root
    wp user create ${MYSQL_USER} ${USER_EMAIL} --allow-root --role=subscriber --user_pass=${MYSQL_PASSWORD}
fi
/usr/sbin/php-fpm7.3 --nodaemonize