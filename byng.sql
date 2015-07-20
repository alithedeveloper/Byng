# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.38)
# Database: byng
# Generation Time: 2015-07-20 00:58:46 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table articles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `media_id` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `source` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `posted` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;

INSERT INTO `articles` (`id`, `type`, `url`, `media_id`, `title`, `summary`, `author`, `source`, `posted`, `created_at`, `updated_at`)
VALUES
	(1,'youtube','https://www.youtube.com/embed/wRfvQmlutK8','wRfvQmlutK8','Cressy Patient Sling Fitting & Usage Demonstration','The Cressy Sling from Ability Lifting Solutions www.abilitylifting.co.uk has been designed in conjunction with a well renowned moving and handling team and their occupational therapists.\nIt is based on a deluxe style sling and comes complete with an integral head support. The padded legs with slide sheet material make the Cressy Sling easy to fit and comfortable to use.','Jack Carer','','2013-11-21 18:05:11','2015-07-18 22:14:36','2015-07-18 22:14:36'),
	(2,'youtube','https://www.youtube.com/embed/cA0G90tSjis','cA0G90tSjis','Oxford Stature Disability Aid Hoist Bed to Chair Transfer','Video shows how to us the Oxford Stature Hoist Mobility Aid to transfer a patient from a bed to a chair.','Jane Nurse','','2013-10-21 18:05:42','2015-07-18 22:14:36','2015-07-18 22:14:36'),
	(3,'rss','','','Social Care TV: Safeguarding adults in care','An open and supportive culture is needed to ensure staff, residents and their relatives feel comfortable about raising safeguarding concerns.','','Guardian Health','2013-12-03 15:44:36','2015-07-18 22:14:36','2015-07-18 22:14:36'),
	(4,'youtube','https://www.youtube.com/embed/96ruuaRNqqM','96ruuaRNqqM','Deluxe Sling Fitting & Usage Demonstration','The Deluxe Sling from Ability Lifting Solutions www.abilitylifting.co.uk is one of the most popular styles of sling, providing excellent levels of comfort and support whilst being easy to take on and off.\nAn optional Easi-On Head Support Available and slide sheet material built in to the leg section makes the sling faster and easier to fit.\nThe deluxe is available in 9 sizes from paediatric and adult to bariatric sizes.','Joan Doctor','','2013-11-21 18:05:18','2015-07-18 22:14:36','2015-07-18 22:14:36'),
	(5,'article','','','NHS deal on branded-medicine cost','The government and pharmaceutical companies have agreed a five-year-deal to fix NHS spending on branded medicines across the UK.','Jack Carer','','2013-11-06 10:52:11','2015-07-18 22:14:36','2015-07-18 22:14:36'),
	(6,'rss','','','\'New part of knee joint discovered\'','Two knee surgeons in Belgium say they have identified a previously unfamiliar ligament in the human knee.','','BBC Health','2013-11-07 14:22:47','2015-07-18 22:14:36','2015-07-18 22:14:36'),
	(7,'vimeo','https://player.vimeo.com/video/64408746','64408746','SHOWcabinet: Prosthetics exhibition - Bound','Prosthetics Exibition, April 2013','Joan Doctor','','2013-09-29 14:18:00','2015-07-18 22:14:36','2015-07-18 22:14:36'),
	(8,'article','','','Making social care matter','Skills for Care chief executive Sharon Allen is trying to highlight the importance of the care sector to society while also delivering on government expectations.','Joan Doctor','','2013-10-16 09:48:35','2015-07-18 22:14:36','2015-07-18 22:14:36'),
	(9,'rss','','','Social care: under pressure like never before','Leaders of children\'s and adults\' services are stripped of funding on the one hand and chastised for not excelling on the other. How can the sector maintain morale?','','Guardian Health','2013-10-16 03:05:53','2015-07-18 22:14:36','2015-07-18 22:14:36');

/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_10_12_000000_create_users_table',1),
	('2015_07_18_161947_create_articles_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'John Smith','byng@gmail.com','$2y$10$bz1Wr.7WT9WLHB9ByK06ROwKGgkGsNlz3omH1.XV15wVxIhbiXgXq','AcZqQ7WizGfQ1mq7bKY9l65DZ8BGTvm2ePiUKg0ooTSSaAKEAz19uB2Dde5I','2015-07-19 12:58:50','2015-07-19 19:42:51'),
	(3,'Ashley Turner','ashley@hotmail.com','$2y$10$NH7V3XZS4Vo88keJJyRvweWOhrZK4x.4mO5nxPILBTtXJGAFSz0IO','tsjxTOa2rtXl1TAUhoKnA83Zz4A1oIAzNXejhmRin19yvLftT5GLgm5uOSJo','2015-07-19 13:00:38','2015-07-20 00:56:47');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
