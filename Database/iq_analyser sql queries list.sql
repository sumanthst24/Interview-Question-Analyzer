-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 10, 2019 at 04:00 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iq_analyser`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

DROP TABLE IF EXISTS `company_details`;
CREATE TABLE IF NOT EXISTS `company_details` (
  `cid` int(10) NOT NULL,
  `company_name` varchar(20) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`cid`, `company_name`) VALUES
(1, 'Google'),
(2, 'Amazon'),
(3, 'Facebook'),
(4, 'Apple'),
(5, 'Microsoft');

-- --------------------------------------------------------

--
-- Table structure for table `linking`
--

DROP TABLE IF EXISTS `linking`;
CREATE TABLE IF NOT EXISTS `linking` (
  `cid` int(11) NOT NULL,
  `topic_id` int(10) NOT NULL,
  `qno` int(10) NOT NULL,
  KEY `cid` (`cid`),
  KEY `topic_id` (`topic_id`),
  KEY `qno` (`qno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linking`
--

INSERT INTO `linking` (`cid`, `topic_id`, `qno`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(1, 1, 2),
(2, 1, 2),
(3, 1, 2),
(4, 1, 2),
(2, 1, 3),
(3, 1, 3),
(3, 1, 4),
(4, 1, 4),
(1, 2, 5),
(2, 2, 5),
(3, 2, 5),
(1, 2, 6),
(2, 2, 6),
(3, 2, 6),
(4, 2, 6),
(5, 2, 6),
(1, 2, 7),
(2, 2, 7),
(5, 2, 7),
(1, 3, 8),
(2, 3, 8),
(3, 3, 8),
(4, 3, 8),
(1, 3, 9),
(2, 3, 9),
(3, 3, 9),
(4, 3, 9),
(1, 4, 10),
(5, 4, 10),
(1, 4, 11),
(2, 5, 12),
(5, 5, 12),
(2, 5, 13);

-- --------------------------------------------------------

--
-- Table structure for table `login_credentials`
--

DROP TABLE IF EXISTS `login_credentials`;
CREATE TABLE IF NOT EXISTS `login_credentials` (
  `user_id` int(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_details`
--

DROP TABLE IF EXISTS `question_details`;
CREATE TABLE IF NOT EXISTS `question_details` (
  `qno` int(10) NOT NULL,
  `question` varchar(10000) NOT NULL,
  `difficulty` int(10) NOT NULL,
  `frequency` int(10) NOT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_details`
--

INSERT INTO `question_details` (`qno`, `question`, `difficulty`, `frequency`) VALUES
(1, 'Subarray with given sum', 2, 3),
(2, 'Count the triplets', 2, 4),
(3, 'Missing number in array', 3, 4),
(4, 'Merge Without Extra Space', 3, 5),
(5, 'Reverse words in a given string', 4, 5),
(6, 'Permutations of a given string', 3, 3),
(7, 'Anagram', 5, 2),
(8, 'Reverse a linked list', 5, 7),
(9, 'Merge two sorted linked lists', 6, 7),
(10, 'Queue using two Stacks', 5, 6),
(11, 'First non-repeating character in a stream', 3, 2),
(12, 'Check for BST', 2, 6),
(13, 'Given a binary tree, check whether it is a mirror of itself', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration_details`
--

DROP TABLE IF EXISTS `registration_details`;
CREATE TABLE IF NOT EXISTS `registration_details` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_details`
--

INSERT INTO `registration_details` (`user_id`, `user_name`, `password`) VALUES
(1234, 'efrefe', 'fgdgdg'),
(12345, 'afsfsgfsf', 'adfasfsf'),
(123454, 'afsfsgfsf', 'fwweesfswf'),
(123, 'abcd', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(10) NOT NULL,
  `topic_name` varchar(40) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_name`) VALUES
(1, 'Arrays'),
(2, 'Strings'),
(3, 'Linkedlist'),
(4, 'stack and queue'),
(5, 'Tree and BST');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
