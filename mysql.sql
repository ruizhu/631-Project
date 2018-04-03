/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `bookmark`;
DROP TABLE IF EXISTS `post`;
DROP TABLE IF EXISTS `user`;
SET FOREIGN_KEY_CHECKS = 1;

# Dump of table user
# ------------------------------------------------------------

CREATE TABLE `user` (
  `userid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` char(30) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL DEFAULT '',
  `major` char(30) NOT NULL DEFAULT '',
  `identification` char(10) NOT NULL DEFAULT '',
  `phone` char(15) NOT NULL DEFAULT '',
  `userdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO user (email, password, major, identification)
VALUES ('admin@tamu.edu', 'admin', 'mis', 'student');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

# Dump of table post
# ------------------------------------------------------------

CREATE TABLE `post` (
  `postid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `title` varchar(64) NOT NULL DEFAULT '',
  `price` varchar(64) NOT NULL DEFAULT '',
  `contact` char(30) NOT NULL DEFAULT '',
  `category` char(30) NOT NULL,
  `purpose` char(30) NOT NULL,
  `description` varchar(64) DEFAULT '',
  `image` varchar(64) DEFAULT '',
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deletedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`postid`),
  FOREIGN KEY (`userid`) REFERENCES user(`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

# Dump of table post
# ------------------------------------------------------------

CREATE TABLE `bookmark` (
  `userid` int(11) unsigned NOT NULL,
  `postid` int(11) unsigned NOT NULL,
  PRIMARY KEY (`userid`, `postid`),
  FOREIGN KEY (`userid`) REFERENCES user(`userid`),
  FOREIGN KEY (`postid`) REFERENCES post(`postid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
