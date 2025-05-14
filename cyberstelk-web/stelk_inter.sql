-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 08:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `siswa` (
  `snis` int(11) NOT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `spassword` varchar(255) DEFAULT NULL,
  `skelas` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


INSERT INTO `siswa` (`snis`, `sname`, `spassword`, `skelas`) VALUES
(544211263, 'Moh. Dzaki Ayatillah Arya Husein', '544211263', 'XI RPL 3'),
(544211275, 'Muh. Rezha Anugrah Tesar', '544211275', 'XI RPL 3'),
(544211289, 'M. Nabil Qasthary', '544211289', 'XI RPL 3'),
(544211227, 'Alsyan Bayu Pratama', '544211227', 'XI RPL 3');


CREATE TABLE `webuser` (
  `nis` varchar(255) NOT NULL,
  `usertype` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



INSERT INTO `webuser` (`nis`, `usertype`) VALUES
('544211263', 's'),
('544211289', 's'),
('544211227', 's'),
('544211275', 's');

ALTER TABLE `siswa`
  ADD PRIMARY KEY (`snis`);


ALTER TABLE `webuser`
  ADD PRIMARY KEY (`nis`);

