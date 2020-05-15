CREATE USER IF NOT EXISTS poc_laravel_user@localhost;

CREATE DATABASE IF NOT EXISTS poc_laravel;

GRANT ALL ON poc_laravel.* TO poc_laravel_user@localhost IDENTIFIED BY 'somePassword';
