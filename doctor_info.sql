-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 05:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `d_id` int(100) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `d_email` varchar(100) NOT NULL,
  `d_password` varchar(100) NOT NULL,
  `d_mobile` bigint(100) NOT NULL,
  `d_alt_mobile` bigint(100) NOT NULL,
  `d_address` varchar(100) NOT NULL,
  `d_special` varchar(100) NOT NULL,
  `d_sex` varchar(100) NOT NULL,
  `d_language` varchar(100) NOT NULL,
  `d_image` varchar(100) NOT NULL,
  `d_aadhar` varchar(100) NOT NULL,
  `d_pan` varchar(100) NOT NULL,
  `d_reg_cer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`d_id`, `d_name`, `d_email`, `d_password`, `d_mobile`, `d_alt_mobile`, `d_address`, `d_special`, `d_sex`, `d_language`, `d_image`, `d_aadhar`, `d_pan`, `d_reg_cer`) VALUES
(2, 'ABC', 'a@gmail.com', 'password', 9999999999, 8888888888, 'hashfd   hashdha as safd jasfy jyaysf  jy   fausfdu ad', 'Specialization 1', 'M', 'English,Hindi', 'C:\\xampp\\tmp\\phpDD36.tmp', 'C:\\xampp\\tmp\\phpDD47.tmp', 'C:\\xampp\\tmp\\phpDD67.tmp', 'C:\\xampp\\tmp\\phpDD78.tmp'),
(3, 'ashdvahsvas', 'a@gmail.com', 'asydsagy ', 777777777, 7777777, 'dshnfsdfhisld', 'Select', 'M', 'Bengali', 'upload/doctor/d_upload_image/4090_1656946541_Alcazar Castle, Segovia, Spain.jpg', 'upload/doctor/d_upload_aadhar/4648_1656946541_Aralar, Navarre, Spain.jpg', 'upload/doctor/d_upload_pan/2993_1656946541_Avila, Castile, Spain.jpg', 'upload/doctor/d_upload_reg_cer/3928_1656946541_Beech Trees Along the Saliencia River, Somiedo Natura'),
(4, 'doc_test1', 'doc@gmail.com', 'password', 789789789, 49849848484, 'agsui uasuasuksauk uasa ', 'Specialization 1', 'M', 'Bengali,English,Hindi', 'upload/doctor/d_upload_image/6822_1656946683_Alcazar Castle, Segovia, Spain.jpg', 'upload/doctor/d_upload_aadhar/2127_1656946683_Campo de Criptana, Ciudad Real Province, Spain.jpg', 'upload/doctor/d_upload_pan/7490_1656946683_Avila, Castile, Spain.jpg', 'upload/doctor/d_upload_reg_cer/7413_1656946684_Beech Trees Along the Saliencia River, Somiedo Natura');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD PRIMARY KEY (`d_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_info`
--
ALTER TABLE `doctor_info`
  MODIFY `d_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
