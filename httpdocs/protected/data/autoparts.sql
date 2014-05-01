-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2014 at 12:05 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `autoparts`
--

-- --------------------------------------------------------

--
-- Table structure for table `autopart`
--

CREATE TABLE IF NOT EXISTS `autopart` (
  `autopart_id` int(11) NOT NULL AUTO_INCREMENT,
  `parttype_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `producer_id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`autopart_id`),
  KEY `parttype_id` (`parttype_id`),
  KEY `producer_id` (`producer_id`),
  KEY `car_id` (`car_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `autopart`
--

INSERT INTO `autopart` (`autopart_id`, `parttype_id`, `car_id`, `name`, `quantity`, `producer_id`, `description`, `price`) VALUES
(3, 1, 1, 'Колесо ', 2, 1, '', 11);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `producer` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `producer`, `model`) VALUES
(1, 'Mercedes', '190E Cosworth');

-- --------------------------------------------------------

--
-- Table structure for table `parttype`
--

CREATE TABLE IF NOT EXISTS `parttype` (
  `parttype_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`parttype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `parttype`
--

INSERT INTO `parttype` (`parttype_id`, `name`) VALUES
(1, 'Дверь');

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

CREATE TABLE IF NOT EXISTS `producer` (
  `producer_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  PRIMARY KEY (`producer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`producer_id`, `name`, `phone`) VALUES
(1, 'Бразерс', '89995558866');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `autopart`
--
ALTER TABLE `autopart`
  ADD CONSTRAINT `autopart_ibfk_3` FOREIGN KEY (`car_id`) REFERENCES `car` (`car_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `autopart_ibfk_1` FOREIGN KEY (`parttype_id`) REFERENCES `parttype` (`parttype_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `autopart_ibfk_2` FOREIGN KEY (`producer_id`) REFERENCES `producer` (`producer_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
