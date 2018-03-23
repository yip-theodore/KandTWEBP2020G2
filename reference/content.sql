DROP SCHEMA IF EXISTS `kandt`;

CREATE SCHEMA `kandt`
DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE kandt;

CREATE TABLE `content` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
`slug` VARCHAR(100) NOT NULL,
`title` VARCHAR(110) NOT NULL,
`h1` VARCHAR(70) NOT NULL,
`p` VARCHAR(3000) NOT NULL,
`span-class` VARCHAR(100) NOT NULL,
`span-text` VARCHAR(50) NOT NULL,
`img-alt` VARCHAR(100) NOT NULL,
`img-src` VARCHAR(2048) NOT NULL,
`nav-title` VARCHAR(30) NOT NULL,
PRIMARY KEY (`id`)
);

INSERT INTO
`content`
(`id`, `slug`, `title`, `h1`, `p`, `span-class`, `span-text`, `img-alt`, `img-src`, `nav-title`)
VALUES
(NULL, 'el-miedo-de-los-teletubbies', 'Les Teletubbies', 'Les Teletubbies', 'C\'est flippant, mais flippant.', 'label-danger', 'Danger', 'Teletubbies', 'teletubbies.jpg', 'Weeee'),
(NULL, 'kittens', 'Three kittens', 'Three kittens', 'C\'est bien.', 'label-success', 'miaow', 'three kittens', 'three_kittens.jpg', 'Kittens')
;
