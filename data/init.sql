DROP DATABASE IF EXISTS `users`;

CREATE DATABASE IF NOT EXISTS `users`;

USE `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users` (`id`, `username`, `email`, `password`, `about`, `image_path`) VALUES
(1, 'Jack', 'jack@example.com', '12345678', 'Web Designer UI/UX Engineer', '/../public/images/jack.png'),
(2, 'Loren', 'loren@example.com', '12345678', 'Social Activist', '/../public/images/loren.png'),
(3, 'Michael', 'michael@example.com', '12345678', 'Software Engineer', '/../public/images/michael.png');
