-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Feb 2020 pada 19.32
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobersama.com`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `id` varchar(30) NOT NULL,
  `amount` int(12) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `timestamp` varchar(20) DEFAULT NULL,
  `bank_code` varchar(20) DEFAULT NULL,
  `account_number` varchar(30) DEFAULT NULL,
  `beneficiary_name` varchar(30) DEFAULT NULL,
  `remark` varchar(20) DEFAULT NULL,
  `receipt` varchar(30) DEFAULT NULL,
  `time_served` varchar(20) DEFAULT NULL,
  `fee` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`id`, `amount`, `status`, `timestamp`, `bank_code`, `account_number`, `beneficiary_name`, `remark`, `receipt`, `time_served`, `fee`) VALUES
('3000955844', 1212, 'SUCCESS', '2020-02-10 00:43:50', 'mandiri syariah', '33', 'PT FLIP', 'asd', 'https://flip-receipt.oss-ap-so', '2020-02-10 00:43:19', 4000),
('857343409', 2000000, 'SUCCESS', '2020-02-10 00:51:04', 'mandiri syariah', '3154', 'PT FLIP', 'Gajian', 'https://flip-receipt.oss-ap-so', '2020-02-10 00:50:34', 4000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
