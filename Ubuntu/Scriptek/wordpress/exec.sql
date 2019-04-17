CREATE DATABASE wordpressdb;
CREATE USER wordpressuser@localhost IDENTIFIED BY 'wordpresspassword';
GRANT ALL PRIVILEGES ON wordpressdb.* TO wordpressuser@localhost;
FLUSH PRIVILEGES;
