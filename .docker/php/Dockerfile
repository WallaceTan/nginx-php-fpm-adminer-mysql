FROM php:7-fpm

## RUN apt-get update && apt-get install vim
## https://perchrunway.com/blog/2017-01-19-getting-started-with-docker-for-local-development
RUN apt-get update -y && apt-get install -y libpng-dev libmcrypt-dev mysql-client apt-utils vim telnet

## RUN docker-php-ext-install pdo pdo_mysql mysqli mysqlnd mcrypt zip

## https://perchrunway.com/blog/2017-01-19-getting-started-with-docker-for-local-development
#RUN docker-php-ext-install -j5 gd mbstring        zip mysqli pdo pdo_mysql mysqlnd shmop
RUN  docker-php-ext-install -j5 gd mbstring mcrypt zip mysqli pdo pdo_mysql shmop
