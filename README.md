# journal
## Окружение
* php 7.4
* mysql или mariadb
* nginx

## Создание базы данных и пользователя
sudo mysql  
CREATE DATABASE POSTS;  
CREATE USER foo@localhost IDENTIFIED BY 'ashbhasdf121jnj';  
GRANT ALL ON POSTS.* TO foo@localhost;  
quit;

## Установка пакетов
./composer.phar install

## Запуск миграции
vendor/bin/phinx migrate

## Настройка nginx
[Пример настройки nginx] (./journal.conf)
