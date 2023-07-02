drop database if exists pic;
create database pic default character set utf8 collate utf8_general_ci;
grant all on pic.* to 'staff'@'localhost' identified by 'password';
use pic;

/*uid*/
CREATE TABLE `picture`
(
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(128) not null,
    data LongText not null
);
