-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2023 at 02:50 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perdoski`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `pass` varchar(100) NOT NULL,
  `re_pass` text NOT NULL,
  `token_id` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'avatar5.png',
  `full_name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` text NOT NULL,
  `level` text NOT NULL,
  `join_date` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `reff` int(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `user`, `pass`, `re_pass`, `token_id`, `image`, `full_name`, `email`, `no_hp`, `level`, `join_date`, `last_login`, `reff`, `status`) VALUES
(1, 'supermaster', 'f789a69d291cf9755ec3428b30f8e1bb', 'kopapdi2022', 1, 'avatar5.png', 'supermaster', '', '628112024428', 'superadmin', '2022-03-11 01:32:38', '2023-01-02 20:24:27', 1, 1),
(35, 'icmujicoba@gmail.com', '4d0d483c859a25e348b62091fe884cfe', 'indalas2022', 0, 'avatar5.png', 'Coba', 'icmujicoba@gmail.com', '1234', 'user', '2022-08-25 03:19:56', '2022-08-25 03:19:56', 1, 1),
(923, 'satedcc@gmail.com', '4d0d483c859a25e348b62091fe884cfe', 'indalas2022', 4139, 'avatar5.png', 'Satria Adipradana', 'satedcc@gmail.com', '082188293232', 'user', '2022-12-14 05:07:47', '2022-12-14 05:07:47', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=926;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
