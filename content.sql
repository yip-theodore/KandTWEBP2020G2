CREATE SCHEMA `kandt`
DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE kandt;

CREATE TABLE `content` (
`page` VARCHAR(50) NOT NULL,
`title` VARCHAR(50) NOT NULL,
`h1` VARCHAR(50) NOT NULL,
`p` VARCHAR(50) NOT NULL,
`span-class` VARCHAR(50) NOT NULL,
`span-text` VARCHAR(50) NOT NULL,
`img-alt` VARCHAR(50) NOT NULL,
`img-src` VARCHAR(50) NOT NULL,
`nav-title` VARCHAR(50) NOT NULL,
PRIMARY KEY (`page`)
);

INSERT INTO
`content`
(`page`, `title`, `h1`, `p`, `span-class`, `span-text`, `img-alt`, `img-src`, `nav-title`)
VALUES
('el-miedo-de-los-teletubbies', 'Les Teletubbies', 'Les Teletubbies', 'C\'est flippant, mais flippant.', 'label-danger', 'Danger', 'Teletubbies', 'teletubbies.jpg', 'Weeee')
;
INSERT INTO
`content`
(`page`, `title`, `h1`, `p`, `span-class`, `span-text`, `img-alt`, `img-src`, `nav-title`)
VALUES
('kittens', 'Three kittens', 'Three kittens', 'C\'est bien.', 'label-success', 'miaow', 'three kittens', 'three_kittens.jpg', 'Kittens')
;
