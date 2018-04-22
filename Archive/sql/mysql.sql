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

# Dump of table post
# ------------------------------------------------------------

CREATE TABLE `post` (
  `post_id` int(11) unsigned AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `title` varchar(64) NOT NULL DEFAULT '',
  `price` varchar(64) NOT NULL DEFAULT '',
  `contact` varchar(64) NOT NULL DEFAULT '',
  `category` varchar(20) NOT NULL DEFAULT '',
  `purpose` varchar(10) NOT NULL DEFAULT '',
  `description` text,
  `image` text,
  `post_date` timestamp DEFAULT NOW(),
  PRIMARY KEY (`post_id`),
  FOREIGN KEY (`user_id`) REFERENCES user(`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `post` (`user_id`, `title`, `price`, `contact`, `category`, `purpose`, `description`, `image`)
VALUES (1, 'Twin size bed for sell', '$90', '888745412', 'Furniture', 'Selling', 'double dust protection; supper clean; free chair', 'https://brandguide.tamu.edu/assets/downloads/logos/TAM-LogoBox.jpg'),
       (1, 'White desk', '5 dollar', '5547785452', 'Furniture', 'Selling', 'IKEA fashen style', 'https://brandguide.tamu.edu/assets/downloads/logos/TAM-PrimaryMarkA.png'),
       (2, 'Honda car', 'no more than 1000000 dollars', '8546255452', 'Jobs', 'Looking', 'may need to take me to try the car', 'https://brandguide.tamu.edu/assets/downloads/logos/Box-Stack.svg'),
       (2, 'Ride to houston', '', '55548521', 'Vehicle', 'Looking', '', '')
;


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
