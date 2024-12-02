/*
SQLyog Ultimate
MySQL - 8.3.0 : Database - resc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`resc` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `resc`;

/*Table structure for table `01_menu` */

DROP TABLE IF EXISTS `01_menu`;

CREATE TABLE `01_menu` (
  `01_id` int NOT NULL AUTO_INCREMENT,
  `01_name` varchar(255) DEFAULT NULL,
  `01_url` varchar(255) DEFAULT NULL,
  `01_status` tinyint(1) DEFAULT NULL,
  `01_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`01_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `01_menu` */

insert  into `01_menu`(`01_id`,`01_name`,`01_url`,`01_status`,`01_description`) values 
(1,'Log In','content/login.php',1,'login page'),
(2,'Sign up','content/signup.php',1,'signup page'),
(3,'Gallery','content/gallery.php',1,'gallerypage'),
(4,'Dashboard','content/dashboard.php',1,'contactus page'),
(6,'Admin','content/adminlogin.php',1,NULL),
(7,'Register','content/registration.php',1,NULL);

/*Table structure for table `02_media` */

DROP TABLE IF EXISTS `02_media`;

CREATE TABLE `02_media` (
  `02_id` int NOT NULL AUTO_INCREMENT,
  `02_imgname` varchar(255) DEFAULT NULL,
  `02_imgpath` varchar(255) DEFAULT NULL,
  `02_h5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `02_para` varchar(255) DEFAULT NULL,
  `02_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`02_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `02_media` */

insert  into `02_media`(`02_id`,`02_imgname`,`02_imgpath`,`02_h5`,`02_para`,`02_status`) values 
(1,'Logo','volleyball-logo-on-the-background-of-multi-vector-9105476-removebg-preview.webp',NULL,NULL,1),
(2,'img1','content/images/1.webp','Join the fun','Experience the thrill of volleyball and be part of the action.',1),
(3,'img2','content/images/2.webp','Get Involved','Become part of a community that celebrates teamwork and sportsmanship.',1),
(4,'img3','content/images/3.webp','Compete','Push your limits and grow through friendly competition.',1),
(5,'img4','content/images/aboutus.webp','Grow','achive the goal',1),
(8,'loadingimg','ball.gif',NULL,NULL,NULL);

/*Table structure for table `m02_aboutus` */

DROP TABLE IF EXISTS `m02_aboutus`;

CREATE TABLE `m02_aboutus` (
  `m02_id` int NOT NULL AUTO_INCREMENT,
  `m02_name` varchar(255) DEFAULT NULL,
  `m02_img` varchar(255) DEFAULT NULL,
  `m02_para` varchar(255) DEFAULT NULL,
  `m02_t` varchar(255) DEFAULT NULL,
  `m02_video` varchar(255) DEFAULT NULL,
  `m02_url` varchar(255) DEFAULT NULL,
  `m02_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`m02_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m02_aboutus` */

insert  into `m02_aboutus`(`m02_id`,`m02_name`,`m02_img`,`m02_para`,`m02_t`,`m02_video`,`m02_url`,`m02_status`) values 
(1,'About','content/images/aboutus.jpg','We believe in the power of volleyball to unite people. Whether you\'re looking for a competitive tournament, ','   Our Mission: Connecting Players and Fans',NULL,NULL,1),
(2,'About us',NULL,'        We are passionate about volleyball and aim to bring people together through this exciting sport. ','Our Mission: Connecting Players and Fans',NULL,'content/services.php',1),
(3,'star','black-five-rating-review-stars-png-img-70408169469774841dximozbe.png',NULL,NULL,NULL,NULL,1);

/*Table structure for table `m03_counter` */

DROP TABLE IF EXISTS `m03_counter`;

CREATE TABLE `m03_counter` (
  `m03_id` int NOT NULL AUTO_INCREMENT,
  `m03_name` varchar(255) DEFAULT NULL,
  `m03_count` int DEFAULT NULL,
  `m03_para` varchar(255) DEFAULT NULL,
  `m03_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`m03_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m03_counter` */

insert  into `m03_counter`(`m03_id`,`m03_name`,`m03_count`,`m03_para`,`m03_status`) values 
(1,'Match played',3,'Our league has played over 320 exciting volleyball matches!',1),
(2,'Players',2,'More than 200 passionate players have participated.',1),
(3,'Championships Won',1,'Our teams have won 12 prestigious championships!',1),
(4,'Fans',15,'Over 1500 fans support our teams every season!',1);

/*Table structure for table `m04_owlcarousel` */

DROP TABLE IF EXISTS `m04_owlcarousel`;

CREATE TABLE `m04_owlcarousel` (
  `m04_id` int NOT NULL AUTO_INCREMENT,
  `m04_name` varchar(255) DEFAULT NULL,
  `m04_img` varchar(255) DEFAULT NULL,
  `m04_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`m04_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m04_owlcarousel` */

insert  into `m04_owlcarousel`(`m04_id`,`m04_name`,`m04_img`,`m04_status`) values 
(1,'carousel1','ss.webp',1),
(2,'carousel2','sssssssssss.webp',1),
(3,'carousel3','des.webp',1);

/*Table structure for table `m05_contact` */

DROP TABLE IF EXISTS `m05_contact`;

CREATE TABLE `m05_contact` (
  `m05_id` int NOT NULL AUTO_INCREMENT,
  `m05_name` varchar(255) DEFAULT NULL,
  `m05_email` varchar(255) DEFAULT NULL,
  `m05_message` text,
  `m05_created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`m05_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m05_contact` */

insert  into `m05_contact`(`m05_id`,`m05_name`,`m05_email`,`m05_message`,`m05_created_at`) values 
(1,'Ashutosh Singh','shankar@gmail.com','sadwdasd',NULL),
(2,'sanskar','1234@gmail.com','nice to meet you',NULL);

/*Table structure for table `m06_services` */

DROP TABLE IF EXISTS `m06_services`;

CREATE TABLE `m06_services` (
  `m06_id` int NOT NULL AUTO_INCREMENT,
  `m06_name` varchar(255) DEFAULT NULL,
  `m06_url` varchar(255) DEFAULT NULL,
  `m06_para` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `m06_h` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `m06_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`m06_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m06_services` */

insert  into `m06_services`(`m06_id`,`m06_name`,`m06_url`,`m06_para`,`m06_h`,`m06_status`) values 
(1,'Training','training.php','Enhance your skills with professional coaching and drills tailored to your needs.','Learn more',1),
(2,'League Management','leaguemanagment.php','Organize and participate in competitive leagues for all skill levels.','Learn more',1),
(3,'Event Planning','eventmang.php','We help you host exciting volleyball tournaments and events.','Learn more',1),
(4,'Gear Rental','gearrentel.php','Access top-quality volleyball gear and equipment for your games.','Learn more',1),
(5,'Team Roster','team-roster.php',NULL,'Learn more',1);

/*Table structure for table `m07_video` */

DROP TABLE IF EXISTS `m07_video`;

CREATE TABLE `m07_video` (
  `m07_id` int NOT NULL AUTO_INCREMENT,
  `m07_name` varchar(255) DEFAULT NULL,
  `m07_videourl` varchar(255) DEFAULT NULL,
  `m07_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`m07_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m07_video` */

insert  into `m07_video`(`m07_id`,`m07_name`,`m07_videourl`,`m07_status`) values 
(1,'YouTube video player ','https://www.youtube.com/embed/dVI8PI0aDp0',1),
(2,NULL,NULL,NULL);

/*Table structure for table `m08_footer` */

DROP TABLE IF EXISTS `m08_footer`;

CREATE TABLE `m08_footer` (
  `m08_id` int NOT NULL AUTO_INCREMENT,
  `m08_name` varchar(255) DEFAULT NULL,
  `m08_url` varchar(255) DEFAULT NULL,
  `m08_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `m08_disc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `m08_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`m08_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m08_footer` */

insert  into `m08_footer`(`m08_id`,`m08_name`,`m08_url`,`m08_img`,`m08_disc`,`m08_status`) values 
(1,'Logo','volleyball-logo-on-the-background-of-multi-vector-9105476-removebg-preview.webp',NULL,NULL,1),
(2,'Facebook','https://www.facebook.com/VollyballClubOfIndia/','content/images/facebook.png',NULL,1),
(3,'Twitter','https://x.com/primevolley?lang=en',NULL,NULL,1),
(4,'Instagram','https://www.instagram.com/indianvolleyball_/?hl=en',NULL,NULL,1),
(5,'Contactus',NULL,NULL,'contact@abcd.com',1),
(6,'Phoneno',NULL,NULL,'548454874774',1),
(7,'content','',NULL,'&copy: 2024 volleyball. All rights reserved',1),
(8,'location','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.7074077459647!2d80.97842947450377!3d26.881035661452938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd002a1da4ab%3A0x2becbb9e2369aced!2sPolitecnic%20chauraha!5e0!3m2!1sen!2sin!4v173217',NULL,'',1),
(9,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `m09_trainingpage` */

DROP TABLE IF EXISTS `m09_trainingpage`;

CREATE TABLE `m09_trainingpage` (
  `m09_id` int NOT NULL AUTO_INCREMENT,
  `m09_name` varchar(255) DEFAULT NULL,
  `m09_para` varchar(255) DEFAULT NULL,
  `m09_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `m09_discription` varchar(255) DEFAULT NULL,
  `m09_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`m09_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m09_trainingpage` */

insert  into `m09_trainingpage`(`m09_id`,`m09_name`,`m09_para`,`m09_url`,`m09_discription`,`m09_status`) values 
(1,'Beginner\'s Program','Learn the basics of volleyball, including rules, techniques, and teamwork.','content/Beginner.php',NULL,1),
(2,'Intermediate Training','Refine your skills and build advanced techniques with professional drills.','content/IntermediateTraining.php',NULL,1),
(3,'Advanced Coaching','Perfect your strategy and compete at the highest level with expert guidance.','content/advancecoaching.php',NULL,1),
(4,'Fitness and Conditioning','Boost your endurance, agility, and strength with volleyball-specific workouts.','content/fitness.php',NULL,1);

/*Table structure for table `m10_gallerypage` */

DROP TABLE IF EXISTS `m10_gallerypage`;

CREATE TABLE `m10_gallerypage` (
  `m10_id` int NOT NULL AUTO_INCREMENT,
  `m10_name` varchar(255) DEFAULT NULL,
  `m10_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `m10_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `m10_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`m10_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m10_gallerypage` */

insert  into `m10_gallerypage`(`m10_id`,`m10_name`,`m10_url`,`m10_img`,`m10_status`) values 
(1,'img1','event1.jpg',NULL,1),
(3,'img3','event3.jpg',NULL,1),
(4,'img4','event4.jpg',NULL,1),
(5,'img5','event5.jpg',NULL,1),
(6,'img6','event6.jpg',NULL,0),
(7,'img7','event7.jpg',NULL,1),
(8,'img8','event8jpg',NULL,0),
(9,'img9','event9.jpg',NULL,1),
(10,'img10','event10.jpg',NULL,1),
(11,'img11','event11.jpg',NULL,1),
(12,'imh12','event12.jpg','',0),
(13,'video','https://youtube.com/embed/dVI8PI0aDp0',NULL,1),
(14,'video','https://youtube.com/embed/cHLfjh7alXc',NULL,1);

/*Table structure for table `m11_loginpage` */

DROP TABLE IF EXISTS `m11_loginpage`;

CREATE TABLE `m11_loginpage` (
  `m11_id` int NOT NULL AUTO_INCREMENT,
  `m11_name` varchar(255) DEFAULT NULL,
  `m11_username` varchar(255) DEFAULT NULL,
  `m11_email` varchar(255) DEFAULT NULL,
  `m11_password` int DEFAULT NULL,
  `m11_url` varchar(255) DEFAULT NULL,
  `m11_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`m11_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m11_loginpage` */

insert  into `m11_loginpage`(`m11_id`,`m11_name`,`m11_username`,`m11_email`,`m11_password`,`m11_url`,`m11_status`) values 
(1,'Home',NULL,NULL,NULL,'index.php',1),
(2,'Logo',NULL,NULL,NULL,'volleyball-logo-on-the-background-of-multi-vector-9105476-removebg-preview.webp',1),
(3,'Signup',NULL,NULL,NULL,'content/signup.php',1),
(4,'Log in',NULL,NULL,NULL,'content/login.php',1),
(5,'Services',NULL,NULL,NULL,'content/services.php',NULL);

/*Table structure for table `m12_signup` */

DROP TABLE IF EXISTS `m12_signup`;

CREATE TABLE `m12_signup` (
  `m12_id` int NOT NULL AUTO_INCREMENT,
  `m12_name` varchar(255) DEFAULT NULL,
  `m12_username` varchar(255) DEFAULT NULL,
  `m12_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `m12_password` varchar(255) NOT NULL,
  `m12_url` varchar(255) DEFAULT NULL,
  `m12_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`m12_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m12_signup` */

insert  into `m12_signup`(`m12_id`,`m12_name`,`m12_username`,`m12_email`,`m12_password`,`m12_url`,`m12_status`) values 
(13,NULL,'Shankar','shankar75180@gmail.com','$2y$10$oPjaHEWPnAyGtIYpkdYbdOrZXdI7/RyLN2WjbY4KkXXac5/tna1yW',NULL,NULL),
(7,NULL,'sas','shankar10@gmail.com','$2y$10$JkKyak9wgnsITtNHXf30w.SvYt7/wg.hKDpClzyzc4p7tS2gwszbi',NULL,NULL),
(8,NULL,'sanskar','shankar22@gmail.com','$2y$10$mUpJ9JCKNxAKzkiGE6cWbeGqD5vn/X.W7rYsx58nhLItnhlMkKWFC',NULL,NULL),
(9,NULL,'sanskar','shankar21@gmail.com','$2y$10$7nqQPnk2UPvZFKe./rQIKO7q9G0Otm04bAdwVtJHFmg1Z9r9ETC5O',NULL,NULL),
(10,NULL,'sanskar','shankar20@gmail.com','$2y$10$1X2IJ43glbLDBJzZ8hJlhObEMmwvz/yWuubxSo9MviciGVpGzzGlu',NULL,NULL),
(11,NULL,'shankar','shankar000@gmail.com','$2y$10$bgLKRHtfpvmTxJt..Ksi.e4uHA3UHjZ0wK4GqKcoZ9lsLn43ZobGK',NULL,NULL),
(12,NULL,'sanskar kumar','shankarkumar123@gmailcom','$2y$10$aPJ4junDPyIgWmF7mbyXROlw2nu2./hDgfAiZ0.O.JvBW0JW84gJS',NULL,NULL),
(14,NULL,'sanskar','shankarbhai75180@gmail.com','$2y$10$arLUSG4TKuRUvOSsSiGV7O30tubROUcT5x68Nal6mQu.s9a42liq.',NULL,NULL);

/*Table structure for table `m13_dashboard` */

DROP TABLE IF EXISTS `m13_dashboard`;

CREATE TABLE `m13_dashboard` (
  `m13_int` int NOT NULL AUTO_INCREMENT,
  `m13_name` varchar(255) DEFAULT NULL,
  `m13_disc` varchar(255) DEFAULT NULL,
  `m13_h` varchar(255) DEFAULT NULL,
  `m13_url` varchar(255) DEFAULT NULL,
  `m13_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`m13_int`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m13_dashboard` */

insert  into `m13_dashboard`(`m13_int`,`m13_name`,`m13_disc`,`m13_h`,`m13_url`,`m13_status`) values 
(1,'Home',NULL,NULL,'index.php',1),
(2,'Setting',NULL,NULL,NULL,1),
(3,'Logout',NULL,NULL,'logout.php',1),
(4,'Profile',NULL,NULL,'profile.php',1);

/*Table structure for table `m14_leaguemng` */

DROP TABLE IF EXISTS `m14_leaguemng`;

CREATE TABLE `m14_leaguemng` (
  `m14_int` int NOT NULL AUTO_INCREMENT,
  `m14_teamnames` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `m14_captain` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `m14_coachname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `m14_rank` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `m14_won` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `m14_matchlost` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `m14_location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `m14_stats` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `m14_date` date DEFAULT NULL,
  `m14_matchsedule` varchar(255) DEFAULT NULL,
  `m14_status` tinyint(1) DEFAULT NULL,
  `m14_schedule` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`m14_int`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m14_leaguemng` */

insert  into `m14_leaguemng`(`m14_int`,`m14_teamnames`,`m14_captain`,`m14_coachname`,`m14_rank`,`m14_won`,`m14_matchlost`,`m14_location`,`m14_stats`,`m14_date`,`m14_matchsedule`,`m14_status`,`m14_schedule`) values 
(2,'KKC','Ravi','troy','2','2','4',NULL,'Active','2024-11-27','KKC vs BBD',1,'Schedule'),
(4,'Sahara vlly','JP singh','akash','6','2','2',NULL,'Unactive','2024-11-29','CBD vs LU',1,NULL),
(5,'CBG collage','Sujit','guruji','5','2','3',NULL,'Unactive','2024-11-29','CBG vs sahara',1,NULL),
(6,'Sport cllg','Jha sir','mani','7','1','4',NULL,'unactive','2024-11-30','LU vs KKC',1,NULL),
(7,'lucknow university','sanskar','ashwini','1','5','5',NULL,'Active','2024-11-26','LU vs sport cllg',1,'Schedule'),
(8,'BBD','Altaf','jha piyush','3','3','2',NULL,'Active','2024-11-26','BBD vs LU',1,NULL);

/*Table structure for table `m15_eventmng` */

DROP TABLE IF EXISTS `m15_eventmng`;

CREATE TABLE `m15_eventmng` (
  `m15_int` int NOT NULL AUTO_INCREMENT,
  `m15_Eventname` varchar(255) DEFAULT NULL,
  `m15_date` date DEFAULT NULL,
  `m15_location` varchar(255) DEFAULT NULL,
  `m15_regstatus` varchar(255) DEFAULT NULL,
  `m15_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`m15_int`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m15_eventmng` */

insert  into `m15_eventmng`(`m15_int`,`m15_Eventname`,`m15_date`,`m15_location`,`m15_regstatus`,`m15_status`) values 
(1,'Annual Volleyball Tournament','2024-11-27','Sahara volleyball ground','Registation open',1),
(2,'Community Volleyball Fundraiser','2024-11-28','lucknow new campus','Registration open',1),
(3,'Youth Volleyball Camp','2024-11-29','CBG college','Registration close',1);

/*Table structure for table `m16_gearpage` */

DROP TABLE IF EXISTS `m16_gearpage`;

CREATE TABLE `m16_gearpage` (
  `m16_id` int NOT NULL AUTO_INCREMENT,
  `m16_name` varchar(255) DEFAULT NULL,
  `m16_Category` varchar(255) DEFAULT NULL,
  `m16_price` varchar(255) DEFAULT NULL,
  `m16_Availability` varchar(255) DEFAULT NULL,
  `m16_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`m16_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m16_gearpage` */

insert  into `m16_gearpage`(`m16_id`,`m16_name`,`m16_Category`,`m16_price`,`m16_Availability`,`m16_status`) values 
(1,'Official Volleyball','Ball','1200','Avil',1),
(2,'Professional Net','Net','2000','Avil',1),
(3,'Sports Knee Pads','Protective Gear','500','Avil',1),
(4,'Volleyball Shoes','Shoes','1500','UnAvil',1),
(5,'Team Jerseys (Set of 6)','Apparel','5000','Avil',1);

/*Table structure for table `m17_dashboard` */

DROP TABLE IF EXISTS `m17_dashboard`;

CREATE TABLE `m17_dashboard` (
  `m17_id` int NOT NULL AUTO_INCREMENT,
  `m17_name` varchar(255) DEFAULT NULL,
  `m17_url` varchar(255) DEFAULT NULL,
  `m17_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`m17_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m17_dashboard` */

insert  into `m17_dashboard`(`m17_id`,`m17_name`,`m17_url`,`m17_status`) values 
(1,'Home','index.php',1),
(2,'Logout','logout.php',1),
(3,'Logo','volleyball-logo-on-the-background-of-multi-vector-9105476-removebg-preview.webp',1),
(4,'Profile','profile.php',1),
(5,'Notification','notification.php',1),
(6,'Help','contact.php',1),
(7,NULL,NULL,NULL);

/*Table structure for table `m18_userprofiles` */

DROP TABLE IF EXISTS `m18_userprofiles`;

CREATE TABLE `m18_userprofiles` (
  `18_user_id` int NOT NULL AUTO_INCREMENT,
  `18_name` varchar(255) DEFAULT NULL,
  `18_profile_photo_url` varchar(255) DEFAULT NULL,
  `18_role` varchar(100) DEFAULT NULL,
  `18_bio` text,
  `18_email` varchar(255) DEFAULT NULL,
  `m12_id` int DEFAULT NULL,
  PRIMARY KEY (`18_user_id`),
  KEY `m12_id` (`m12_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m18_userprofiles` */

insert  into `m18_userprofiles`(`18_user_id`,`18_name`,`18_profile_photo_url`,`18_role`,`18_bio`,`18_email`,`m12_id`) values 
(11,'shankar',NULL,NULL,NULL,'shankar000@gmail.com',11),
(10,'sanskar',NULL,NULL,NULL,'shankar20@gmail.com',10),
(9,'sanskar',NULL,NULL,NULL,'shankar21@gmail.com',9),
(8,'sanskar',NULL,NULL,NULL,'shankar22@gmail.com',8),
(7,'sas',NULL,NULL,NULL,'shankar10@gmail.com',7),
(13,'Shankar','resc-main\\content\\images\\674d5e5c1e85b.webp','setter','welcome','sanskarkumar123@gmail.com',13),
(12,'sanskar kumar','profile.png',NULL,NULL,'shankarkumar123@gmailcom',12);

/*Table structure for table `m19_admin` */

DROP TABLE IF EXISTS `m19_admin`;

CREATE TABLE `m19_admin` (
  `m19_id` int NOT NULL AUTO_INCREMENT,
  `m19_name` varchar(255) DEFAULT NULL,
  `m19_url` varchar(255) DEFAULT NULL,
  `m19_status` tinyint(1) DEFAULT NULL,
  `m19_email` varchar(255) DEFAULT NULL,
  `m19_password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`m19_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `m19_admin` */

insert  into `m19_admin`(`m19_id`,`m19_name`,`m19_url`,`m19_status`,`m19_email`,`m19_password`) values 
(1,NULL,NULL,1,'shankar0@gmail.com','1234');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
