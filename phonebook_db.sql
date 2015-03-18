-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phonebook_db`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tb_book`
--

CREATE TABLE IF NOT EXISTS `tb_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- dump ตาราง `tb_book`
--

INSERT INTO `tb_book` (`id`, `name`, `mobile`, `phone`, `email`) VALUES
(1, 'facebook', '0931624206', '053356650', 'facebook@facebook.com'),
(2, 'google++', '0999999999', '999999999', 'google@google.com'),
(3, 'jquery++', '4444444444', '555555555', 'jquery@jquery.com'),
(4, 'test', '0202020202', '020202020', 'test@gmail.com'),
(5, 'computer++--', '9999999999', '999999999', 'computer@gmail.com');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- dump ตาราง `tb_user`
--

INSERT INTO `tb_user` (`id`, `user`, `password`) VALUES
(1, 'phonebook', '1619d7adc23f4f633f11014d2f22b7d8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
