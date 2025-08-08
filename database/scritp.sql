CREATE DATABASE solar_system_web
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;
use solar_system_web;

create table planets (
    id_planet varchar(10) PRIMARY KEY,
    planet_name varchar(30) UNIQUE,
    information text(1000),
    image_name varchar(30)
);

create table articles (
    id_article varchar(10) PRIMARY KEY,
    title varchar(200),
    body text(1000),
    id_planet varchar(10) ,
    FOREIGN KEY (id_planet) references planets(id_planet)
);