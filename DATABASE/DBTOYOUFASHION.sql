DROP DATABASE DBTOYOUFASHION;
CREATE DATABASE IF NOT EXISTS DBTOYOUFASHION;

USE DBTOYOUFASHION;

CREATE TABLE `users` (
	`id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`email` varchar(50) NOT NULL,
	`password` varchar(50) NOT NULL,
	`telephone` int(11) NOT NULL,
	`address` varchar(300) NOT NULL,
	`zipcode` varchar(9) NOT NULL,
    `country` varchar(50) NOT NULL,
	`nif` varchar(9) DEFAULT NULL
);

CREATE TABLE `admin` (
	`id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`email` varchar(50) NOT NULL,
	`password` varchar(50) NOT NULL
);

CREATE TABLE `products` (
	`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`name` varchar(80) DEFAULT NULL,
	`category` varchar(100) DEFAULT NULL,
	`size` varchar(1) NOT NULL,
	`price` decimal(5,0) DEFAULT NULL,
	`description` text,
    `image` text NOT NULL
);

CREATE TABLE `orders` (
	`id` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`iduser` int(11) NOT NULL,
    `orderstatus` varchar(50) DEFAULT NULL,
	`numberproduct` int(11) DEFAULT NULL,
    `idproduct` int DEFAULT NULL,
	`dateorder` datetime DEFAULT NULL,
	`amount` decimal(5,0) DEFAULT NULL,
    FOREIGN KEY (iduser) REFERENCES users(id),
    FOREIGN KEY (idproduct) REFERENCES products(id)
);