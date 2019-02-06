-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 06, 2019 at 07:19 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(500) NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `content`, `post_id`) VALUES
(12, 'heloo', 12),
(11, 'astig', 13),
(10, 'hi', 13),
(9, 'jkevlorayna@gmail.com', 10);

-- --------------------------------------------------------

--
-- Table structure for table `following`
--

DROP TABLE IF EXISTS `following`;
CREATE TABLE IF NOT EXISTS `following` (
  `user_id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`follower_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `following`
--

INSERT INTO `following` (`user_id`, `follower_id`) VALUES
(4, 4),
(4, 5),
(4, 10),
(4, 11),
(4, 12);

-- --------------------------------------------------------

--
-- Table structure for table `institutes`
--

DROP TABLE IF EXISTS `institutes`;
CREATE TABLE IF NOT EXISTS `institutes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `course` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`id`, `name`, `url`, `course`) VALUES
(1, 'uiet kuk', 'http://www.uietkuk.org', ''),
(2, 'kurukshtara university', 'kuk.ac.in', ''),
(3, 'kurukshtara university', 'kuk.ac.in', ''),
(4, 'kurukshtara university', 'kuk.ac.in', ''),
(5, 'kurukshtara university', 'kuk.ac.in', ''),
(6, 'kurukshtara university', 'kuk.ac.in', ''),
(7, 'kurukshtara university', 'kuk.ac.in', ''),
(8, 'kurukshtara university', 'kuk.ac.in', ''),
(9, 'kurukshtara university', 'kuk.ac.in', ''),
(10, 'kurukshtara university', 'kuk.ac.in', ''),
(11, 'kurukshtara university', 'kuk.ac.in', ''),
(12, 'kurukshtara university', 'kuk.ac.in', ''),
(13, 'kuk', 'kuk.in', ''),
(14, 'kuk', 'kuk', ''),
(15, '', '', ''),
(16, 'institute', 'url', 'row1'),
(17, '', '', '.computer_science.'),
(18, 'u', 'k', ''),
(19, 'u', 'k', 'computer_science'),
(20, 'u', 'k', 'computer_science'),
(21, 'U.I.E.T', 'uietkuk.org', 'computer_science'),
(22, 'UIET', 'kuk', 'Mechanical_Engineering'),
(23, 'UIET', 'uietkuk.org', 'Instrumentation_Engineering'),
(24, 'uiet', 'http://www.uietkuk.org/', 'Instrumentation_Engineering'),
(25, 'uiet', 'kuk', 'computer_science');

-- --------------------------------------------------------

--
-- Table structure for table `log_in_system`
--

DROP TABLE IF EXISTS `log_in_system`;
CREATE TABLE IF NOT EXISTS `log_in_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news_feed`
--

DROP TABLE IF EXISTS `news_feed`;
CREATE TABLE IF NOT EXISTS `news_feed` (
  `news_id` int(10) NOT NULL AUTO_INCREMENT,
  `news_title` text NOT NULL,
  `news_description` text NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_feed`
--

INSERT INTO `news_feed` (`news_id`, `news_title`, `news_description`) VALUES
(1, 'ajadffzxcvc ', 'fdxcvvc xcgfv '),
(2, 'ajadffzxcvc ', 'fdxcvvc xcgfv ');

-- --------------------------------------------------------

--
-- Table structure for table `notespdf`
--

DROP TABLE IF EXISTS `notespdf`;
CREATE TABLE IF NOT EXISTS `notespdf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `ad_pdf` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notespdf`
--

INSERT INTO `notespdf` (`id`, `subject`, `description`, `ad_pdf`, `name`, `institute`, `mobile`, `email`, `course`, `time`) VALUES
(2, 'xcvb', 'cvbnm', '21617590_1425481724233168_2792153413817508400_n.jpg', 'dfgh', 'cvbnm', '9802378295', 'ajay.kadoula@gmail.com', '', '2018-02-09 17:05:07'),
(3, 'ajay', 'gvhbjn', '21617590_1425481724233168_2792153413817508400_n.jpg', 'Ajay', 'uiet', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-02-09 17:54:26'),
(4, 'computer_science', 'dffghjk', '21617590_1425481724233168_2792153413817508400_n.jpg', 'dfghbnm', 'fghbj', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-02-09 17:56:19'),
(5, 'computer_science', 'computer_science', '21617590_1425481724233168_2792153413817508400_n.jpg', 'computer_science', 'computer_science', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-02-09 17:58:17'),
(6, 'computer_science', 'computer_science', '21617590_1425481724233168_2792153413817508400_n.jpg', 'Ajay', 'kadoula', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-02-09 18:03:03'),
(7, 'Mysqli', 'description......\r\n', 'hfphpmysql_ch07.pdf', 'ajay', 'Uiet', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-02-09 18:24:42'),
(8, 'scvb', 'fdcgvhbjn', 'hfphpmysql_ch07.pdf', 'ajay', 'uiet', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-02-09 18:40:21'),
(9, 'mexhanical', 'asdfdg', 'hfphpmysql_ch07.pdf', 'fdgh', 'uiet', '9802378295', 'ajay.kadoula@gmail.com', 'Mechanical_Engineering', '2018-02-10 09:10:50'),
(10, 'kj', 'fghj', 'b4.jpg', 'ajay.kadoula@gmail.com', 'uiet', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-02-10 09:36:49'),
(11, 'mysqli', 'this is abook', 'hfphpmysql_ch07.pdf', 'ajay', 'uiet', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-02-10 09:38:57'),
(12, 'qhj', 'sdfghj', 'hfphpmysql_ch07.pdf', 'ajay', 'kuk', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-02-10 09:41:23'),
(13, 'sasdfgh', 'dfghj', 'hfphpmysql_ch07.pdf', 'ajay', 'uiet', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-02-10 09:42:49'),
(14, 'dfghj', 'sdfcgvhbj', '1.jpg', 'ajay', 'uiet', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-02-10 09:45:32'),
(15, 'addf', 'sdfgh', '1.jpg', 'ajay', 'uiet', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-02-10 09:47:02'),
(16, 'adsfdgfhsdxfgh', 'asdfgh', 'hfphpmysql_ch07.pdf', 'asdfg', 'sdfdg', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-02-10 09:48:54'),
(17, 'sserdtysdfghj', 'sadfg', 'b8.jpg', 'asdf', 'sdfg', '9802378295', 'ajay.kadola@gmail.com', 'computer_science', '2018-02-10 09:50:17'),
(18, 'dfg', 'description', 'tuxdoc.com_learn-php-in-7-days.pdf', 'ajay', 'uiet', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-02-11 15:27:43'),
(19, 'computer_science', 'fghj', 'jpg2pdf (1).pdf', 'Ajay Kadoula', 'uiet ', '7802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-03-26 12:50:14'),
(20, 'computer_science_first_year', 'php in 7 days', 'tuxdoc.com_learn-php-in-7-days.pdf', 'Ajay Kadoula', 'uiet ', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-03-26 15:03:05'),
(21, 'computer_science_first_year', 'php in 7 days', 'tuxdoc.com_learn-php-in-7-days.pdf', 'Ajay Kadoula', 'uiet ', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-03-26 15:03:36'),
(22, 'computer_science_first_year', 'php in 7 days', 'tuxdoc.com_learn-php-in-7-days.pdf', 'Ajay Kadoula', 'uiet ', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-03-26 15:04:00'),
(23, 'computer_science_first_year', 'php in 7 days', 'tuxdoc.com_learn-php-in-7-days.pdf', 'Ajay Kadoula', 'uiet ', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-03-26 15:04:04'),
(24, 'computer_science_first_year', 'php in 7 days', 'tuxdoc.com_learn-php-in-7-days.pdf', 'Ajay Kadoula', 'uiet ', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-03-26 15:04:08'),
(25, 'computer_science_first_year', 'php in 7 days', 'tuxdoc.com_learn-php-in-7-days.pdf', 'Ajay Kadoula', 'uiet ', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science', '2018-03-26 15:04:15'),
(26, 'computer_science_first_year', 'the php in 7 days', 'tuxdoc.com_learn-php-in-7-days.pdf', 'Ajay Kadoula', 'uiet ', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science_first_year', '2018-03-26 15:06:56'),
(27, 'computer_science_first_year', 'php in 7 days', 'tuxdoc.com_learn-php-in-7-days.pdf', 'Ajay Kadoula', 'uiet ', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science_first_year', '2018-03-26 15:13:05'),
(28, 'computer_science_first_year', 'php in 7 days', 'tuxdoc.com_learn-php-in-7-days.pdf', 'Ajay Kadoula', 'uiet ', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science_first_year', '2018-03-26 15:16:03'),
(29, 'computer_science_first_year', 'php in 7 days', 'hfphpmysql_ch07.pdf', 'Ajay Kadoula', 'uiet', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science_first_year', '2018-03-26 16:24:25'),
(30, 'computer_science_first_year', 'this is demo', 'compressed.tracemonkey-pldi-09.pdf', 'Ajay Kadoula', 'uiet ', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science_first_year', '2018-03-26 16:32:04'),
(31, 'computer_science_first_year', 'this is demo', 'hfphpmysql_ch07.pdf', 'Ajay Kadoula', 'uiet', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science_first_year', '2018-03-26 16:34:57'),
(32, 'computer_science_first_year_uiet', 'this is demo', 'tuxdoc.com_learn-php-in-7-days.pdf', 'Ajay Kadoula', 'uiet', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science_first_year_uiet', '2018-03-26 16:44:54'),
(33, 'computer_science_first_year_uiet', 'this is demo', 'tuxdoc.com_learn-php-in-7-days.pdf', 'Ajay Kadoula', 'uiet', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science_first_year_uiet', '2018-03-26 16:45:06'),
(34, 'computer_science_first_year_uiet', 'this is demo', 'tuxdoc.com_learn-php-in-7-days.pdf', 'Ajay Kadoula', 'uiet', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science_first_year_uiet', '2018-03-26 16:45:10'),
(35, 'computer_science_first_year_uiet', 'this is demo', 'tuxdoc.com_learn-php-in-7-days.pdf', 'Ajay Kadoula', 'uiet', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science_first_year_uiet', '2018-03-26 16:45:15'),
(36, 'computer_science_first_year_uiet', 'this is demo', 'tuxdoc.com_learn-php-in-7-days.pdf', 'Ajay Kadoula', 'uiet', '9802378295', 'ajay.kadoula@gmail.com', 'computer_science_first_year_uiet', '2018-03-26 16:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id_p` varchar(20) NOT NULL,
  `query` text NOT NULL,
  `status_image` varchar(255) DEFAULT NULL,
  `status_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id_p`, `query`, `status_image`, `status_time`) VALUES
(82, '9802378295', 'this is a demo', '', '2018-03-29 08:26:22'),
(83, '9802378295', 'this is demo\r\n', '', '2018-11-12 07:32:53'),
(84, '9802378295', 'Primitive operations common to all record management systems include A. Print B. Sort C. Look-up D. All of the above E. None of the above', '', '2019-01-12 10:32:04'),
(85, '9802378295', 'Q. I am twelfth in the queue from either end. How many persons are there in the queue? (A) 13 (B) 23 (C) 12 (D) 24', '', '2019-01-12 10:32:17'),
(86, '9802378295', 'Q. I am twelfth in the queue from either end. How many persons are there in the queue? (A) 13 (B) 23 (C) 12 (D) 24 ', '', '2019-01-12 10:32:31'),
(87, '9802378295', 'Primitive operations common to all record management systems include A. Print B. Sort C. Look-up D. All of the above E. None of the above', '', '2019-01-12 10:32:45'),
(80, '9802378295', 'Q. I am twelfth in the queue from either end. How many persons are there in the queue? (A) 13 (B) 23 (C) 12 (D) 24\r\n', '', '2018-03-08 04:21:05'),
(79, '9802378295', '\r\n\r\nQ. I am twelfth in the queue from either end. How many persons are there in the queue? (A) 13 (B) 23 (C) 12 (D) 24\r\n', '', '2018-03-08 04:19:35'),
(78, '9802378295', 'Primitive operations common to all record management systems include\r\n\r\nA.	Print\r\nB.	Sort\r\nC.	Look-up\r\nD.	All of the above\r\nE.	None of the above', '', '2018-03-08 04:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `post_ad`
--

DROP TABLE IF EXISTS `post_ad`;
CREATE TABLE IF NOT EXISTS `post_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` text NOT NULL,
  `title` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `ad_image` text,
  `name` varchar(20) NOT NULL,
  `city` text NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_ad`
--

INSERT INTO `post_ad` (`id`, `category`, `title`, `price`, `description`, `ad_image`, `name`, `city`, `mobile`, `email`, `time`) VALUES
(19, 'Tuition Services', 'Computer Science', 1000, 'this is demo', 'founder.jpg', 'Dr. Sanjeev Dhawn', 'Kurukshetra', '9802378295', 'rsdhawan@rediffmail.com', '2019-01-12 10:16:18'),
(18, 'Tuition Services', 'Computer Science', 1000, 'this is demo', 'founder.jpg', 'Dr. Sanjeev Dhawn', 'Kurukshetra', '9802378295', 'rsdhawan@rediffmail.com', '2019-01-12 10:15:38'),
(17, 'Books', 'C++', 250, 'This books quality is good. writer name dr. ....... editor 2018 publisher ....... ', 'Cyan-Abstract-Desktop-Wallpapers-www.wallpapersbrowse.com.jpg', 'Ajay', 'Kurukshetara', '9802378295', 'ajay.kadoula@gmail.com', '2018-03-18 14:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `subj1` varchar(255) NOT NULL,
  `subj2` varchar(255) NOT NULL,
  `subj3` varchar(255) NOT NULL,
  `subj4` varchar(255) NOT NULL,
  `subj5` varchar(255) NOT NULL,
  `subj6` varchar(255) NOT NULL,
  `subj7` varchar(255) NOT NULL,
  `subj8` varchar(255) NOT NULL,
  `subj9` varchar(255) NOT NULL,
  `subj10` varchar(255) NOT NULL,
  `subj11` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `department`, `degree`, `subj1`, `subj2`, `subj3`, `subj4`, `subj5`, `subj6`, `subj7`, `subj8`, `subj9`, `subj10`, `subj11`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) DEFAULT NULL,
  `user_password` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_gender` enum('male','female','m','f') NOT NULL,
  `user_dob` varchar(256) NOT NULL,
  `status` enum('Active','Inactive') DEFAULT NULL,
  `profile_image` text,
  `image_text` text,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `fname`, `sname`, `user_email`, `user_gender`, `user_dob`, `status`, `profile_image`, `image_text`) VALUES
(5, '9802378299', '', 'Rajesh', 'Kadoula', '', 'male', 'gurgaon-', NULL, 'f6592d0159f2be97ed7daa02866e635b.jpg', ''),
(4, '9802378295', '12345', 'Ajay', 'Kadoula', '', 'male', 'u.i.e.t kuk', 'Active', 'Cyan-Abstract-Desktop-Wallpapers-www.wallpapersbrowse.com (1).jpg', ''),
(6, '9802378298', '', 'pankaj', 'kudewala', '', 'male', 'uiet kuk', NULL, '75-fallout-4.jpg', ''),
(7, '7876666462', '', 'Ravi ', 'Soni', '', 'male', 'nivedita ellenabad', NULL, 'geralt_the_witcher_3_wild_hunt-wide-coda-craven.jpg', ''),
(8, '9802345678', '', 'demo', 'demo', '', 'male', 'sirsa', NULL, '1f64f-1f3fb.png', ''),
(9, '9876543210', '', 'demo', 'demo', '', 'male', 'demo', NULL, NULL, NULL),
(10, '9802378200', '12345', 'demo', 'demo', '', 'male', 'ellenabad', NULL, '1f426.png', ''),
(11, '8802378295', '12345', 'Ajay', 'Kadoula', '', 'male', 'Uiet', NULL, 'client_4.jpg', ''),
(12, '7802378295', '12345', 'Ajay', 'Kadoula', 'ajay.kadoula@gmail.com', 'male', 'uiet', NULL, 'g5.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_images`
--

DROP TABLE IF EXISTS `users_images`;
CREATE TABLE IF NOT EXISTS `users_images` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` varchar(200) NOT NULL,
  `url` text NOT NULL,
  `last_upload` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_images`
--

INSERT INTO `users_images` (`id`, `user`, `url`, `last_upload`) VALUES
(1, '1', '', ''),
(2, '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
