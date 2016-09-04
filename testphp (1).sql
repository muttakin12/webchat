-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2016 at 04:40 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text,
  `msg_from` int(11) NOT NULL,
  `msg_to` int(11) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `message`, `msg_from`, `msg_to`) VALUES
(1, 'aigiuahos', 1, 2),
(2, 'gaufhoawi', 2, 1),
(3, 'hello', 2, 1),
(4, 'hi', 1, 2),
(5, 'hello', 2, 1),
(7, 'dgushiguhse', 1, 2),
(8, 'jhjhfh', 2, 1),
(9, 'testing', 1, 2),
(11, 'sfawaa', 2, 1),
(12, 'fawfawfa', 1, 2),
(13, 'fawgawgaw', 0, 0),
(14, 'suifahowaw', 1, 2),
(15, 'snofianwoijawl', 1, 2),
(16, 'hi', 1, 2),
(17, 'hello', 2, 1),
(18, 'where', 4, 3),
(19, 'here', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `testdata`
--

CREATE TABLE IF NOT EXISTS `testdata` (
  `id` int(11) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testdata`
--

INSERT INTO `testdata` (`id`, `data`) VALUES
(0, 'fawfawfa'),
(0, 'fawfawfaw');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `friendlist` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `friendlist`) VALUES
(1, 'ikot', 'ikot', 'user'),
(2, 'user', 'user', 'ikot'),
(3, 'user1', 'user1', 'user2'),
(4, 'user2', 'user2', 'user1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
