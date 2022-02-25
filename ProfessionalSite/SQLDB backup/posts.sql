-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 24, 2020 at 08:46 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prologin`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(255) NOT NULL AUTO_INCREMENT,
  `users_id` int(255) NOT NULL,
  `post_title` varchar(128) NOT NULL,
  `post_content` varchar(1024) NOT NULL,
  `post_due_date` varchar(50) NOT NULL,
  `post_due_time` varchar(10) NOT NULL,
  `post_time` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `users_id`, `post_title`, `post_content`, `post_due_date`, `post_due_time`, `post_time`) VALUES
(1, 1, 'Test post', 'This is a test of the post function! all posts should be displayed like this eventually. All good things take time, until they don\'t ? so lets not take too long with this !', '02/25/2020', '15:00', '2020-02-23 20:16:11'),
(2, 1, 'Next Test post', 'Some info will be posted here if its important!', '02/25/2020', '16:00', '2020-02-23 21:13:04'),
(3, 1, 'Third Test Post', 'This is the kind of thing you end up writing when you run out of things to put in a test post and don\'t feel like using lorum ipsum. What ever you do just keep typing so that you can fill the space to test your layout.  Just think about how bad this could look if I didn\'t  take the time to write this for testing purposes, it could of been a disaster! Anyway thanks for taking the time to actually read this bit of text.  bye ', '04/13/2020', '13:04', '2020-02-24 19:07:28'),
(4, 1, 'Fourth Test Post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae ultrices tellus. Aliquam et pharetra mauris. Fusce congue erat lectus, eget feugiat risus viverra et. Etiam elementum molestie felis ut finibus. In ut fermentum tellus, ut dapibus tellus. Nulla facilisi. Etiam condimentum dui vitae ornare pretium. Maecenas vehicula congue eleifend. In eget porttitor neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam sodales commodo aliquet. Curabitur a vestibulum nibh. Suspendisse vitae tortor malesuada, pulvinar purus faucibus, cursus odio. Etiam tincidunt dolor maximus imperdiet sagittis. Vivamus et posuere elit. Quisque mollis risus nisi.', '05/01/2020', '17:20', '2020-02-24 19:09:53'),
(5, 1, 'Fifth Test Post', 'This is the last test post I want to make in my life!!!', '08/12/2020', '12:08', '2020-02-24 19:19:13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
