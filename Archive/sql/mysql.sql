/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE=`NO_AUTO_VALUE_ON_ZERO` */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS bookmark;
DROP TABLE IF EXISTS post;
DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS category;

# Dump of table user
# ------------------------------------------------------------

CREATE TABLE `user` (
  `user_id` int(11) unsigned AUTO_INCREMENT,
  `email` varchar(64) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL DEFAULT '',
  `user_date` timestamp DEFAULT NOW(),
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`email`, `password`)
VALUES ('admin@tamu.edu', 'admin');

# Dump of table category
# ------------------------------------------------------------

CREATE TABLE `category` (
  `category_id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `category_desc` varchar(64) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

# Dump of table post
# ------------------------------------------------------------

CREATE TABLE `post` (
  `post_id` int(11) unsigned AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `title` varchar(64) NOT NULL DEFAULT '',
  `price` varchar(64) NOT NULL DEFAULT '',
  `contact` varchar(64) NOT NULL DEFAULT '',
  `category_id` int(2) unsigned NOT NULL,
  `purpose` varchar(10) NOT NULL DEFAULT '',
  `description` text,
  `image` text,
  `post_date` timestamp DEFAULT NOW(),
  PRIMARY KEY (`post_id`),
  FOREIGN KEY (`user_id`) REFERENCES user(`user_id`),
  FOREIGN KEY (`category_id`) REFERENCES category(`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

# Dump of table bookmark
# ------------------------------------------------------------

CREATE TABLE `bookmark` (
  `user_id` int(11) unsigned NOT NULL,
  `post_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`user_id`, `post_id`),
  FOREIGN KEY (`user_id`) REFERENCES user(`user_id`),
  FOREIGN KEY (`post_id`) REFERENCES post(`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/* INSERT INTO `category` (`category_desc`) */

SET FOREIGN_KEY_CHECKS = 1;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
