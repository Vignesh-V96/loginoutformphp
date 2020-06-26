-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2020 at 03:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `degree` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`id`, `name`, `lname`, `degree`, `email`, `password`, `cpassword`) VALUES
(1, 'Suresh', 'M', 'bsc', 'mksureshind@gmail.com', '$2y$10$e8mkGRlzWepFZXZzq6TNG.rIgwJGsR.jKxWoZaK4ZRwaHJqzh4SNi', '$2y$10$Z0RH0/8DCBAaAM9AeanOKeW9lUrYiOCLcWReeQ1hvyD35E08GFtJu'),
(2, 'vignesh', 'c', 'bsc', 'vikki@gmail.com', '$2y$10$97bpPLtEgac/xl8Q0MAQbOxYhq4Xpp.pQaYzr9evW4Oo.9QK6xmby', '$2y$10$tvgmjVGKU4Z5rv.ABOenUeQLgysy9bhAkHJsxdMycl8DV3VO01cRa'),
(3, 'vignesh', 'c', 'bsc', 'vikki@gmail.com', '$2y$10$idsfwU6Tzvuocqconu.7leCyMC0dn1ywSbEOrE8nlz5JqmjF2qI52', '$2y$10$cWe7R4BitfpLFlHnyjqiUuZogoNnjA5n6whmwQxosFP1uBTAwoUca'),
(4, 'vignesh', 'c', 'bsc', 'vikki@gmail.com', '$2y$10$4ZQRHMXQ1ZJU9rQDsi7rFu.6vMvKzwDyn4yn8hUp1to3SBNx7WlJy', '$2y$10$vmhshjQ.79.UlpEqfcSBtOc6ut9W5f3eX7Kgnh.7lgIPJ44uv2pjW'),
(5, 're', 'M', 'bsc', 'mksureyyhind@gmail.com', '$2y$10$0OuIiL.4AFtx1FBz2TZSuud1pQ0zuav5J9W85ra6TII3suf7bVwmq', '$2y$10$U4CdtS6MmSB36xjDMms1FOsbBewMIQxZxoVtkynMxhMIGlQr/zktm'),
(6, 'vignesh v', 'M', 'xxx', 'mksureshind@gmail.com', '$2y$10$Yym0WGo9l1f8veqe.li6R.AqFfIIbkw9yb9KMDI00DlahNYHK7kLy', '$2y$10$MyCGE0d6utbvwOtzdqb7vOh.YRgZVFnLX82Lx6Zb6hV5hpFdTXVnC'),
(7, 'c', 'M', 'fc', 'mksureshind@gmail.com', '$2y$10$Ynr83ww8pw52RzIfst9QV.1bRG76c05NxPqWNd3nAXd41qnphZ2M6', '$2y$10$VM4xqoCoY4EcxYz23vUGYuFo8Jq4UPYV4Sadsj18rfzFA6NuS77wa'),
(8, 'vignesh', 'v', 'bsc', 'mybussinessuse@gmail.com', '$2y$10$hKyHYLQX4pe2ftqgvNhOruyj8iqroQpy.fB5cJ4E3tfwAZ1EMkzTe', '$2y$10$wfx5NZR3k3UWO1Tp4CiwEOmw7S6SVFNRHXbKYVuu879cqva9xAn/i'),
(9, 'Suresh', 'M', 'bsc', 'mksureshhind@gmail.com', '$2y$10$0NP8f6H/kPV.M8w1PBNV4ewIDTDYQQxpFIfzjvvK4JFn/FIhAYjDa', '$2y$10$IUxsGGMrYAXzQU75g/EsYeP/LGZHLq/DWLV7YKrY45w8ZPcsja1HK'),
(10, 'Suresh', 'M', 'eee', 'mksgureshind@gmail.com', '$2y$10$5X/EFkVKiGX0HoNgZWLASuz9A5TUetSPO9g/eiCcw5UN76qXWuzTy', '$2y$10$EY.sZXXdKQoAGkm4fqiMVut/nXcjjXjYT04EY.YSUme1eCHWTSR16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
