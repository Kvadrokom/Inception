CREATE DATABASE RemDB;
CREATE USER 'rem'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON RemDB.* TO 'rem'@'%';
FLUSH PRIVILEGES;

ALTER USER 'root'@'localhost' IDENTIFIED BY '123';
