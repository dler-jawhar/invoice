-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 02:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finance`
--

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `number` int(255) NOT NULL,
  `forCo` varchar(255) NOT NULL,
  `printCo` varchar(255) NOT NULL,
  `PayedDate` date NOT NULL,
  `invoiceNum` int(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `grantedTo` varchar(255) NOT NULL,
  `cost` float NOT NULL,
  `description` text NOT NULL,
  `attached` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`number`, `forCo`, `printCo`, `PayedDate`, `invoiceNum`, `state`, `note`, `grantedTo`, `cost`, `description`, `attached`, `currency`) VALUES
(36, '', '', '0000-00-00', 0, '', '', '', 0, ' dahal\r\nhfha\r\nfhald', 'IMG/63bb370b82636.', ''),
(37, '', '', '0000-00-00', 0, '', '', '', 53.9, ' ', 'IMG/63bb46c8d5749.', 'dinar'),
(38, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bb48fc0d141.', 'dolar'),
(39, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bbc1b97ad38.', 'dolar'),
(40, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bbc1b9ab25d.', 'dolar'),
(41, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bbc1b9d22a4.', 'dolar'),
(42, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bbc1ba27805.', 'dolar'),
(43, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bbc1ba4f2ef.', 'dolar'),
(44, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bbc1ba77b04.', 'dolar'),
(45, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bbc1baa1235.', 'dolar'),
(46, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bbc1bac7c33.', 'dolar'),
(48, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bbc1bb1bf47.', 'dolar'),
(49, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bbc1bb632d6.', 'dolar'),
(50, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bbc1bb90591.', 'dolar'),
(51, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bbc1bbb7684.', 'dolar'),
(52, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bbc1bbdfdbb.', 'dolar'),
(53, '', '', '0000-00-00', 0, 'payed', ' ', '', 0, '', 'IMG/63bbc1bc16113.', 'dinar'),
(54, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bbc1bc41d1d.', 'dolar'),
(55, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bbc1bc6e099.', 'dolar'),
(56, '', '', '0000-00-00', 0, '', '', '', 0, ' ', 'IMG/63bbc1bc9cbe4.', 'dolar'),
(57, '', '', '0000-00-00', 0, 'inProcess', ' ', '', 0, '', 'IMG/63bbc1bcc1947.', 'dolar'),
(66, '', '', '2023-02-24', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd047eeee2c.', 'dolar'),
(67, '', '', '0000-00-00', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd0482714cd.', 'dolar'),
(68, '', '', '2023-01-13', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd048561185.', 'dolar'),
(69, '', '', '2023-01-10', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd04899194c.', 'dolar'),
(70, '', '', '2023-01-13', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd048c2eaab.', 'dolar'),
(71, '', '', '2023-01-11', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd0491b2459.', 'dolar'),
(72, '', '', '2023-01-19', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd0494a9ec4.', 'dolar'),
(73, '', '', '2023-01-14', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd0497ded9c.', 'dolar'),
(74, '', '', '2023-01-21', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd049c7d112.', 'dolar'),
(75, '', '', '2023-01-21', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd049f56192.', 'dolar'),
(76, '', '', '2023-01-07', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd04a22fd01.', 'dolar'),
(77, '', '', '2023-01-13', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd04a658b59.', 'dolar'),
(79, '', '', '2023-01-12', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd04ad959f8.', 'dolar'),
(80, '', '', '2023-01-04', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd04b0cba7a.', 'dolar'),
(81, '', '', '2023-01-05', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd04b4895a7.', 'dolar'),
(82, '', '', '2023-01-19', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd04b727990.', 'dolar'),
(83, '', '', '2023-01-06', 0, 'inProcess', '', '', 0, ' ', 'IMG/63bd04ba7d4d0.', 'dolar'),
(85, '', '', '2023-01-21', 0, 'payed', ' ', '', 0, '', 'IMG/63bd04c0dedf2.', 'dolar'),
(89, 'hawkary', 'fs', '0000-00-00', 35, 'inProcess', '252gfag', '24', 24, ' gatg', 'IMG/63bd1296ad739.png', 'dolar'),
(90, 'hawkary', 'fs', '2022-07-07', 42, 'inProcess', 'gafdga', 'dler', 53.9, ' fdaffga', 'IMG/63bd12bce2415.png', 'dinar'),
(91, 'hawkary', 'fs', '2022-08-31', 5, 'inProcess', 'd', 'dler', 53.9, ' fd', 'IMG/63bd12d32347a.png', 'dolar'),
(92, 'hawkary', 'haji', '0000-00-00', 53, 'idle', ' gfadfgafdgd', 'da', 342, '2agag', 'IMG/63bd401913582.png', 'dolar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `number` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
