-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2014 at 07:02 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `music_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `album_id` int(8) NOT NULL AUTO_INCREMENT,
  `album_name` varchar(30) NOT NULL,
  `album_dir` varchar(30) NOT NULL,
  `album_desc` varchar(30) NOT NULL,
  `album_image` varchar(30) NOT NULL,
  `artist_id` int(8) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `album_name`, `album_dir`, `album_desc`, `album_image`, `artist_id`) VALUES
(1, 'Revolver', '', '', '', 1),
(2, 'OK Computer', '', '', '', 2),
(3, 'Kid A', '', '', '', 2),
(4, 'Vivir', '', '', '', 3),
(5, 'Sex and Love', '', '', '', 3),
(6, 'Insomniac', '', '', '', 3),
(7, 'Prism', '', '', '', 4),
(8, 'Teenage dream', '', '', '', 4),
(9, 'The Hunting Party', '', '', '', 5),
(10, 'Meteora', '', '', '', 5),
(11, 'Recharged', '', '', '', 5),
(12, 'Temper Temper', '', '', '', 6),
(13, 'Fever', '', '', '', 6),
(14, 'The Poison', '', '', '', 6),
(15, 'Death magnetic', '', '', '', 7),
(16, 'Through the Never', '', '', '', 7),
(17, 'Live Shit', '', '', '', 7),
(18, 'Quebec Magnetic', '', '', '', 7),
(19, 'Red', '', '', '', 8),
(20, 'Beautiful Eyes', '', '', '', 8),
(21, 'Freedom', '', '', '', 9),
(22, 'Trouble', '', '', '', 9),
(23, 'Unapologetic', '', '', '', 10),
(24, 'Loud', '', '', '', 10),
(25, 'Good Girl Gone Bad', '', '', '', 10),
(26, 'Talk That Talk', '', '', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
  `artist_id` int(8) NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(50) NOT NULL,
  `artist_pic` varchar(50) NOT NULL,
  `artist_bio` varchar(200) NOT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `artist_name`, `artist_pic`, `artist_bio`) VALUES
(1, 'Justin Bieber', '', 'Young Artist'),
(2, 'LMFAO', '', 'Funny video maker'),
(3, 'Akon', '', 'He is a NIGGA!'),
(4, '50Cent', '', 'Hip-Hop and a rapper'),
(5, 'Jay Sean', '', 'He is an Indian');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(8) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `customer_fname` varchar(50) NOT NULL,
  `customer_lname` varchar(50) NOT NULL,
  `customer_password` varchar(16) NOT NULL,
  `customer_gender` varchar(8) NOT NULL,
  `customer_birthday` date NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_country` varchar(30) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `user_name`, `customer_fname`, `customer_lname`, `customer_password`, `customer_gender`, `customer_birthday`, `customer_email`, `customer_country`) VALUES
(2, 'spike', 'Chathura', 'Pathmasooriya', 'chathura321', 'Male', '1993-07-02', 'chathurapathmasooriya@yahoo.com', 'Australia'),
(3, 'bloodrose', 'Devin', 'Amarasekara', 'devin321', 'Male', '1994-12-26', 'devinamarasekara@gmail.com', 'England');

-- --------------------------------------------------------

--
-- Table structure for table `customer_album`
--

CREATE TABLE IF NOT EXISTS `customer_album` (
  `customer_id` int(8) NOT NULL,
  `album_id` int(8) NOT NULL,
  PRIMARY KEY (`customer_id`,`album_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_song`
--

CREATE TABLE IF NOT EXISTS `customer_song` (
  `customer_id` int(8) NOT NULL,
  `song_id` int(8) NOT NULL,
  PRIMARY KEY (`customer_id`,`song_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `delivery_id` int(8) NOT NULL AUTO_INCREMENT,
  `delivery_name` varchar(30) NOT NULL,
  `delivery_company` varchar(30) NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_duration` int(3) NOT NULL COMMENT 'duration (days)',
  PRIMARY KEY (`delivery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `genre_id` int(8) NOT NULL AUTO_INCREMENT,
  `genre_name` varchar(50) NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`) VALUES
(1, 'Classic'),
(2, 'Pop'),
(4, 'Jazz'),
(5, 'Metal');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `purchase_id` int(8) NOT NULL AUTO_INCREMENT,
  `purchase_date` date NOT NULL,
  `purchase_time` time NOT NULL,
  `purchase_cost` double NOT NULL,
  `customer_id` int(8) NOT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_item`
--

CREATE TABLE IF NOT EXISTS `purchase_item` (
  `item_id` int(8) NOT NULL AUTO_INCREMENT,
  `item_name` int(30) NOT NULL,
  `item_type` varchar(10) NOT NULL,
  `item_price` double NOT NULL,
  `purchase_id` int(8) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE IF NOT EXISTS `song` (
  `song_id` int(8) NOT NULL AUTO_INCREMENT,
  `song_name` varchar(50) NOT NULL,
  `song_price` double NOT NULL,
  `song_filename` varchar(50) NOT NULL,
  `song_picture` text NOT NULL,
  `album_id` int(8) NOT NULL,
  `artist_id` int(8) NOT NULL,
  `genre_id` int(8) NOT NULL,
  PRIMARY KEY (`song_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`song_id`, `song_name`, `song_price`, `song_filename`, `song_picture`, `album_id`, `artist_id`, `genre_id`) VALUES
(4, 'Smile', 5, 'words-boyzone', 'title2.jpg', 111, 100, 2),
(5, 'I see a Boat', 10.5, 'boat bony m', '85006.jpg', 121, 11, 1),
(6, 'Every day I love U', 250, 'everyday love', 'mic.jpg', 13, 100, 4),
(7, 'Every day I love U', 250, 'everyday love', 'mic.jpg', 13, 100, 4),
(8, 'Hotel Californiya', 34.5, 'californiya', 'horde-world-of-warcraft-15578.jpg', 123, 321, 4),
(9, 'Every thing I Do', 125, 'everything', 'd2-logo.jpg', 0, 120, 5),
(10, 'I see a Boat', 10.5, 'boat bony m', 'dam.jpg', 121, 120, 4),
(11, 'lklk', 250, 'dsgsf', 'D-circle-logo-400.png', 121, 121, 5),
(12, 'Hotel Californiya', 34.5, 'dsgsf', 'admin.jpg', 123, 321, 1),
(13, 'klsfsd', 545, 'everything', 'log.jpg', 13, 121, 4),
(14, 'many', 250, 'more', 'D-circle-logo-400.png', 13, 564, 4),
(15, 'Hotel Californiya', 34.5, 'more', 'search2.png', 121, 564, 2),
(16, 'I see a Boat', 10.5, 'more', 'sound.png', 111, 100, 2),
(17, 'Words', 34.5, 'dsgsf', 'lamborghini_47-wallpaper-1366x768.jpg', 121, 564, 2),
(18, 'many', 250, 'californiya', '', 121, 100, 2),
(19, 'many', 125, 'dsgsf', '', 111, 564, 2),
(20, 'many', 34.5, 'dsgsf', '', 111, 100, 1),
(21, 'many', 10.5, 'more', '', 121, 100, 1),
(22, 'many', 10.5, 'more', '', 121, 100, 1),
(23, 'many', 10.5, 'more', '', 13, 100, 2),
(24, 'lklk', 10.5, 'californiya', '', 123, 100, 2),
(25, 'lklk', 250, 'more', '', 111, 100, 2),
(26, 'many', 34.5, 'dsgsf', '', 111, 321, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
