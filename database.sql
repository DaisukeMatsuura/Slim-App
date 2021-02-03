# 簡易受注管理アプリ
CREATE TABLE `customer` (
    `id` int(11) NOT NULL,
    `corp` varchar(50) NOT NULL,
    `staff` varchar(20) NOT NULL,
    `mail` varchar(100) DEFAULT NULL,
    `tel` varchar(20) DEFAULT NULL,
    `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `orders` (
    `id` int(11) NOT NULL,
    `product_id` int(11) NOT NULL,
    `customer_id` int(11) NOT NULL,
    `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `products` (
    `id` int(11) NOT NULL,
    `name` varchar(50) NOT NULL,
    `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Markdownコンテンツ投稿アプリ
CREATE TABLE `users` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `username` VARCHAR (20) NOT NULL ,
    `password` VARCHAR (20) NOT NULL ,
    `mail` VARCHAR (50) NULL ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE `articles` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `user_id` INT NOT NULL ,
    `content` TEXT NOT NULL ,
    `created` TIMESTAMP NOT NULL ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;

CREATE TABLE `comments` (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `user_id` INT NOT NULL ,
    `article_id` INT NOT NULL ,
    `message` VARCHAR (255) NOT NULL ,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_unicode_ci;