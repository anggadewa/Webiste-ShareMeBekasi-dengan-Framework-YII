-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 04:40 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharemeyii`
--

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id_saran` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `saran` text NOT NULL,
  `target` enum('Pemda','RumahSakit','Polda','Kelurahan','Kecamatan','Imigrasi','Lainnya') NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id_saran`, `username`, `nama`, `saran`, `target`, `waktu`) VALUES
(1, 'coba1', 'coba1', 'Pak lurahnya sodara saya', 'Kelurahan', '2018-11-25 05:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `sarana`
--

CREATE TABLE `sarana` (
  `id_saran` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `saran` text NOT NULL,
  `target` enum('Trotoar','Jembatan','Zebracross','Halte','Terminal','Stasiun','Lainnya') NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sarana`
--

INSERT INTO `sarana` (`id_saran`, `username`, `nama`, `saran`, `target`, `waktu`) VALUES
(3, 'coba2', 'Datacoba2', 'Terminal terlalu ramai', 'Terminal', '2018-11-25 05:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(35) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '10',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nik`, `nama`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `role`, `status`, `created_at`, `updated_at`) VALUES
(2, '12345', 'Datacoba', 'coba', '91UZJdRZy-mmxEili6rmViPWlbqzWyFP', '$2y$13$oGlC9pjO5vc/kLYRW6vYduoHinQiGrAFtttth4KlQ8WEGpV1.hs1m', 'm_cLpXe4xtt4s2M_Q1oIqKgk39EUv4dN_1543124529', 'exyatogami@gmail.com', 10, 10, 1542814239, 1543124529),
(3, '123456', 'Datacoba1', 'coba1', 'lPJLWzzIMlz3h3jntNL9z8h2REAkpm0t', '$2y$13$AxCDEh0.XaADdPS9608VyebdgpXYbtBtW2oj6t8xEpghknjhx7NiK', NULL, 'coba@coba1.com', 10, 10, 1542814340, 1542814340),
(4, '1234567', 'Datacoba2', 'coba2', 'UUOpjyUlKHvu50TdHARXPHDzTpJvT1ND', '$2y$13$lSuntCToj1c1u2315hNSxu5etKqOtLXME6RJR80ujlS0l/K7MuCy6', NULL, 'coba@coba2.com', 10, 10, 1542814481, 1542814481),
(5, '00000', 'admin', 'admin', 'V23skExgAtRVp2YjoihUVI8OPeT3vkbg', '$2y$13$wC3JbPcvsx0YzS31vmvByeKbzOzAapvS8PK8v9Owi2/AddEPKclDK', NULL, 'admin@admin.com', 10, 10, 1546932414, 1546932414),
(6, '50415459', 'Aldhy Putra Mahardika', 'aldhy', '7yVEx95mrrSteMloJ4EmU-LQu_Cvjinf', '$2y$13$kG2DWMgo9YluKRCcaO3UUOXSf8VyG5ID6a1hkQjFwDkwXzNELlmEG', NULL, 'aldhy@aldhy.com', 10, 10, 1547046480, 1547046480),
(7, '56415676', 'Sri Rahayu G', 'ayu', 'OAot5pj3VjMZgxHlEcRJZVzkK9HXvoX-', '$2y$13$YQH4Se4MaCLjbvVZACMuOexNSsvrnyg/ttXEMyEh0xttmbR3JLAQO', NULL, 'ayu@ayu.com', 10, 10, 1547046543, 1547046543),
(8, '53415397', 'Intan WulanSari', 'intan', 'pWtk7M77UGCcD9Ze6O1c-bwSnvKOG2Jv', '$2y$13$ofu3GPMHPgUGZfwEtSKRgedcdBkQtV56rG2VZvVFTuuKr1gRr8O9O', NULL, 'intan@intan.com', 10, 10, 1547046616, 1547046616),
(9, '54415255', 'Mohamad Arif Maulan', 'arif', 'MAK0mv1GkPAOTPlD-JvRVTALDoq0Moxm', '$2y$13$LuQ1v/3XYuuE8ocAGaeyhe1kh.N2ZeGLhRguSaIfuNwMrOyi6mBjS', NULL, 'arif@arif.com', 10, 10, 1547046662, 1547046662),
(10, '50415764', 'Angga Dewantoro Kekasih', 'angga', 'tg-Z596ZcVuXupXdY9r7WnjCkd8sTHrN', '$2y$13$f/c1e0PK79cM05PSIj9nFOYOq3gGzjSrd0r00Zgvdp1b2fS32s9vm', NULL, 'angga@angga.com', 10, 10, 1547046692, 1547046692);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `sarana`
--
ALTER TABLE `sarana`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sarana`
--
ALTER TABLE `sarana`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
